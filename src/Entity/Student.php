<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 */
class Student
{
   

    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=255)
     */
    private $NSC;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

  

    public function getNSC(): ?string
    {
        return $this->NSC;
    }

    public function setNSC(string $NSC): self
    {
        $this->NSC = $NSC;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }
}
