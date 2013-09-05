<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modalidad
 */
class Modalidad
{
    /**
     * @var integer
     */
    private $idModalidad;

    /**
     * @var string
     */
    private $modalidad;


    /**
     * Get idModalidad
     *
     * @return integer 
     */
    public function getIdModalidad()
    {
        return $this->idModalidad;
    }

    /**
     * Set modalidad
     *
     * @param string $modalidad
     * @return Modalidad
     */
    public function setModalidad($modalidad)
    {
        $this->modalidad = $modalidad;
    
        return $this;
    }

    /**
     * Get modalidad
     *
     * @return string 
     */
    public function getModalidad()
    {
        return $this->modalidad;
    }
}
