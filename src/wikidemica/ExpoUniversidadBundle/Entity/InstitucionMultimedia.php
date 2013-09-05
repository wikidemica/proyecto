<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InstitucionMultimedia
 */
class InstitucionMultimedia
{
    /**
     * @var integer
     */
    private $idMultimedia;

    /**
     * @var integer
     */
    private $idInstitucion;


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
     * Set idInstitucion
     *
     * @param integer $idInstitucion
     * @return InstitucionMultimedia
     */
    public function setIdInstitucion($idInstitucion)
    {
        $this->idInstitucion = $idInstitucion;
    
        return $this;
    }

    /**
     * Get idInstitucion
     *
     * @return integer 
     */
    public function getIdInstitucion()
    {
        return $this->idInstitucion;
    }
}
