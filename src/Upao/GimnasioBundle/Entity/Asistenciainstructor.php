<?php

namespace Upao\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asistenciainstructor
 */
class Asistenciainstructor
{
    /**
     * @var \DateTime
     */
    private $fechaentrada;

    /**
     * @var \DateTime
     */
    private $fechasalida;

    /**
     * @var float
     */
    private $idasisinst;

    /**
     * @var \Upao\GimnasioBundle\Entity\Instructor
     */
    private $idinstructor;


    /**
     * Set fechaentrada
     *
     * @param \DateTime $fechaentrada
     * @return Asistenciainstructor
     */
    public function setFechaentrada($fechaentrada)
    {
        $this->fechaentrada = $fechaentrada;
    
        return $this;
    }

    /**
     * Get fechaentrada
     *
     * @return \DateTime 
     */
    public function getFechaentrada()
    {
        return $this->fechaentrada;
    }

    /**
     * Set fechasalida
     *
     * @param \DateTime $fechasalida
     * @return Asistenciainstructor
     */
    public function setFechasalida($fechasalida)
    {
        $this->fechasalida = $fechasalida;
    
        return $this;
    }

    /**
     * Get fechasalida
     *
     * @return \DateTime 
     */
    public function getFechasalida()
    {
        return $this->fechasalida;
    }

    /**
     * Get idasisinst
     *
     * @return float 
     */
    public function getIdasisinst()
    {
        return $this->idasisinst;
    }

    /**
     * Set idinstructor
     *
     * @param \Upao\GimnasioBundle\Entity\Instructor $idinstructor
     * @return Asistenciainstructor
     */
    public function setIdinstructor(\Upao\GimnasioBundle\Entity\Instructor $idinstructor = null)
    {
        $this->idinstructor = $idinstructor;
    
        return $this;
    }

    /**
     * Get idinstructor
     *
     * @return \Upao\GimnasioBundle\Entity\Instructor 
     */
    public function getIdinstructor()
    {
        return $this->idinstructor;
    }
}