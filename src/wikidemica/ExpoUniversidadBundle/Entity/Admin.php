<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 */
class Admin
{
    /**
     * @var integer
     */
    private $idUsuario;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var integer
     */
    private $celular;

    /**
     * @var integer
     */
    private $telefono;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Admin
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
     * Set apellido
     *
     * @param string $apellido
     * @return Admin
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    
        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set celular
     *
     * @param integer $celular
     * @return Admin
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    
        return $this;
    }

    /**
     * Get celular
     *
     * @return integer 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     * @return Admin
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
}
