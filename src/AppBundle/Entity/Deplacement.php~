<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="deplacement2")
*/
class Deplacement {

  /**
  * @ORM\Column(type="integer")
  * @ORM\Id
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  protected $id;

  /**
  * @ORM\Column(type="string", length=100)
  */
  protected $nom;

  /**
  * @ORM\Column(type="string", length=100)
  */
  protected $prenom;

  /**
  * @ORM\Column(type="string", length=100)
  */
  protected $email;

  /**
  * @ORM\Column(type="string", length=100)
  */
   protected $ville;

  /**
  * @ORM\Column(type="date")
  */
   protected $datedepart;

  /**
  * @ORM\Column(type="time")
  */
   protected $timedepart;

  /**
  * @ORM\Column(type="date")
  */
   protected $dateretour;

  /**
  * @ORM\Column(type="time")
  */
   protected $timeretour;

  /**
  * @ORM\Column(type="string", length=100)
  */
  protected $moyen;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Deplacement
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Deplacement
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Deplacement
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Deplacement
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set moyen
     *
     * @param string $moyen
     *
     * @return Deplacement
     */
    public function setMoyen($moyen)
    {
        $this->moyen = $moyen;

        return $this;
    }

    /**
     * Get moyen
     *
     * @return string
     */
    public function getMoyen()
    {
        return $this->moyen;
    }

    /**
     * Set datedepart
     *
     * @param \Date $datedepart
     *
     * @return Deplacement
     */
    public function setDatedepart($datedepart)
    {
        $this->datedepart = $datedepart;

        return $this;
    }

    /**
     * Get datedepart
     *
     * @return \Date
     */
    public function getDatedepart()
    {
        return $this->datedepart;
    }

    /**
     * Set dateretour
     *
     * @param \Date $dateretour
     *
     * @return Deplacement
     */
    public function setDateretour($dateretour)
    {
        $this->dateretour = $dateretour;

        return $this;
    }

    /**
     * Get dateretour
     *
     * @return \Date
     */
    public function getDateretour()
    {
        return $this->dateretour;
    }

    /**
     * Set timedepart
     *
     * @param \Time $timedepart
     *
     * @return Deplacement
     */
    public function setTimedepart($timedepart)
    {
        $this->timedepart = $timedepart;

        return $this;
    }

    /**
     * Get timedepart
     *
     * @return \Time
     */
    public function getTimedepart()
    {
        return $this->timedepart;
    }

    /**
     * Set timeretour
     *
     * @param \Time $timeretour
     *
     * @return Deplacement
     */
    public function setTimeretour($timeretour)
    {
        $this->timeretour = $timeretour;

        return $this;
    }

    /**
     * Get timeretour
     *
     * @return \Time
     */
    public function getTimeretour()
    {
        return $this->timeretour;
    }
}
