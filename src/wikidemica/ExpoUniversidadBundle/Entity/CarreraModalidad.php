<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarreraModalidad
 */
class CarreraModalidad
{
    /**
     * @var integer
     */
    private $idCarrera;

    /**
     * @var integer
     */
    private $idModalidad;


    /**
     * Set idCarrera
     *
     * @param integer $idCarrera
     * @return CarreraModalidad
     */
    public function setIdCarrera($idCarrera)
    {
        $this->idCarrera = $idCarrera;
    
        return $this;
    }

    /**
     * Get idCarrera
     *
     * @return integer 
     */
    public function getIdCarrera()
    {
        return $this->idCarrera;
    }

    /**
     * Set idModalidad
     *
     * @param integer $idModalidad
     * @return CarreraModalidad
     */
    public function setIdModalidad($idModalidad)
    {
        $this->idModalidad = $idModalidad;
    
        return $this;
    }

    /**
     * Get idModalidad
     *
     * @return integer 
     */
    public function getIdModalidad()
    {
        return $this->idModalidad;
    }
}
