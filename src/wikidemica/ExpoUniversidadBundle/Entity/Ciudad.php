<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudad
 */
class Ciudad
{
    /**
     * @var integer
     */
    private $idCiudad;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $idRegion;


    /**
     * Get idCiudad
     *
     * @return integer 
     */
    public function getIdCiudad()
    {
        return $this->idCiudad;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Ciudad
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set idRegion
     *
     * @param integer $idRegion
     * @return Ciudad
     */
    public function setIdRegion($idRegion)
    {
        $this->idRegion = $idRegion;
    
        return $this;
    }

    /**
     * Get idRegion
     *
     * @return integer 
     */
    public function getIdRegion()
    {
        return $this->idRegion;
    }
}
