<?php

namespace Upao\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horario
 */
class Horario
{
    /**
     * @var string
     */
    private $diadethorario;

    /**
     * @var \DateTime
     */
    private $horainidethorario;

    /**
     * @var \DateTime
     */
    private $horafindethorario;

    /**
     * @var float
     */
    private $idhorario;


    /**
     * Set diadethorario
     *
     * @param string $diadethorario
     * @return Horario
     */
    public function setDiadethorario($diadethorario)
    {
        $this->diadethorario = $diadethorario;
    
        return $this;
    }

    /**
     * Get diadethorario
     *
     * @return string
     */
    public function getDiadethorario()
    {
        return $this->diadethorario;
    }

    /**
     * Set horainidethorario
     *
     * @param \DateTime $horainidethorario
     * @return Horario
     */
    public function setHorainidethorario($horainidethorario)
    {
        $this->horainidethorario = $horainidethorario;
    
        return $this;
    }

    /**
     * Get horainidethorario
     *
     * @return \DateTime 
     */
    public function getHorainidethorario()
    {
        return $this->horainidethorario;
    }

    /**
     * Set horafindethorario
     *
     * @param \DateTime $horafindethorario
     * @return Horario
     */
    public function setHorafindethorario($horafindethorario)
    {
        $this->horafindethorario = $horafindethorario;
    
        return $this;
    }

    /**
     * Get horafindethorario
     *
     * @return \DateTime 
     */
    public function getHorafindethorario()
    {
        return $this->horafindethorario;
    }

    /**
     * Get idhorario
     *
     * @return float 
     */
    public function getIdhorario()
    {
        return $this->idhorario;
    }
}