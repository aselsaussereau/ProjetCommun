<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use AppBundle\Entity\User;


/**
 * Plat
 *
 * @ORM\Table(name="plat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlatRepository")
 */
class Plat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idPlat", type="integer", unique=true)
     */
    private $idPlat;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPlat", type="string", length=255)
     */
    private $nomPlat;

    /**
     * @var string
     *
     * @ORM\Column(name="categoriePlat", type="string", length=255)
     */
    private $categoriePlat;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionPlat", type="string", length=500)
     */
    private $descriptionPlat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dureeValide", type="datetime")
     */
    private $dureeValide;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creeA", type="datetime")
     */
    private $creeA;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Ajouter une image jpg")
     * @Assert\File(mimeTypes={ "image/jpeg" })
     */
    private $imagePlat;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Commentaire",mappedBy="plat")
     */
    private $commentaires;

    /**
     * @ORM\ManyToMany(targetEntity="User")
     */
    private $users;

    
    public function __construct()
    {
        $this->users = new ArrayCollection();

        $this->commentaires = new ArrayCollection();
        $this->setCreeA(new \DateTime());
    }

    /**
     * @return mixed
     */
    public function getImagePlat()
    {
        return $this->imagePlat;
    }

    /**
     * @return ArrayCollection|Plat[]
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     */
    public function setCommentaires($commentaires)
    {
        $this->commentaires[] = $commentaires;
    }

    /**
     * @param mixed $imagePlat
     */
    public function setImagePlat($imagePlat)
    {
        $this->imagePlat = $imagePlat;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idPlat
     *
     * @param integer $idPlat
     *
     * @return Plat
     */
    public function setIdPlat($idPlat)
    {
        $this->idPlat = $idPlat;

        return $this;
    }

    /**
     * Get idPlat
     *
     * @return int
     */
    public function getIdPlat()
    {
        return $this->idPlat;
    }

    /**
     * Set nomPlat
     *
     * @param string $nomPlat
     *
     * @return Plat
     */
    public function setNomPlat($nomPlat)
    {
        $this->nomPlat = $nomPlat;

        return $this;
    }

    /**
     * Get nomPlat
     *
     * @return string
     */
    public function getNomPlat()
    {
        return $this->nomPlat;
    }

    /**
     * Set categoriePlat
     *
     * @param string $categoriePlat
     *
     * @return Plat
     */
    public function setCategoriePlat($categoriePlat)
    {
        $this->categoriePlat = $categoriePlat;

        return $this;
    }

    /**
     * Get categoriePlat
     *
     * @return string
     */
    public function getCategoriePlat()
    {
        return $this->categoriePlat;
    }

    /**
     * Set descriptionPlat
     *
     * @param string $descriptionPlat
     *
     * @return Plat
     */
    public function setDescriptionPlat($descriptionPlat)
    {
        $this->descriptionPlat = $descriptionPlat;

        return $this;
    }

    /**
     * Get descriptionPlat
     *
     * @return string
     */
    public function getDescriptionPlat()
    {
        return $this->descriptionPlat;
    }

    /**
     * Set dureeValide
     *
     * @param \DateTime $dureeValide
     *
     * @return Plat
     */
    public function setDureeValide($dureeValide)
    {
        $this->dureeValide = $dureeValide;

        return $this;
    }

    /**
     * Get dureeValide
     *
     * @return \DateTime
     */
    public function getDureeValide()
    {
        return $this->dureeValide;
    }

    /**
     * Set creeA
     *
     * @param \DateTime $creeA
     *
     * @return Plat
     */
    public function setCreeA($creeA)
    {
        $this->creeA = $creeA;

        return $this;
    }

    /**
     * Get creeA
     *
     * @return \DateTime
     */
    public function getCreeA()
    {
        return $this->creeA;
    }

    public function addUser(User $user)
    {
        if ($this->users->contains($user)) {
            return;
        }
        $this->users[] = $user;

    }

    /**
     * @return ArrayCollection|Plat[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    public function removeUser(User $user)
    {
        if ($this->users->contains($user)) {
            return $this->users->removeElement($user);
        } else {
            return;
        }
    }
}

