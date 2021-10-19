<?php

namespace App\Entity;

use App\Repository\PaysRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass=PaysRepository::class)
 */
class Pays
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
    private $nom;

  /**
   * @ORM\OneToMany(targetEntity="App\Entity\Utilisateur", mappedBy="pays")
   */
  private $utilisateurs;

  public function __construct()
  {
    $this->utilisateurs = new ArrayCollection();
  }

  public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }


    /**
     * @return Collection|Utilisateur[]
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }

  /**
   * @param ArrayCollection $utilisateurs
   */
  public function setUtilisateurs(ArrayCollection $utilisateurs): void
  {
    $this->utilisateurs = $utilisateurs;
  }

}
