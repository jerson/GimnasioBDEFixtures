<?php

namespace Upao\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recibocurso
 */
class Recibocurso
{
    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var \DateTime
     */
    private $fechainicio;

    /**
     * @var \DateTime
     */
    private $fechavencimiento;

    /**
     * @var integer
     */
    private $descuento;

    /**
     * @var integer
     */
    private $totalrecibo;

    /**
     * @var boolean
     */
    private $anular;

    /**
     * @var string
     */
    private $tiporecibo;

    /**
     * @var float
     */
    private $idrecibocurso;

    /**
     * @var \Upao\GimnasioBundle\Entity\Cliente
     */
    private $idcliente;

    /**
     * @var \Upao\GimnasioBundle\Entity\Curso
     */
    private $idcurso;


    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Recibocurso
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return Recibocurso
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;
    
        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechavencimiento
     *
     * @param \DateTime $fechavencimiento
     * @return Recibocurso
     */
    public function setFechavencimiento($fechavencimiento)
    {
        $this->fechavencimiento = $fechavencimiento;
    
        return $this;
    }

    /**
     * Get fechavencimiento
     *
     * @return \DateTime 
     */
    public function getFechavencimiento()
    {
        return $this->fechavencimiento;
    }

    /**
     * Set descuento
     *
     * @param integer $descuento
     * @return Recibocurso
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;
    
        return $this;
    }

    /**
     * Get descuento
     *
     * @return integer 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set totalrecibo
     *
     * @param integer $totalrecibo
     * @return Recibocurso
     */
    public function setTotalrecibo($totalrecibo)
    {
        $this->totalrecibo = $totalrecibo;
    
        return $this;
    }

    /**
     * Get totalrecibo
     *
     * @return integer 
     */
    public function getTotalrecibo()
    {
        return $this->totalrecibo;
    }

    /**
     * Set anular
     *
     * @param boolean $anular
     * @return Recibocurso
     */
    public function setAnular($anular)
    {
        $this->anular = $anular;
    
        return $this;
    }

    /**
     * Get anular
     *
     * @return boolean 
     */
    public function getAnular()
    {
        return $this->anular;
    }

    /**
     * Set tiporecibo
     *
     * @param string $tiporecibo
     * @return Recibocurso
     */
    public function setTiporecibo($tiporecibo)
    {
        $this->tiporecibo = $tiporecibo;
    
        return $this;
    }

    /**
     * Get tiporecibo
     *
     * @return string 
     */
    public function getTiporecibo()
    {
        return $this->tiporecibo;
    }

    /**
     * Get idrecibocurso
     *
     * @return float 
     */
    public function getIdrecibocurso()
    {
        return $this->idrecibocurso;
    }

    /**
     * Set idcliente
     *
     * @param \Upao\GimnasioBundle\Entity\Cliente $idcliente
     * @return Recibocurso
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
     * Set idcurso
     *
     * @param \Upao\GimnasioBundle\Entity\Curso $idcurso
     * @return Recibocurso
     */
    public function setIdcurso(\Upao\GimnasioBundle\Entity\Curso $idcurso = null)
    {
        $this->idcurso = $idcurso;
    
        return $this;
    }

    /**
     * Get idcurso
     *
     * @return \Upao\GimnasioBundle\Entity\Curso 
     */
    public function getIdcurso()
    {
        return $this->idcurso;
    }
}