<?php

namespace Upao\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Amortizacion
 */
class Amortizacion
{
    /**
     * @var \DateTime
     */
    private $fechaamort;

    /**
     * @var float
     */
    private $montotalamort;

    /**
     * @var float
     */
    private $saldoanterioramort;

    /**
     * @var float
     */
    private $netopagaramort;

    /**
     * @var float
     */
    private $saldopagaramort;

    /**
     * @var float
     */
    private $idamort;

    /**
     * @var \Upao\GimnasioBundle\Entity\Ordencredito
     */
    private $numorcredito;


    /**
     * Set fechaamort
     *
     * @param \DateTime $fechaamort
     * @return Amortizacion
     */
    public function setFechaamort($fechaamort)
    {
        $this->fechaamort = $fechaamort;
    
        return $this;
    }

    /**
     * Get fechaamort
     *
     * @return \DateTime 
     */
    public function getFechaamort()
    {
        return $this->fechaamort;
    }

    /**
     * Set montotalamort
     *
     * @param float $montotalamort
     * @return Amortizacion
     */
    public function setMontotalamort($montotalamort)
    {
        $this->montotalamort = $montotalamort;
    
        return $this;
    }

    /**
     * Get montotalamort
     *
     * @return float 
     */
    public function getMontotalamort()
    {
        return $this->montotalamort;
    }

    /**
     * Set saldoanterioramort
     *
     * @param float $saldoanterioramort
     * @return Amortizacion
     */
    public function setSaldoanterioramort($saldoanterioramort)
    {
        $this->saldoanterioramort = $saldoanterioramort;
    
        return $this;
    }

    /**
     * Get saldoanterioramort
     *
     * @return float 
     */
    public function getSaldoanterioramort()
    {
        return $this->saldoanterioramort;
    }

    /**
     * Set netopagaramort
     *
     * @param float $netopagaramort
     * @return Amortizacion
     */
    public function setNetopagaramort($netopagaramort)
    {
        $this->netopagaramort = $netopagaramort;
    
        return $this;
    }

    /**
     * Get netopagaramort
     *
     * @return float 
     */
    public function getNetopagaramort()
    {
        return $this->netopagaramort;
    }

    /**
     * Set saldopagaramort
     *
     * @param float $saldopagaramort
     * @return Amortizacion
     */
    public function setSaldopagaramort($saldopagaramort)
    {
        $this->saldopagaramort = $saldopagaramort;
    
        return $this;
    }

    /**
     * Get saldopagaramort
     *
     * @return float 
     */
    public function getSaldopagaramort()
    {
        return $this->saldopagaramort;
    }

    /**
     * Get idamort
     *
     * @return float 
     */
    public function getIdamort()
    {
        return $this->idamort;
    }

    /**
     * Set numorcredito
     *
     * @param \Upao\GimnasioBundle\Entity\Ordencredito $numorcredito
     * @return Amortizacion
     */
    public function setNumorcredito(\Upao\GimnasioBundle\Entity\Ordencredito $numorcredito = null)
    {
        $this->numorcredito = $numorcredito;
    
        return $this;
    }

    /**
     * Get numorcredito
     *
     * @return \Upao\GimnasioBundle\Entity\Ordencredito 
     */
    public function getNumorcredito()
    {
        return $this->numorcredito;
    }
}