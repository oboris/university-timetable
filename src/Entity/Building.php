<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BuildingRepository")
 * @ORM\Table(name="buildings")
 */
class Building
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sortName;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Auditorium", mappedBy="building")
     */
    private $auditoriums;

    public function __construct()
    {
        $this->auditoriums = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getSortName(): ?string
    {
        return $this->sortName;
    }

    public function setSortName(?string $sortName): self
    {
        $this->sortName = $sortName;

        return $this;
    }

    /**
     * @return Collection|Auditorium[]
     */
    public function getAuditoriums(): Collection
    {
        return $this->auditoriums;
    }

    public function addAuditorium(Auditorium $auditorium): self
    {
        if (!$this->auditoriums->contains($auditorium)) {
            $this->auditoriums[] = $auditorium;
            $auditorium->setBuilding($this);
        }

        return $this;
    }

    public function removeAuditorium(Auditorium $auditorium): self
    {
        if ($this->auditoriums->contains($auditorium)) {
            $this->auditoriums->removeElement($auditorium);
            // set the owning side to null (unless already changed)
            if ($auditorium->getBuilding() === $this) {
                $auditorium->setBuilding(null);
            }
        }

        return $this;
    }
}
