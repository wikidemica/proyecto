<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carrera
 */
class Carrera
{
    /**
     * @var integer
     */
    private $idCarrera;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idDisciplina;

    /**
     * @var integer
     */
    private $idTitulo;

    /**
     * @var integer
     */
    private $idInstitucion;


    /**
     * Get idCarrera
     *
     * @return integer 
     */
    public function getIdCarrera()
    {
        return $this->idCarrera;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Carrera
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
     * @return Carrera
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
     * Set idDisciplina
     *
     * @param integer $idDisciplina
     * @return Carrera
     */
    public function setIdDisciplina($idDisciplina)
    {
        $this->idDisciplina = $idDisciplina;
    
        return $this;
    }

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
     * Set idTitulo
     *
     * @param integer $idTitulo
     * @return Carrera
     */
    public function setIdTitulo($idTitulo)
    {
        $this->idTitulo = $idTitulo;
    
        return $this;
    }

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
     * Set idInstitucion
     *
     * @param integer $idInstitucion
     * @return Carrera
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
