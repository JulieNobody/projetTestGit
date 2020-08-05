<?php

namespace App\Entity;

use App\Repository\TityRepository;
use Doctrine\ORM\Mapping as ORM;
//C MOA K L BAUSS
/**
 * @ORM\Entity(repositoryClass=TityRepository::class)
 */
class Tity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
//C MOA K L BAUSS
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;
//C MOA K L BAUSS
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $color;
//C MOA K L BAUSS
    public function getId(): ?int
    {
        return $this->id;
    }
//C MOA K L BAUSS
    public function getName(): ?string
    {
        return $this->name;
    }
//C MOA K L BAUSS
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
//C MOA K L BAUSS
    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }
}
