<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Multimedia
 */
class Multimedia
{
    /**
     * @var integer
     */
    private $idMultimedia;

    /**
     * @var \DateTime
     */
    private $duracion;

    /**
     * @var \DateTime
     */
    private $fechaPublicacion;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idUsuario;

    /**
     * @var string
     */
    private $nombreCarpeta;


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
     * Set duracion
     *
     * @param \DateTime $duracion
     * @return Multimedia
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    
        return $this;
    }

    /**
     * Get duracion
     *
     * @return \DateTime 
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set fechaPublicacion
     *
     * @param \DateTime $fechaPublicacion
     * @return Multimedia
     */
    public function setFechaPublicacion($fechaPublicacion)
    {
        $this->fechaPublicacion = $fechaPublicacion;
    
        return $this;
    }

    /**
     * Get fechaPublicacion
     *
     * @return \DateTime 
     */
    public function getFechaPublicacion()
    {
        return $this->fechaPublicacion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Multimedia
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set idUsuario
     *
     * @param integer $idUsuario
     * @return Multimedia
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    
        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return integer 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set nombreCarpeta
     *
     * @param string $nombreCarpeta
     * @return Multimedia
     */
    public function setNombreCarpeta($nombreCarpeta)
    {
        $this->nombreCarpeta = $nombreCarpeta;
    
        return $this;
    }

    /**
     * Get nombreCarpeta
     *
     * @return string 
     */
    public function getNombreCarpeta()
    {
        return $this->nombreCarpeta;
    }
}
