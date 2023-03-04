<?php

namespace App\Entity;

use App\Repository\ClubRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClubRepository::class)
 */
class Club
{
    
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=255)
     */
    private $REF;

    /**
     * @ORM\Column(type="date")
     */
    private $CreatedAt;

   

    public function getREF(): ?string
    {
        return $this->REF;
    }

    public function setREF(string $REF): self
    {
        $this->REF = $REF;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->CreatedAt;
    }

    public function setCreatedAt(\DateTimeInterface $CreatedAt): self
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }
}
