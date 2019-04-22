<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EpisodesRepository")
 */
class Episodes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Shows
     * @ORM\OneToOne(targetEntity="Shows")
     * @ORM\JoinColumn(name="show_id", referencedColumnName="id")
     */
    private $show;

    public function getId(): ?int
    {
        return $this->id;
    }
}
