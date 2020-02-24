<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AuditoriumRepository")
 */
class Auditorium
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $number;

    /**
     * @ORM\Column(type="integer")
     */
    private $amountPlaces;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Building", inversedBy="auditoriums")
     * @ORM\JoinColumn(nullable=false)
     */
    private $building;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Faculty", inversedBy="auditoriums")
     * @ORM\JoinColumn(nullable=false)
     */
    private $faculty;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getAmountPlaces(): ?int
    {
        return $this->amountPlaces;
    }

    public function setAmountPlaces(int $amountPlaces): self
    {
        $this->amountPlaces = $amountPlaces;

        return $this;
    }

    public function getBuilding(): ?Building
    {
        return $this->building;
    }

    public function setBuilding(?Building $building): self
    {
        $this->building = $building;

        return $this;
    }

    public function getFaculty(): ?Faculty
    {
        return $this->faculty;
    }

    public function setFaculty(?Faculty $faculty): self
    {
        $this->faculty = $faculty;

        return $this;
    }
}
