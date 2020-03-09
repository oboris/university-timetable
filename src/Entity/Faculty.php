<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FacultyRepository")
 * @ORM\Table(name="faculties")
 */
class Faculty
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
     * @ORM\Column(type="string", length=255)
     */
    private $shortName;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Auditorium", mappedBy="faculty")
     */
    private $auditoriums;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Group", mappedBy="faculty")
     */
    private $groups;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AppUser", mappedBy="faculty")
     */
    private $appUsers;

    public function __construct()
    {
        $this->auditoriums = new ArrayCollection();
        $this->groups = new ArrayCollection();
        $this->appUsers = new ArrayCollection();
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

    public function getShortName(): ?string
    {
        return $this->shortName;
    }

    public function setShortName(string $shortName): self
    {
        $this->shortName = $shortName;

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
            $auditorium->setFaculty($this);
        }

        return $this;
    }

    public function removeAuditorium(Auditorium $auditorium): self
    {
        if ($this->auditoriums->contains($auditorium)) {
            $this->auditoriums->removeElement($auditorium);
            // set the owning side to null (unless already changed)
            if ($auditorium->getFaculty() === $this) {
                $auditorium->setFaculty(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Group[]
     */
    public function getGroups(): Collection
    {
        return $this->groups;
    }

    public function addGroup(Group $group): self
    {
        if (!$this->groups->contains($group)) {
            $this->groups[] = $group;
            $group->setFaculty($this);
        }

        return $this;
    }

    public function removeGroup(Group $group): self
    {
        if ($this->groups->contains($group)) {
            $this->groups->removeElement($group);
            // set the owning side to null (unless already changed)
            if ($group->getFaculty() === $this) {
                $group->setFaculty(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|AppUser[]
     */
    public function getAppUsers(): Collection
    {
        return $this->appUsers;
    }

    public function addAppUser(AppUser $appUser): self
    {
        if (!$this->appUsers->contains($appUser)) {
            $this->appUsers[] = $appUser;
            $appUser->setFaculty($this);
        }

        return $this;
    }

    public function removeAppUser(AppUser $appUser): self
    {
        if ($this->appUsers->contains($appUser)) {
            $this->appUsers->removeElement($appUser);
            // set the owning side to null (unless already changed)
            if ($appUser->getFaculty() === $this) {
                $appUser->setFaculty(null);
            }
        }

        return $this;
    }
}
