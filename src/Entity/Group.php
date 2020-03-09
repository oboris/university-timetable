<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GroupRepository")
 * @ORM\Table(name="groups")
 */
class Group
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $code;

    /**
     * @ORM\Column(type="integer")
     */
    private $amountStudents;

    /**
     * @ORM\Column(type="integer")
     */
    private $courseNumber;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Faculty", inversedBy="groups")
     * @ORM\JoinColumn(nullable=false)
     */
    private $faculty;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\EducationLevel")
     * @ORM\JoinColumn(nullable=false)
     */
    private $educationLevel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Speciality")
     * @ORM\JoinColumn(nullable=false)
     */
    private $speciality;

    /**
     * @ORM\Column(type="smallint")
     */
    private $studyDuration;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getAmountStudents(): ?int
    {
        return $this->amountStudents;
    }

    public function setAmountStudents(int $amountStudents): self
    {
        $this->amountStudents = $amountStudents;

        return $this;
    }

    public function getCourseNumber(): ?int
    {
        return $this->courseNumber;
    }

    public function setCourseNumber(int $courseNumber): self
    {
        $this->courseNumber = $courseNumber;

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

    public function getEducationLevel(): ?EducationLevel
    {
        return $this->educationLevel;
    }

    public function setEducationLevel(?EducationLevel $educationLevel): self
    {
        $this->educationLevel = $educationLevel;

        return $this;
    }

    public function getSpeciality(): ?Speciality
    {
        return $this->speciality;
    }

    public function setSpeciality(?Speciality $speciality): self
    {
        $this->speciality = $speciality;

        return $this;
    }

    public function getStudyDuration(): ?int
    {
        return $this->studyDuration;
    }

    public function setStudyDuration(int $studyDuration): self
    {
        $this->studyDuration = $studyDuration;

        return $this;
    }
}
