<?php


namespace App\Resolver;


use App\Repository\ObservationRepository;
use App\Services\RestApi;
use App\Services\Weather;
use Overblog\GraphQLBundle\Definition\Resolver\AliasedInterface;
use Overblog\GraphQLBundle\Definition\Resolver\ResolverInterface;

class ObservationResolver implements ResolverInterface, AliasedInterface
{

    private $observationRepository;
    private $weather;

    public function __construct(ObservationRepository $repository,Weather $weather)
    {
        $this->observationRepository = $repository;
        $this->weather = $weather;
    }

    public function resolve(String $city){
        return $this->weather->getData($city);
    }



    /**
     * Returns methods aliases.
     *
     * For instance:
     * array('myMethod' => 'myAlias')
     *
     * @return array
     */
    public static function getAliases(): array
    {
        return [
            'resolve' => 'Observation',
        ];
    }
}