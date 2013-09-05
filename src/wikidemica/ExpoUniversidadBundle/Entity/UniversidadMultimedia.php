<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UniversidadMultimedia
 */
class UniversidadMultimedia
{
    /**
     * @var integer
     */
    private $idUniversidad;

    /**
     * @var integer
     */
    private $idMultimedia;


    /**
     * Set idUniversidad
     *
     * @param integer $idUniversidad
     * @return UniversidadMultimedia
     */
    public function setIdUniversidad($idUniversidad)
    {
        $this->idUniversidad = $idUniversidad;
    
        return $this;
    }

    /**
     * Get idUniversidad
     *
     * @return integer 
     */
    public function getIdUniversidad()
    {
        return $this->idUniversidad;
    }

    /**
     * Set idMultimedia
     *
     * @param integer $idMultimedia
     * @return UniversidadMultimedia
     */
    public function setIdMultimedia($idMultimedia)
    {
        $this->idMultimedia = $idMultimedia;
    
        return $this;
    }

    /**
     * Get idMultimedia
     *
     * @return integer 
     */
    public function getIdMultimedia()
    {
        return $this->idMultimedia;
    }
}
