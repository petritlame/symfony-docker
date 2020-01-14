<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InfoCdrRepository")
 */
class InfoCdr
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
    private $destination_name;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $src;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $dst;

    /**
     * @ORM\Column(type="datetime")
     */
    private $calldate;

    /**
     * @ORM\Column(type="integer")
     */
    private $billsec;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDestinationName(): ?string
    {
        return $this->destination_name;
    }

    public function setDestinationName(string $destination_name): self
    {
        $this->destination_name = $destination_name;

        return $this;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function setSrc(string $src): self
    {
        $this->src = $src;

        return $this;
    }

    public function getDst(): ?string
    {
        return $this->dst;
    }

    public function setDst(string $dst): self
    {
        $this->dst = $dst;

        return $this;
    }

    public function getCalldate(): ?\DateTimeInterface
    {
        return $this->calldate;
    }

    public function setCalldate(\DateTimeInterface $calldate): self
    {
        $this->calldate = $calldate;

        return $this;
    }

    public function getBillsec(): ?int
    {
        return $this->billsec;
    }

    public function setBillsec(int $billsec): self
    {
        $this->billsec = $billsec;

        return $this;
    }

    public function getRate(): ?string
    {
        return $this->rate;
    }

    public function setRate(string $rate): self
    {
        $this->rate = $rate;

        return $this;
    }
}
