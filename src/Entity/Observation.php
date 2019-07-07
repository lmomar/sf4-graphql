<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ObservationRepository")
 */
class Observation
{
    public function __construct()
    {
        $this->created_at = new \DateTime();
    }

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $wind_chill;

    /**
     * @ORM\Column(type="integer")
     */
    private $wind_direction;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $wind_speed;

    /**
     * @ORM\Column(type="integer")
     */
    private $atm_humidity;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $atm_visibility;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $atm_pressure;

    /**
     * @ORM\Column(type="integer")
     */
    private $atm_rising;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ast_sunrise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $atm_sunset;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $condition_text;

    /**
     * @ORM\Column(type="integer")
     */
    private $condition_code;

    /**
     * @ORM\Column(type="integer")
     */
    private $condition_temperature;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWindChill(): ?int
    {
        return $this->wind_chill;
    }

    public function setWindChill(int $wind_chill): self
    {
        $this->wind_chill = $wind_chill;

        return $this;
    }

    public function getWindDirection(): ?int
    {
        return $this->wind_direction;
    }

    public function setWindDirection(int $wind_direction): self
    {
        $this->wind_direction = $wind_direction;

        return $this;
    }

    public function getWindSpeed()
    {
        return $this->wind_speed;
    }

    public function setWindSpeed($wind_speed): self
    {
        $this->wind_speed = $wind_speed;

        return $this;
    }

    public function getAtmHumidity(): ?int
    {
        return $this->atm_humidity;
    }

    public function setAtmHumidity(int $atm_humidity): self
    {
        $this->atm_humidity = $atm_humidity;

        return $this;
    }

    public function getAtmVisibility()
    {
        return $this->atm_visibility;
    }

    public function setAtmVisibility($atm_visibility): self
    {
        $this->atm_visibility = $atm_visibility;

        return $this;
    }

    public function getAtmPressure()
    {
        return $this->atm_pressure;
    }

    public function setAtmPressure($atm_pressure): self
    {
        $this->atm_pressure = $atm_pressure;

        return $this;
    }

    public function getAtmRising(): ?int
    {
        return $this->atm_rising;
    }

    public function setAtmRising(int $atm_rising): self
    {
        $this->atm_rising = $atm_rising;

        return $this;
    }

    public function getAstSunrise(): ?string
    {
        return $this->ast_sunrise;
    }

    public function setAstSunrise(string $ast_sunrise): self
    {
        $this->ast_sunrise = $ast_sunrise;

        return $this;
    }

    public function getAtmSunset(): ?string
    {
        return $this->atm_sunset;
    }

    public function setAtmSunset(string $atm_sunset): self
    {
        $this->atm_sunset = $atm_sunset;

        return $this;
    }

    public function getConditionText(): ?string
    {
        return $this->condition_text;
    }

    public function setConditionText(string $condition_text): self
    {
        $this->condition_text = $condition_text;

        return $this;
    }

    public function getConditionCode(): ?int
    {
        return $this->condition_code;
    }

    public function setConditionCode(int $condition_code): self
    {
        $this->condition_code = $condition_code;

        return $this;
    }

    public function getConditionTemperature(): ?int
    {
        return $this->condition_temperature;
    }

    public function setConditionTemperature(int $condition_temperature): self
    {
        $this->condition_temperature = $condition_temperature;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }
}
