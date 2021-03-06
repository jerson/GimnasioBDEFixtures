<?php

namespace Upao\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 */
class Cliente
{
    /**
     * @var string
     */
    private $nombrescli;

    /**
     * @var string
     */
    private $apellidoscli;

    /**
     * @var string
     */
    private $telefonocli;

    /**
     * @var string
     */
    private $dnicli;

    /**
     * @var string
     */
    private $ruccli;

    /**
     * @var string
     */
    private $emailcli;

    /**
     * @var string
     */
    private $usuariocli;

    /**
     * @var string
     */
    private $clavecli;

    /**
     * @var boolean
     */
    private $esestudiante;

    /**
     * @var string
     */
    private $celularcli;

    /**
     * @var float
     */
    private $idcliente;

    /**
     * @var \Upao\GimnasioBundle\Entity\Direccion
     */
    private $iddireccion;


    /**
     * Set nombrescli
     *
     * @param string $nombrescli
     * @return Cliente
     */
    public function setNombrescli($nombrescli)
    {
        $this->nombrescli = $nombrescli;
    
        return $this;
    }

    /**
     * Get nombrescli
     *
     * @return string 
     */
    public function getNombrescli()
    {
        return $this->nombrescli;
    }

    /**
     * Set apellidoscli
     *
     * @param string $apellidoscli
     * @return Cliente
     */
    public function setApellidoscli($apellidoscli)
    {
        $this->apellidoscli = $apellidoscli;
    
        return $this;
    }

    /**
     * Get apellidoscli
     *
     * @return string 
     */
    public function getApellidoscli()
    {
        return $this->apellidoscli;
    }

    /**
     * Set telefonocli
     *
     * @param string $telefonocli
     * @return Cliente
     */
    public function setTelefonocli($telefonocli)
    {
        $this->telefonocli = $telefonocli;
    
        return $this;
    }

    /**
     * Get telefonocli
     *
     * @return string 
     */
    public function getTelefonocli()
    {
        return $this->telefonocli;
    }

    /**
     * Set dnicli
     *
     * @param string $dnicli
     * @return Cliente
     */
    public function setDnicli($dnicli)
    {
        $this->dnicli = $dnicli;
    
        return $this;
    }

    /**
     * Get dnicli
     *
     * @return string 
     */
    public function getDnicli()
    {
        return $this->dnicli;
    }

    /**
     * Set ruccli
     *
     * @param string $ruccli
     * @return Cliente
     */
    public function setRuccli($ruccli)
    {
        $this->ruccli = $ruccli;
    
        return $this;
    }

    /**
     * Get ruccli
     *
     * @return string 
     */
    public function getRuccli()
    {
        return $this->ruccli;
    }

    /**
     * Set emailcli
     *
     * @param string $emailcli
     * @return Cliente
     */
    public function setEmailcli($emailcli)
    {
        $this->emailcli = $emailcli;
    
        return $this;
    }

    /**
     * Get emailcli
     *
     * @return string 
     */
    public function getEmailcli()
    {
        return $this->emailcli;
    }

    /**
     * Set usuariocli
     *
     * @param string $usuariocli
     * @return Cliente
     */
    public function setUsuariocli($usuariocli)
    {
        $this->usuariocli = $usuariocli;
    
        return $this;
    }

    /**
     * Get usuariocli
     *
     * @return string 
     */
    public function getUsuariocli()
    {
        return $this->usuariocli;
    }

    /**
     * Set clavecli
     *
     * @param string $clavecli
     * @return Cliente
     */
    public function setClavecli($clavecli)
    {
        $this->clavecli = $clavecli;
    
        return $this;
    }

    /**
     * Get clavecli
     *
     * @return string 
     */
    public function getClavecli()
    {
        return $this->clavecli;
    }

    /**
     * Set esestudiante
     *
     * @param boolean $esestudiante
     * @return Cliente
     */
    public function setEsestudiante($esestudiante)
    {
        $this->esestudiante = $esestudiante;
    
        return $this;
    }

    /**
     * Get esestudiante
     *
     * @return boolean 
     */
    public function getEsestudiante()
    {
        return $this->esestudiante;
    }

    /**
     * Set celularcli
     *
     * @param string $celularcli
     * @return Cliente
     */
    public function setCelularcli($celularcli)
    {
        $this->celularcli = $celularcli;
    
        return $this;
    }

    /**
     * Get celularcli
     *
     * @return string 
     */
    public function getCelularcli()
    {
        return $this->celularcli;
    }

    /**
     * Get idcliente
     *
     * @return float 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set iddireccion
     *
     * @param \Upao\GimnasioBundle\Entity\Direccion $iddireccion
     * @return Cliente
     */
    public function setIddireccion(\Upao\GimnasioBundle\Entity\Direccion $iddireccion = null)
    {
        $this->iddireccion = $iddireccion;
    
        return $this;
    }

    /**
     * Get iddireccion
     *
     * @return \Upao\GimnasioBundle\Entity\Direccion 
     */
    public function getIddireccion()
    {
        return $this->iddireccion;
    }
}