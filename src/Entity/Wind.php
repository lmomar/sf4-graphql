<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WindRepository")
 */
class Wind
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
    private $chill;

    /**
     * @ORM\Column(type="integer")
     */
    private $direction;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $speed;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChill(): ?int
    {
        return $this->chill;
    }

    public function setChill(int $chill): self
    {
        $this->chill = $chill;

        return $this;
    }

    public function getDirection(): ?int
    {
        return $this->direction;
    }

    public function setDirection(int $direction): self
    {
        $this->direction = $direction;

        return $this;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed): self
    {
        $this->speed = $speed;

        return $this;
    }
}
