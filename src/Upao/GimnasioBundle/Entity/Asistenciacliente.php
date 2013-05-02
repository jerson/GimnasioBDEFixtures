<?php

namespace Upao\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asistenciacliente
 */
class Asistenciacliente
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
    private $idasiscli;

    /**
     * @var \Upao\GimnasioBundle\Entity\Cliente
     */
    private $idcliente;


    /**
     * Set fechaentrada
     *
     * @param \DateTime $fechaentrada
     * @return Asistenciacliente
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
     * @return Asistenciacliente
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
     * Get idasiscli
     *
     * @return float 
     */
    public function getIdasiscli()
    {
        return $this->idasiscli;
    }

    /**
     * Set idcliente
     *
     * @param \Upao\GimnasioBundle\Entity\Cliente $idcliente
     * @return Asistenciacliente
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
}