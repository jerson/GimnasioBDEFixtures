<?php

namespace Upao\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Instructor
 */
class Instructor
{
    /**
     * @var string
     */
    private $nombresinst;

    /**
     * @var string
     */
    private $apellidosinst;

    /**
     * @var string
     */
    private $dniinst;

    /**
     * @var string
     */
    private $direccioninst;

    /**
     * @var string
     */
    private $telefonoinst;

    /**
     * @var string
     */
    private $emailinst;

    /**
     * @var string
     */
    private $celularinst;

    /**
     * @var float
     */
    private $idinstructor;


    public function  __construct($id=''){
        if(!empty($id)){
            $this->idinstructor=$id;
        }
    }
    /**
     * Set nombresinst
     *
     * @param string $nombresinst
     * @return Instructor
     */
    public function setNombresinst($nombresinst)
    {
        $this->nombresinst = $nombresinst;
    
        return $this;
    }

    /**
     * Get nombresinst
     *
     * @return string 
     */
    public function getNombresinst()
    {
        return $this->nombresinst;
    }

    /**
     * Set apellidosinst
     *
     * @param string $apellidosinst
     * @return Instructor
     */
    public function setApellidosinst($apellidosinst)
    {
        $this->apellidosinst = $apellidosinst;
    
        return $this;
    }

    /**
     * Get apellidosinst
     *
     * @return string 
     */
    public function getApellidosinst()
    {
        return $this->apellidosinst;
    }

    /**
     * Set dniinst
     *
     * @param string $dniinst
     * @return Instructor
     */
    public function setDniinst($dniinst)
    {
        $this->dniinst = $dniinst;
    
        return $this;
    }

    /**
     * Get dniinst
     *
     * @return string 
     */
    public function getDniinst()
    {
        return $this->dniinst;
    }

    /**
     * Set direccioninst
     *
     * @param string $direccioninst
     * @return Instructor
     */
    public function setDireccioninst($direccioninst)
    {
        $this->direccioninst = $direccioninst;
    
        return $this;
    }

    /**
     * Get direccioninst
     *
     * @return string 
     */
    public function getDireccioninst()
    {
        return $this->direccioninst;
    }

    /**
     * Set telefonoinst
     *
     * @param string $telefonoinst
     * @return Instructor
     */
    public function setTelefonoinst($telefonoinst)
    {
        $this->telefonoinst = $telefonoinst;
    
        return $this;
    }

    /**
     * Get telefonoinst
     *
     * @return string 
     */
    public function getTelefonoinst()
    {
        return $this->telefonoinst;
    }

    /**
     * Set emailinst
     *
     * @param string $emailinst
     * @return Instructor
     */
    public function setEmailinst($emailinst)
    {
        $this->emailinst = $emailinst;
    
        return $this;
    }

    /**
     * Get emailinst
     *
     * @return string 
     */
    public function getEmailinst()
    {
        return $this->emailinst;
    }

    /**
     * Set celularinst
     *
     * @param string $celularinst
     * @return Instructor
     */
    public function setCelularinst($celularinst)
    {
        $this->celularinst = $celularinst;
    
        return $this;
    }

    /**
     * Get celularinst
     *
     * @return string 
     */
    public function getCelularinst()
    {
        return $this->celularinst;
    }

    /**
     * Get idinstructor
     *
     * @return float 
     */
    public function getIdinstructor()
    {
        return $this->idinstructor;
    }
}