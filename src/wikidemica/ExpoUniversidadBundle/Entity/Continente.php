<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Continente
 */
class Continente
{
    /**
     * @var integer
     */
    private $idContinente;

    /**
     * @var string
     */
    private $nombre;


    /**
     * Get idContinente
     *
     * @return integer 
     */
    public function getIdContinente()
    {
        return $this->idContinente;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Continente
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
}
