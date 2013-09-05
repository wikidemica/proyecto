<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disciplina
 */
class Disciplina
{
    /**
     * @var integer
     */
    private $idDisciplina;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;


    /**
     * Get idDisciplina
     *
     * @return integer 
     */
    public function getIdDisciplina()
    {
        return $this->idDisciplina;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Disciplina
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Disciplina
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
