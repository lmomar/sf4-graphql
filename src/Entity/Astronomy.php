<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AstronomyRepository")
 */
class Astronomy
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sunrise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sunset;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSunrise(): ?string
    {
        return $this->sunrise;
    }

    public function setSunrise(string $sunrise): self
    {
        $this->sunrise = $sunrise;

        return $this;
    }

    public function getSunset(): ?string
    {
        return $this->sunset;
    }

    public function setSunset(string $sunset): self
    {
        $this->sunset = $sunset;

        return $this;
    }
}
