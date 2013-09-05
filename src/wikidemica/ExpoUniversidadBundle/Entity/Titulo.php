<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Titulo
 */
class Titulo
{
    /**
     * @var integer
     */
    private $idTitulo;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $descripcion;


    /**
     * Get idTitulo
     *
     * @return integer 
     */
    public function getIdTitulo()
    {
        return $this->idTitulo;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    
        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Titulo
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
}
