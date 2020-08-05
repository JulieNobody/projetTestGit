<?php

namespace App\Entity;

use App\Repository\Entity2Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Entity2Repository::class)
 */
class Entity2
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
    private $sdfdsfsd;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $efzefzefze;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSdfdsfsd(): ?string
    {
        return $this->sdfdsfsd;
    }

    public function setSdfdsfsd(string $sdfdsfsd): self
    {
        $this->sdfdsfsd = $sdfdsfsd;

        return $this;
    }

    public function getEfzefzefze(): ?string
    {
        return $this->efzefzefze;
    }

    public function setEfzefzefze(string $efzefzefze): self
    {
        $this->efzefzefze = $efzefzefze;

        return $this;
    }
}
