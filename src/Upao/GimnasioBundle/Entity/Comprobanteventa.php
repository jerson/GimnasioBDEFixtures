<?php

namespace Upao\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comprobanteventa
 */
class Comprobanteventa
{
    /**
     * @var \DateTime
     */
    private $fechacomvent;

    /**
     * @var string
     */
    private $tipocomvent;

    /**
     * @var integer
     */
    private $totalcomvent;

    /**
     * @var string
     */
    private $anularcomvent;

    /**
     * @var float
     */
    private $numcomvent;

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
     * Set fechacomvent
     *
     * @param \DateTime $fechacomvent
     * @return Comprobanteventa
     */
    public function setFechacomvent($fechacomvent)
    {
        $this->fechacomvent = $fechacomvent;
    
        return $this;
    }

    /**
     * Get fechacomvent
     *
     * @return \DateTime 
     */
    public function getFechacomvent()
    {
        return $this->fechacomvent;
    }

    /**
     * Set tipocomvent
     *
     * @param string $tipocomvent
     * @return Comprobanteventa
     */
    public function setTipocomvent($tipocomvent)
    {
        $this->tipocomvent = $tipocomvent;
    
        return $this;
    }

    /**
     * Get tipocomvent
     *
     * @return string 
     */
    public function getTipocomvent()
    {
        return $this->tipocomvent;
    }

    /**
     * Set totalcomvent
     *
     * @param integer $totalcomvent
     * @return Comprobanteventa
     */
    public function setTotalcomvent($totalcomvent)
    {
        $this->totalcomvent = $totalcomvent;
    
        return $this;
    }

    /**
     * Get totalcomvent
     *
     * @return integer 
     */
    public function getTotalcomvent()
    {
        return $this->totalcomvent;
    }

    /**
     * Set anularcomvent
     *
     * @param string $anularcomvent
     * @return Comprobanteventa
     */
    public function setAnularcomvent($anularcomvent)
    {
        $this->anularcomvent = $anularcomvent;
    
        return $this;
    }

    /**
     * Get anularcomvent
     *
     * @return string 
     */
    public function getAnularcomvent()
    {
        return $this->anularcomvent;
    }

    /**
     * Get numcomvent
     *
     * @return float 
     */
    public function getNumcomvent()
    {
        return $this->numcomvent;
    }

    /**
     * Set idcliente
     *
     * @param \Upao\GimnasioBundle\Entity\Cliente $idcliente
     * @return Comprobanteventa
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
     * @return Comprobanteventa
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