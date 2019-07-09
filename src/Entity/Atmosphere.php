<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AtmosphereRepository")
 */
class Atmosphere
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $humidity;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $visibility;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $pressure;

    /**
     * @ORM\Column(type="integer")
     */
    private $rising;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHumidity(): ?int
    {
        return $this->humidity;
    }

    public function setHumidity(int $humidity): self
    {
        $this->humidity = $humidity;

        return $this;
    }

    public function getVisibility()
    {
        return $this->visibility;
    }

    public function setVisibility($visibility): self
    {
        $this->visibility = $visibility;

        return $this;
    }

    public function getPressure()
    {
        return $this->pressure;
    }

    public function setPressure($pressure): self
    {
        $this->pressure = $pressure;

        return $this;
    }

    public function getRising(): ?int
    {
        return $this->rising;
    }

    public function setRising(int $rising): self
    {
        $this->rising = $rising;

        return $this;
    }
}
