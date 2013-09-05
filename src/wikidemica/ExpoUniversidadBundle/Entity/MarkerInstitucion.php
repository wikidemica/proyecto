<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MarkerInstitucion
 */
class MarkerInstitucion
{
    /**
     * @var integer
     */
    private $idMarker;

    /**
     * @var integer
     */
    private $idInstitucion;


    /**
     * Set idMarker
     *
     * @param integer $idMarker
     * @return MarkerInstitucion
     */
    public function setIdMarker($idMarker)
    {
        $this->idMarker = $idMarker;
    
        return $this;
    }

    /**
     * Get idMarker
     *
     * @return integer 
     */
    public function getIdMarker()
    {
        return $this->idMarker;
    }

    /**
     * Set idInstitucion
     *
     * @param integer $idInstitucion
     * @return MarkerInstitucion
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
