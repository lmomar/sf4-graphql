<?php


namespace App\Services;


use App\Entity\Observation;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMException;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class Weather
{

    private $httpClient;
    private $manager;
    /**
     * @var SerializerInterface
     */
    private $serializer;

    public function __construct(HttpClientInterface $client, EntityManagerInterface $manager, SerializerInterface $serializer)
    {
        $this->httpClient = $client;
        $this->manager = $manager;
        $this->serializer = $serializer;
    }

    public function getData(String $city)
    {
        $http = $this->httpClient->request('GET',
            'https://weather-ydn-yql.media.yahoo.com/forecastrss?location=' . trim($city) . ',ma&format=json', [
                'headers' => $this->getHeader($city)
            ]);
        if ($http->getStatusCode() !== 200) {
            die('err');
        }
        $data = json_decode($http->getContent(), true);
        return array_merge($data['current_observation'],array('city' => $data['location']['city'] ));


    }

    private function getHeader(String $city)
    {
        $consumer_secret = $_ENV['CONSUMER_SECRET'];
        $query = array(
            'location' => $city . ',ma',
            'format' => 'json',
        );
        $oauth = array(
            'oauth_consumer_key' => $_ENV['CONSUMER_KEY'],
            'oauth_nonce' => uniqid(mt_rand(1, 1000)),
            'oauth_signature_method' => 'HMAC-SHA1',
            'oauth_timestamp' => time(),
            'oauth_version' => '1.0'
        );
        $base_info = $this->buildBaseString($_ENV['YAHOO_API'], 'GET', array_merge($query, $oauth));
        $composite_key = rawurlencode($consumer_secret) . '&';
        $oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
        $oauth['oauth_signature'] = $oauth_signature;
        $header = array(
            $this->buildAuthorizationHeader($oauth),
            'X-Yahoo-App-Id: ' . $_ENV['APP_ID']
        );
        return $header;
    }

    private function buildBaseString($baseURI, $method, $params)
    {
        $r = array();
        ksort($params);
        foreach ($params as $key => $value) {
            $r[] = "$key=" . rawurlencode($value);
        }
        return $method . "&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
    }

    private function buildAuthorizationHeader($oauth)
    {
        $r = 'Authorization: OAuth ';
        $values = array();
        foreach ($oauth as $key => $value) {
            $values[] = "$key=\"" . rawurlencode($value) . "\"";
        }
        $r .= implode(', ', $values);
        return $r;
    }

    private function saveData($data = array()): void
    {
        $observation = new Observation();
        try {
            // dump($data);
            /**
             * setting wind data
             */
            $observation->setWindChill($data['current_observation']['wind']['chill']);
            $observation->setWindDirection($data['current_observation']['wind']['direction']);
            $observation->setWindSpeed($data['current_observation']['wind']['speed']);
            /**
             * setting atmosphere data
             */
            $observation->setAtmHumidity($data['current_observation']['atmosphere']['humidity']);
            $observation->setAtmVisibility($data['current_observation']['atmosphere']['visibility']);
            $observation->setAtmPressure($data['current_observation']['atmosphere']['pressure']);
            $observation->setAtmRising($data['current_observation']['atmosphere']['rising']);
            /**
             * setting astronomy data
             */
            $observation->setAstSunrise($data['current_observation']['astronomy']['sunrise']);
            $observation->setAtmSunset($data['current_observation']['astronomy']['sunset']);
            /**
             * setting condition data
             */
            $observation->setConditionText($data['current_observation']['condition']['text']);
            $observation->setConditionCode($data['current_observation']['condition']['code']);
            $observation->setConditionTemperature($data['current_observation']['condition']['temperature']);

            /**
             * setting city name
             */
            $observation->setCity($data['location']['city']);
            $this->manager->persist($observation);
            $this->manager->flush();
            //return true;
        } catch (ORMException $exception) {
            //var_dump($exception);die('err');
            //return false;
        }
    }
}