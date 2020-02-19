<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FilmsRepository")
 */
class Films
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *  * @Assert\Length(
     *      min = 2,
     *      max =100,
     *      minMessage = "Le titre du film est trop court",
     *      maxMessage = "Le titre du film est trop long",
     * )
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     * * @Assert\Url(
     * message="Ce n'est pas une url")
     *      
     */
    private $affiche;

    /**
     * @ORM\Column(type="string", length=255)
     * * @Assert\Length(
     *      min = 2,
     *      max =100,
     *      minMessage = "Le nom du réalisateur est trop court",
     *      maxMessage = "Le nom du réalisateur est trop long",
     * )
     */
    private $realisateur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * * * @Assert\Length(
     *      min = 2,
     *      max =100,
     *      minMessage = "Le nom de la récompense est trop courte",
     *      maxMessage = "Le nom de la récompense est trop longue",
     * )
     */
    private $recompense;

    /**
     * @ORM\Column(type="date")
     */
    private $sorti;

    /**
     * @ORM\Column(type="string", length=1000)
     * * * * @Assert\Length(
     *      min = 15,
     *      max =1000,
     *      minMessage = "Le synopsis est trop court",
     *      maxMessage = "Le synopsis est trop long",
     * )
     */
    private $synopsis;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAffiche(): ?string
    {
        return $this->affiche;
    }

    public function setAffiche(string $affiche): self
    {
        $this->affiche = $affiche;

        return $this;
    }

    public function getRealisateur(): ?string
    {
        return $this->realisateur;
    }

    public function setRealisateur(string $realisateur): self
    {
        $this->realisateur = $realisateur;

        return $this;
    }

    public function getRecompense(): ?string
    {
        return $this->recompense;
    }

    public function setRecompense(?string $recompense): self
    {
        $this->recompense = $recompense;

        return $this;
    }

    public function getSorti(): ?\DateTimeInterface
    {
        return $this->sorti;
    }

    public function setSorti(\DateTimeInterface $sorti): self
    {
        $this->sorti = $sorti;

        return $this;
    }

    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis): self
    {
        $this->synopsis = $synopsis;

        return $this;
    }
}
