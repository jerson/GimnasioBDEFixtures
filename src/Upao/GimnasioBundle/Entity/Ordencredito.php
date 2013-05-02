<?php

namespace Upao\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordencredito
 */
class Ordencredito
{
    /**
     * @var \DateTime
     */
    private $fechaorcredito;

    /**
     * @var integer
     */
    private $totalorcredito;

    /**
     * @var string
     */
    private $anularorcredito;

    /**
     * @var string
     */
    private $canceladoorcredito;

    /**
     * @var \DateTime
     */
    private $fechacanceorcredito;

    /**
     * @var float
     */
    private $numorcredito;

    /**
     * @var \Upao\GimnasioBundle\Entity\Cliente
     */
    private $idcliente;

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
     * Set fechaorcredito
     *
     * @param \DateTime $fechaorcredito
     * @return Ordencredito
     */
    public function setFechaorcredito($fechaorcredito)
    {
        $this->fechaorcredito = $fechaorcredito;
    
        return $this;
    }

    /**
     * Get fechaorcredito
     *
     * @return \DateTime 
     */
    public function getFechaorcredito()
    {
        return $this->fechaorcredito;
    }

    /**
     * Set totalorcredito
     *
     * @param integer $totalorcredito
     * @return Ordencredito
     */
    public function setTotalorcredito($totalorcredito)
    {
        $this->totalorcredito = $totalorcredito;
    
        return $this;
    }

    /**
     * Get totalorcredito
     *
     * @return integer 
     */
    public function getTotalorcredito()
    {
        return $this->totalorcredito;
    }

    /**
     * Set anularorcredito
     *
     * @param string $anularorcredito
     * @return Ordencredito
     */
    public function setAnularorcredito($anularorcredito)
    {
        $this->anularorcredito = $anularorcredito;
    
        return $this;
    }

    /**
     * Get anularorcredito
     *
     * @return string 
     */
    public function getAnularorcredito()
    {
        return $this->anularorcredito;
    }

    /**
     * Set canceladoorcredito
     *
     * @param string $canceladoorcredito
     * @return Ordencredito
     */
    public function setCanceladoorcredito($canceladoorcredito)
    {
        $this->canceladoorcredito = $canceladoorcredito;
    
        return $this;
    }

    /**
     * Get canceladoorcredito
     *
     * @return string 
     */
    public function getCanceladoorcredito()
    {
        return $this->canceladoorcredito;
    }

    /**
     * Set fechacanceorcredito
     *
     * @param \DateTime $fechacanceorcredito
     * @return Ordencredito
     */
    public function setFechacanceorcredito($fechacanceorcredito)
    {
        $this->fechacanceorcredito = $fechacanceorcredito;
    
        return $this;
    }

    /**
     * Get fechacanceorcredito
     *
     * @return \DateTime 
     */
    public function getFechacanceorcredito()
    {
        return $this->fechacanceorcredito;
    }

    /**
     * Get numorcredito
     *
     * @return float 
     */
    public function getNumorcredito()
    {
        return $this->numorcredito;
    }

    /**
     * Set idcliente
     *
     * @param \Upao\GimnasioBundle\Entity\Cliente $idcliente
     * @return Ordencredito
     */
    public function setIdcliente(\Upao\GimnasioBundle\Entity\Cliente $idcliente = null)
    {
        $this->idcliente = $idcliente;
    
        return $this;
    }

    /**
     * Get idcliente
     *
     * @return \Upao\GimnasioBundle\Entity\Cliente 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Add idproducto
     *
     * @param \Upao\GimnasioBundle\Entity\Producto $idproducto
     * @return Ordencredito
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