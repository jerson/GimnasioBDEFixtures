<?php

namespace Upao\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asistenciaclientecurso
 */
class Asistenciaclientecurso
{
    /**
     * @var \DateTime
     */
    private $fechaasistencia;

    /**
     * @var string
     */
    private $idasistenciaclientecurso;

    /**
     * @var \Upao\GimnasioBundle\Entity\Detallehorario
     */
    private $iddetallehorario;

    /**
     * @var \Upao\GimnasioBundle\Entity\Cliente
     */
    private $idcliente;


    /**
     * Set fechaasistencia
     *
     * @param \DateTime $fechaasistencia
     * @return Asistenciaclientecurso
     */
    public function setFechaasistencia($fechaasistencia)
    {
        $this->fechaasistencia = $fechaasistencia;
    
        return $this;
    }

    /**
     * Get fechaasistencia
     *
     * @return \DateTime 
     */
    public function getFechaasistencia()
    {
        return $this->fechaasistencia;
    }

    /**
     * Get idasistenciaclientecurso
     *
     * @return string 
     */
    public function getIdasistenciaclientecurso()
    {
        return $this->idasistenciaclientecurso;
    }

    /**
     * Set iddetallehorario
     *
     * @param \Upao\GimnasioBundle\Entity\Detallehorario $iddetallehorario
     * @return Asistenciaclientecurso
     */
    public function setIddetallehorario(\Upao\GimnasioBundle\Entity\Detallehorario $iddetallehorario = null)
    {
        $this->iddetallehorario = $iddetallehorario;
    
        return $this;
    }

    /**
     * Get iddetallehorario
     *
     * @return \Upao\GimnasioBundle\Entity\Detallehorario 
     */
    public function getIddetallehorario()
    {
        return $this->iddetallehorario;
    }

    /**
     * Set idcliente
     *
     * @param \Upao\GimnasioBundle\Entity\Cliente $idcliente
     * @return Asistenciaclientecurso
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