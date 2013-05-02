<?php

namespace Upao\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comprobantecompra
 */
class Comprobantecompra
{
    /**
     * @var \DateTime
     */
    private $fechacomcomp;

    /**
     * @var integer
     */
    private $totalcomcomp;

    /**
     * @var float
     */
    private $numcomcomp;

    /**
     * @var \Upao\GimnasioBundle\Entity\Proveedor
     */
    private $idproveedor;

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
     * Set fechacomcomp
     *
     * @param \DateTime $fechacomcomp
     * @return Comprobantecompra
     */
    public function setFechacomcomp($fechacomcomp)
    {
        $this->fechacomcomp = $fechacomcomp;
    
        return $this;
    }

    /**
     * Get fechacomcomp
     *
     * @return \DateTime 
     */
    public function getFechacomcomp()
    {
        return $this->fechacomcomp;
    }

    /**
     * Set totalcomcomp
     *
     * @param integer $totalcomcomp
     * @return Comprobantecompra
     */
    public function setTotalcomcomp($totalcomcomp)
    {
        $this->totalcomcomp = $totalcomcomp;
    
        return $this;
    }

    /**
     * Get totalcomcomp
     *
     * @return integer 
     */
    public function getTotalcomcomp()
    {
        return $this->totalcomcomp;
    }

    /**
     * Get numcomcomp
     *
     * @return float 
     */
    public function getNumcomcomp()
    {
        return $this->numcomcomp;
    }

    /**
     * Set idproveedor
     *
     * @param \Upao\GimnasioBundle\Entity\Proveedor $idproveedor
     * @return Comprobantecompra
     */
    public function setIdproveedor(\Upao\GimnasioBundle\Entity\Proveedor $idproveedor = null)
    {
        $this->idproveedor = $idproveedor;
    
        return $this;
    }

    /**
     * Get idproveedor
     *
     * @return \Upao\GimnasioBundle\Entity\Proveedor 
     */
    public function getIdproveedor()
    {
        return $this->idproveedor;
    }

    /**
     * Add idproducto
     *
     * @param \Upao\GimnasioBundle\Entity\Producto $idproducto
     * @return Comprobantecompra
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