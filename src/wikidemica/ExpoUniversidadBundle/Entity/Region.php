<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 */
class Region
{
    /**
     * @var integer
     */
    private $idRegion;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $idPais;


    /**
     * Get idRegion
     *
     * @return integer 
     */
    public function getIdRegion()
    {
        return $this->idRegion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Region
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
     * Set idPais
     *
     * @param integer $idPais
     * @return Region
     */
    public function setIdPais($idPais)
    {
        $this->idPais = $idPais;
    
        return $this;
    }

    /**
     * Get idPais
     *
     * @return integer 
     */
    public function getIdPais()
    {
        return $this->idPais;
    }
}
