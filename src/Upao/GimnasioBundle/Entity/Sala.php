<?php

namespace Upao\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sala
 */
class Sala
{
    /**
     * @var string
     */
    private $nombresala;

    /**
     * @var float
     */
    private $idsala;


    /**
     * Set nombresala
     *
     * @param string $nombresala
     * @return Sala
     */
    public function setNombresala($nombresala)
    {
        $this->nombresala = $nombresala;
    
        return $this;
    }

    /**
     * Get nombresala
     *
     * @return string 
     */
    public function getNombresala()
    {
        return $this->nombresala;
    }

    /**
     * Get idsala
     *
     * @return float 
     */
    public function getIdsala()
    {
        return $this->idsala;
    }
}