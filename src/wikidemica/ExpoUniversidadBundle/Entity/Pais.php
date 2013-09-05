<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pais
 */
class Pais
{
    /**
     * @var integer
     */
    private $idPais;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $idContinente;


    /**
     * Get idPais
     *
     * @return integer 
     */
    public function getIdPais()
    {
        return $this->idPais;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Pais
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
     * Set idContinente
     *
     * @param integer $idContinente
     * @return Pais
     */
    public function setIdContinente($idContinente)
    {
        $this->idContinente = $idContinente;
    
        return $this;
    }

    /**
     * Get idContinente
     *
     * @return integer 
     */
    public function getIdContinente()
    {
        return $this->idContinente;
    }
}
