<?php

namespace Upao\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 */
class Categoria
{
    /**
     * @var string
     */
    private $nombrecategoria;

    /**
     * @var float
     */
    private $idcategoria;


    /**
     * Set nombrecategoria
     *
     * @param string $nombrecategoria
     * @return Categoria
     */
    public function setNombrecategoria($nombrecategoria)
    {
        $this->nombrecategoria = $nombrecategoria;
    
        return $this;
    }

    /**
     * Get nombrecategoria
     *
     * @return string 
     */
    public function getNombrecategoria()
    {
        return $this->nombrecategoria;
    }

    /**
     * Get idcategoria
     *
     * @return float 
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }
}