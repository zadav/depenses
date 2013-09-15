<?php

namespace David\Bundle\DepenseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ligne
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="David\Bundle\DepenseBundle\Entity\LigneRepository")
 */
class Ligne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;
    
    /**
     * @var date
     *
     * @ORM\Column(name="jour", type="date")
     */
    private $jour;
    
    /**
     * @var bilan
     * 
     * @ORM\ManyToOne(targetEntity="Bilan", inversedBy="lignes")
     */
    private $bilan;
    
    /**
     * @var category
     * 
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="lignes")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;
    
    
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
     * Set libelle
     *
     * @param string $libelle
     * @return Ligne
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Ligne
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return Ligne
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    
        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set jour
     *
     * @param \DateTime $date
     * @return Ligne
     */
    public function setDate($jour)
    {
        $this->jour = $jour;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getJour()
    {
        return $this->jour;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->category = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set bilan
     *
     * @param \David\Bundle\DepenseBundle\Entity\Bilan $bilan
     * @return Ligne
     */
    public function setBilan(\David\Bundle\DepenseBundle\Entity\Bilan $bilan = null)
    {
        $this->bilan = $bilan;
    
        return $this;
    }

    /**
     * Get bilan
     *
     * @return \David\Bundle\DepenseBundle\Entity\Bilan 
     */
    public function getBilan()
    {
        return $this->bilan;
    }


    /**
     * Set category
     *
     * @param \David\Bundle\DepenseBundle\Entity\Category $category
     * @return Ligne
     */
    public function setCategory(\David\Bundle\DepenseBundle\Entity\Category $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \David\Bundle\DepenseBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set jour
     *
     * @param \DateTime $jour
     * @return Ligne
     */
    public function setJour($jour)
    {
        $this->jour = $jour;
    
        return $this;
    }
}