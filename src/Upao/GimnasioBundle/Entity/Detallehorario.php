<?php

namespace Upao\GimnasioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detallehorario
 */
class Detallehorario
{
    /**
     * @var float
     */
    private $iddetallehorario;

    /**
     * @var \Upao\GimnasioBundle\Entity\Sala
     */
    private $idsala;

    /**
     * @var \Upao\GimnasioBundle\Entity\Instructor
     */
    private $idinstructor;

    /**
     * @var \Upao\GimnasioBundle\Entity\Horario
     */
    private $idhorario;

    /**
     * @var \Upao\GimnasioBundle\Entity\Curso
     */
    private $idcurso;


    /**
     * Get iddetallehorario
     *
     * @return float 
     */
    public function getIddetallehorario()
    {
        return $this->iddetallehorario;
    }

    /**
     * Set idsala
     *
     * @param \Upao\GimnasioBundle\Entity\Sala $idsala
     * @return Detallehorario
     */
    public function setIdsala(\Upao\GimnasioBundle\Entity\Sala $idsala = null)
    {
        $this->idsala = $idsala;
    
        return $this;
    }

    /**
     * Get idsala
     *
     * @return \Upao\GimnasioBundle\Entity\Sala 
     */
    public function getIdsala()
    {
        return $this->idsala;
    }

    /**
     * Set idinstructor
     *
     * @param \Upao\GimnasioBundle\Entity\Instructor $idinstructor
     * @return Detallehorario
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

    /**
     * Set idhorario
     *
     * @param \Upao\GimnasioBundle\Entity\Horario $idhorario
     * @return Detallehorario
     */
    public function setIdhorario(\Upao\GimnasioBundle\Entity\Horario $idhorario = null)
    {
        $this->idhorario = $idhorario;
    
        return $this;
    }

    /**
     * Get idhorario
     *
     * @return \Upao\GimnasioBundle\Entity\Horario 
     */
    public function getIdhorario()
    {
        return $this->idhorario;
    }

    /**
     * Set idcurso
     *
     * @param \Upao\GimnasioBundle\Entity\Curso $idcurso
     * @return Detallehorario
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