<?php

namespace Upao\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 */
class Producto
{
    /**
     * @var string
     */
    private $nombrepro;

    /**
     * @var integer
     */
    private $preciopro;

    /**
     * @var integer
     */
    private $stockpro;

    /**
     * @var string
     */
    private $tipopro;

    /**
     * @var float
     */
    private $idproducto;

    /**
     * @var \Upao\GimnasioBundle\Entity\Categoria
     */
    private $idcategoria;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $numticket;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $numorcredito;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $numcomvent;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $numcomcomp;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->numticket = new \Doctrine\Common\Collections\ArrayCollection();
        $this->numorcredito = new \Doctrine\Common\Collections\ArrayCollection();
        $this->numcomvent = new \Doctrine\Common\Collections\ArrayCollection();
        $this->numcomcomp = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set nombrepro
     *
     * @param string $nombrepro
     * @return Producto
     */
    public function setNombrepro($nombrepro)
    {
        $this->nombrepro = $nombrepro;
    
        return $this;
    }

    /**
     * Get nombrepro
     *
     * @return string 
     */
    public function getNombrepro()
    {
        return $this->nombrepro;
    }

    /**
     * Set preciopro
     *
     * @param integer $preciopro
     * @return Producto
     */
    public function setPreciopro($preciopro)
    {
        $this->preciopro = $preciopro;
    
        return $this;
    }

    /**
     * Get preciopro
     *
     * @return integer 
     */
    public function getPreciopro()
    {
        return $this->preciopro;
    }

    /**
     * Set stockpro
     *
     * @param integer $stockpro
     * @return Producto
     */
    public function setStockpro($stockpro)
    {
        $this->stockpro = $stockpro;
    
        return $this;
    }

    /**
     * Get stockpro
     *
     * @return integer 
     */
    public function getStockpro()
    {
        return $this->stockpro;
    }

    /**
     * Set tipopro
     *
     * @param string $tipopro
     * @return Producto
     */
    public function setTipopro($tipopro)
    {
        $this->tipopro = $tipopro;
    
        return $this;
    }

    /**
     * Get tipopro
     *
     * @return string 
     */
    public function getTipopro()
    {
        return $this->tipopro;
    }

    /**
     * Get idproducto
     *
     * @return float 
     */
    public function getIdproducto()
    {
        return $this->idproducto;
    }

    /**
     * Set idcategoria
     *
     * @param \Upao\GimnasioBundle\Entity\Categoria $idcategoria
     * @return Producto
     */
    public function setIdcategoria(\Upao\GimnasioBundle\Entity\Categoria $idcategoria = null)
    {
        $this->idcategoria = $idcategoria;
    
        return $this;
    }

    /**
     * Get idcategoria
     *
     * @return \Upao\GimnasioBundle\Entity\Categoria 
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    /**
     * Add numticket
     *
     * @param \Upao\GimnasioBundle\Entity\Ticket $numticket
     * @return Producto
     */
    public function addNumticket(\Upao\GimnasioBundle\Entity\Ticket $numticket)
    {
        $this->numticket[] = $numticket;
    
        return $this;
    }

    /**
     * Remove numticket
     *
     * @param \Upao\GimnasioBundle\Entity\Ticket $numticket
     */
    public function removeNumticket(\Upao\GimnasioBundle\Entity\Ticket $numticket)
    {
        $this->numticket->removeElement($numticket);
    }

    /**
     * Get numticket
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNumticket()
    {
        return $this->numticket;
    }

    /**
     * Add numorcredito
     *
     * @param \Upao\GimnasioBundle\Entity\Ordencredito $numorcredito
     * @return Producto
     */
    public function addNumorcredito(\Upao\GimnasioBundle\Entity\Ordencredito $numorcredito)
    {
        $this->numorcredito[] = $numorcredito;
    
        return $this;
    }

    /**
     * Remove numorcredito
     *
     * @param \Upao\GimnasioBundle\Entity\Ordencredito $numorcredito
     */
    public function removeNumorcredito(\Upao\GimnasioBundle\Entity\Ordencredito $numorcredito)
    {
        $this->numorcredito->removeElement($numorcredito);
    }

    /**
     * Get numorcredito
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNumorcredito()
    {
        return $this->numorcredito;
    }

    /**
     * Add numcomvent
     *
     * @param \Upao\GimnasioBundle\Entity\Comprobanteventa $numcomvent
     * @return Producto
     */
    public function addNumcomvent(\Upao\GimnasioBundle\Entity\Comprobanteventa $numcomvent)
    {
        $this->numcomvent[] = $numcomvent;
    
        return $this;
    }

    /**
     * Remove numcomvent
     *
     * @param \Upao\GimnasioBundle\Entity\Comprobanteventa $numcomvent
     */
    public function removeNumcomvent(\Upao\GimnasioBundle\Entity\Comprobanteventa $numcomvent)
    {
        $this->numcomvent->removeElement($numcomvent);
    }

    /**
     * Get numcomvent
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNumcomvent()
    {
        return $this->numcomvent;
    }

    /**
     * Add numcomcomp
     *
     * @param \Upao\GimnasioBundle\Entity\Comprobantecompra $numcomcomp
     * @return Producto
     */
    public function addNumcomcomp(\Upao\GimnasioBundle\Entity\Comprobantecompra $numcomcomp)
    {
        $this->numcomcomp[] = $numcomcomp;
    
        return $this;
    }

    /**
     * Remove numcomcomp
     *
     * @param \Upao\GimnasioBundle\Entity\Comprobantecompra $numcomcomp
     */
    public function removeNumcomcomp(\Upao\GimnasioBundle\Entity\Comprobantecompra $numcomcomp)
    {
        $this->numcomcomp->removeElement($numcomcomp);
    }

    /**
     * Get numcomcomp
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNumcomcomp()
    {
        return $this->numcomcomp;
    }
}