<?php

namespace Upao\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medida
 */
class Medida
{
    /**
     * @var \DateTime
     */
    private $fechamed;

    /**
     * @var float
     */
    private $estaturamed;

    /**
     * @var float
     */
    private $pesomed;

    /**
     * @var float
     */
    private $brazomed;

    /**
     * @var float
     */
    private $bustTormed;

    /**
     * @var float
     */
    private $cinturamed;

    /**
     * @var float
     */
    private $piernamed;

    /**
     * @var float
     */
    private $caderamed;

    /**
     * @var float
     */
    private $pantorrillasmed;

    /**
     * @var float
     */
    private $porgrasamed;

    /**
     * @var float
     */
    private $idmed;

    /**
     * @var \Upao\GimnasioBundle\Entity\Cliente
     */
    private $idcliente;


    /**
     * Set fechamed
     *
     * @param \DateTime $fechamed
     * @return Medida
     */
    public function setFechamed($fechamed)
    {
        $this->fechamed = $fechamed;
    
        return $this;
    }

    /**
     * Get fechamed
     *
     * @return \DateTime 
     */
    public function getFechamed()
    {
        return $this->fechamed;
    }

    /**
     * Set estaturamed
     *
     * @param float $estaturamed
     * @return Medida
     */
    public function setEstaturamed($estaturamed)
    {
        $this->estaturamed = $estaturamed;
    
        return $this;
    }

    /**
     * Get estaturamed
     *
     * @return float 
     */
    public function getEstaturamed()
    {
        return $this->estaturamed;
    }

    /**
     * Set pesomed
     *
     * @param float $pesomed
     * @return Medida
     */
    public function setPesomed($pesomed)
    {
        $this->pesomed = $pesomed;
    
        return $this;
    }

    /**
     * Get pesomed
     *
     * @return float 
     */
    public function getPesomed()
    {
        return $this->pesomed;
    }

    /**
     * Set brazomed
     *
     * @param float $brazomed
     * @return Medida
     */
    public function setBrazomed($brazomed)
    {
        $this->brazomed = $brazomed;
    
        return $this;
    }

    /**
     * Get brazomed
     *
     * @return float 
     */
    public function getBrazomed()
    {
        return $this->brazomed;
    }

    /**
     * Set bustTormed
     *
     * @param float $bustTormed
     * @return Medida
     */
    public function setBustTormed($bustTormed)
    {
        $this->bustTormed = $bustTormed;
    
        return $this;
    }

    /**
     * Get bustTormed
     *
     * @return float 
     */
    public function getBustTormed()
    {
        return $this->bustTormed;
    }

    /**
     * Set cinturamed
     *
     * @param float $cinturamed
     * @return Medida
     */
    public function setCinturamed($cinturamed)
    {
        $this->cinturamed = $cinturamed;
    
        return $this;
    }

    /**
     * Get cinturamed
     *
     * @return float 
     */
    public function getCinturamed()
    {
        return $this->cinturamed;
    }

    /**
     * Set piernamed
     *
     * @param float $piernamed
     * @return Medida
     */
    public function setPiernamed($piernamed)
    {
        $this->piernamed = $piernamed;
    
        return $this;
    }

    /**
     * Get piernamed
     *
     * @return float 
     */
    public function getPiernamed()
    {
        return $this->piernamed;
    }

    /**
     * Set caderamed
     *
     * @param float $caderamed
     * @return Medida
     */
    public function setCaderamed($caderamed)
    {
        $this->caderamed = $caderamed;
    
        return $this;
    }

    /**
     * Get caderamed
     *
     * @return float 
     */
    public function getCaderamed()
    {
        return $this->caderamed;
    }

    /**
     * Set pantorrillasmed
     *
     * @param float $pantorrillasmed
     * @return Medida
     */
    public function setPantorrillasmed($pantorrillasmed)
    {
        $this->pantorrillasmed = $pantorrillasmed;
    
        return $this;
    }

    /**
     * Get pantorrillasmed
     *
     * @return float 
     */
    public function getPantorrillasmed()
    {
        return $this->pantorrillasmed;
    }

    /**
     * Set porgrasamed
     *
     * @param float $porgrasamed
     * @return Medida
     */
    public function setPorgrasamed($porgrasamed)
    {
        $this->porgrasamed = $porgrasamed;
    
        return $this;
    }

    /**
     * Get porgrasamed
     *
     * @return float 
     */
    public function getPorgrasamed()
    {
        return $this->porgrasamed;
    }

    /**
     * Get idmed
     *
     * @return float 
     */
    public function getIdmed()
    {
        return $this->idmed;
    }

    /**
     * Set idcliente
     *
     * @param \Upao\GimnasioBundle\Entity\Cliente $idcliente
     * @return Medida
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