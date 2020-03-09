<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SemesterRepository")
 * @ORM\Table(name="semesters")
 */
class Semester
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $educationYear;

    /**
     * @ORM\Column(type="smallint")
     */
    private $number;

    /**
     * @ORM\Column(type="smallint")
     */
    private $weeksAmount;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isCurrent;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\WorkWeek", mappedBy="semester")
     */
    private $workWeeks;

    public function __construct()
    {
        $this->workWeeks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEducationYear(): ?string
    {
        return $this->educationYear;
    }

    public function setEducationYear(string $educationYear): self
    {
        $this->educationYear = $educationYear;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getWeeksAmount(): ?int
    {
        return $this->weeksAmount;
    }

    public function setWeeksAmount(int $weeksAmount): self
    {
        $this->weeksAmount = $weeksAmount;

        return $this;
    }

    public function getIsCurrent(): ?bool
    {
        return $this->isCurrent;
    }

    public function setIsCurrent(bool $isCurrent): self
    {
        $this->isCurrent = $isCurrent;

        return $this;
    }

    /**
     * @return Collection|WorkWeek[]
     */
    public function getWorkWeeks(): Collection
    {
        return $this->workWeeks;
    }

    public function addWorkWeek(WorkWeek $workWeek): self
    {
        if (!$this->workWeeks->contains($workWeek)) {
            $this->workWeeks[] = $workWeek;
            $workWeek->setSemester($this);
        }

        return $this;
    }

    public function removeWorkWeek(WorkWeek $workWeek): self
    {
        if ($this->workWeeks->contains($workWeek)) {
            $this->workWeeks->removeElement($workWeek);
            // set the owning side to null (unless already changed)
            if ($workWeek->getSemester() === $this) {
                $workWeek->setSemester(null);
            }
        }

        return $this;
    }
}
