<?php

namespace App\Entity;

use App\Repository\CustomerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CustomerRepository::class)
 */
class Customer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $idNumber;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sanctinned;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdNumber(): ?string
    {
        return $this->idNumber;
    }

    public function setIdNumber(string $idNumber): self
    {
        $this->idNumber = $idNumber;

        return $this;
    }

    public function getSanctinned(): ?bool
    {
        return $this->sanctinned;
    }

    public function setSanctinned(bool $sanctinned): self
    {
        $this->sanctinned = $sanctinned;

        return $this;
    }
}
