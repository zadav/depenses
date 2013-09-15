<?php

namespace David\Bundle\DepenseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bilan
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="David\Bundle\DepenseBundle\Entity\BilanRepository")
 */
class Bilan
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
     * @var date
     *
     * @ORM\Column(name="mois", type="date")
     */
    private $mois;

    /**
     * @var float
     *
     * @ORM\Column(name="solde", type="float", nullable=true)
     */
    private $solde;

    /**
     * 
     * @ORM\OneToMany(targetEntity="David\Bundle\DepenseBundle\Entity\Ligne", mappedBy="bilan")
     */
    private $lignes;

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
     * Set solde
     *
     * @param float $solde
     * @return Bilan
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;
    
        return $this;
    }

    /**
     * Get solde
     *
     * @return float 
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set lignes
     *
     * @param \David\Bundle\DepenseBundle\Entity\Depense\Ligne $lignes
     * @return Bilan
     */
    public function setLignes(\David\Bundle\DepenseBundle\Entity\Depense\Ligne $lignes = null)
    {
        $this->lignes = $lignes;
    
        return $this;
    }

    /**
     * Get lignes
     *
     * @return \David\Bundle\DepenseBundle\Entity\Depense\Ligne 
     */
    public function getLignes()
    {
        return $this->lignes;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lignes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add lignes
     *
     * @param \David\Bundle\DepenseBundle\Entity\Ligne $lignes
     * @return Bilan
     */
    public function addLigne(\David\Bundle\DepenseBundle\Entity\Ligne $lignes)
    {
        $this->lignes[] = $lignes;
    
        return $this;
    }

    /**
     * Remove lignes
     *
     * @param \David\Bundle\DepenseBundle\Entity\Ligne $lignes
     */
    public function removeLigne(\David\Bundle\DepenseBundle\Entity\Ligne $lignes)
    {
        $this->lignes->removeElement($lignes);
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Bilan
     */
    public function setMois($date)
    {
        $this->mois = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getMois()
    {
        return $this->mois;
    }
}