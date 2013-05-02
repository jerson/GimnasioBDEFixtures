<?php

namespace Upao\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 */
class Ticket
{
    /**
     * @var \DateTime
     */
    private $fechaticket;

    /**
     * @var integer
     */
    private $totalticket;

    /**
     * @var string
     */
    private $anularticket;

    /**
     * @var float
     */
    private $numticket;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idproducto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idproducto = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set fechaticket
     *
     * @param \DateTime $fechaticket
     * @return Ticket
     */
    public function setFechaticket($fechaticket)
    {
        $this->fechaticket = $fechaticket;
    
        return $this;
    }

    /**
     * Get fechaticket
     *
     * @return \DateTime 
     */
    public function getFechaticket()
    {
        return $this->fechaticket;
    }

    /**
     * Set totalticket
     *
     * @param integer $totalticket
     * @return Ticket
     */
    public function setTotalticket($totalticket)
    {
        $this->totalticket = $totalticket;
    
        return $this;
    }

    /**
     * Get totalticket
     *
     * @return integer 
     */
    public function getTotalticket()
    {
        return $this->totalticket;
    }

    /**
     * Set anularticket
     *
     * @param string $anularticket
     * @return Ticket
     */
    public function setAnularticket($anularticket)
    {
        $this->anularticket = $anularticket;
    
        return $this;
    }

    /**
     * Get anularticket
     *
     * @return string 
     */
    public function getAnularticket()
    {
        return $this->anularticket;
    }

    /**
     * Get numticket
     *
     * @return float 
     */
    public function getNumticket()
    {
        return $this->numticket;
    }

    /**
     * Add idproducto
     *
     * @param \Upao\GimnasioBundle\Entity\Producto $idproducto
     * @return Ticket
     */
    public function addIdproducto(\Upao\GimnasioBundle\Entity\Producto $idproducto)
    {
        $this->idproducto[] = $idproducto;
    
        return $this;
    }

    /**
     * Remove idproducto
     *
     * @param \Upao\GimnasioBundle\Entity\Producto $idproducto
     */
    public function removeIdproducto(\Upao\GimnasioBundle\Entity\Producto $idproducto)
    {
        $this->idproducto->removeElement($idproducto);
    }

    /**
     * Get idproducto
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdproducto()
    {
        return $this->idproducto;
    }
}