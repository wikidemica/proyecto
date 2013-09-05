<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarreraMultimedia
 */
class CarreraMultimedia
{
    /**
     * @var integer
     */
    private $idMultimedia;

    /**
     * @var integer
     */
    private $idCarrera;


    /**
     * Get idMultimedia
     *
     * @return integer 
     */
    public function getIdMultimedia()
    {
        return $this->idMultimedia;
    }

    /**
     * Set idCarrera
     *
     * @param integer $idCarrera
     * @return CarreraMultimedia
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
}
