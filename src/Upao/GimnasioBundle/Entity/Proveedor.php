<?php

namespace Upao\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proveedor
 */
class Proveedor
{
    /**
     * @var string
     */
    private $nombreproveedor;

    /**
     * @var string
     */
    private $direccionproveedor;

    /**
     * @var string
     */
    private $telefonoproveedor;

    /**
     * @var string
     */
    private $rucproveedor;

    /**
     * @var string
     */
    private $emailproveedor;

    /**
     * @var float
     */
    private $idproveedor;


    /**
     * Set nombreproveedor
     *
     * @param string $nombreproveedor
     * @return Proveedor
     */
    public function setNombreproveedor($nombreproveedor)
    {
        $this->nombreproveedor = $nombreproveedor;
    
        return $this;
    }

    /**
     * Get nombreproveedor
     *
     * @return string 
     */
    public function getNombreproveedor()
    {
        return $this->nombreproveedor;
    }

    /**
     * Set direccionproveedor
     *
     * @param string $direccionproveedor
     * @return Proveedor
     */
    public function setDireccionproveedor($direccionproveedor)
    {
        $this->direccionproveedor = $direccionproveedor;
    
        return $this;
    }

    /**
     * Get direccionproveedor
     *
     * @return string 
     */
    public function getDireccionproveedor()
    {
        return $this->direccionproveedor;
    }

    /**
     * Set telefonoproveedor
     *
     * @param string $telefonoproveedor
     * @return Proveedor
     */
    public function setTelefonoproveedor($telefonoproveedor)
    {
        $this->telefonoproveedor = $telefonoproveedor;
    
        return $this;
    }

    /**
     * Get telefonoproveedor
     *
     * @return string 
     */
    public function getTelefonoproveedor()
    {
        return $this->telefonoproveedor;
    }

    /**
     * Set rucproveedor
     *
     * @param string $rucproveedor
     * @return Proveedor
     */
    public function setRucproveedor($rucproveedor)
    {
        $this->rucproveedor = $rucproveedor;
    
        return $this;
    }

    /**
     * Get rucproveedor
     *
     * @return string 
     */
    public function getRucproveedor()
    {
        return $this->rucproveedor;
    }

    /**
     * Set emailproveedor
     *
     * @param string $emailproveedor
     * @return Proveedor
     */
    public function setEmailproveedor($emailproveedor)
    {
        $this->emailproveedor = $emailproveedor;
    
        return $this;
    }

    /**
     * Get emailproveedor
     *
     * @return string 
     */
    public function getEmailproveedor()
    {
        return $this->emailproveedor;
    }

    /**
     * Get idproveedor
     *
     * @return float 
     */
    public function getIdproveedor()
    {
        return $this->idproveedor;
    }
}