<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as FOSUser;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\Plat;


/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends FOSUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $prenom;


    /**
     * @ORM\Column(type="datetime")
     */
    protected $dnaiss;

    /**
     * @ORM\Column(type="integer")
     */
    protected $genre;

    /**
     * @ORM\Column(type="string", length=14)
     */
    protected $tel;

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @ORM\Column(type="text")
     *
     * @Assert\NotBlank(message="Ajouter une image jpg")
     * @Assert\File(mimeTypes={ "image/jpeg" })
     */
    private $imageUser;

    /**
     * @ORM\ManyToMany(targetEntity="Plat", mappedBy="users")
     *
     */
    protected $plats;

    public function __construct()
    {
        parent::__construct();
        $this->plats = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getImageUser()
    {
        return $this->imageUser;
    }

    /**
     * @param mixed $imageUser
     */
    public function setImageUser($imageUser)
    {
        $this->imageUser = $imageUser;
    }


    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getDnaiss()
    {
        return $this->dnaiss;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setDnaiss($dnaiss)
    {
        $this->dnaiss = $dnaiss;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function setEmail($email)
    {
        $email = is_null($email) ? '' : $email;
        parent::setEmail($email);
        $this->setUsername($email);

        return $this;
    }


    public function addPlat(Plat $plat)
    {
        if ($this->plats->contains($plat)) {
            return;
        }
        $this->plats[] = $plat;

    }

    /**
     * @return ArrayCollection|Plat[]
     */
    public function getPlats()
    {
        return $this->plats;
    }

    public function removePlat(Plat $plat)
    {
        if ($this->plats->contains($plat)) {
            return $this->plats->removeElement($plat);
        } else {
            return;
        }
    }
}