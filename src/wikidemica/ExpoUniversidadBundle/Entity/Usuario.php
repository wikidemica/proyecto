<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 */
class Usuario
{
    /**
     * @var integer
     */
    private $idUsuario;

    /**
     * @var string
     */
    private $nombreUsuario;

    /**
     * @var string
     */
    private $passwordUsuario;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $idCiudad;


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
     * Set nombreUsuario
     *
     * @param string $nombreUsuario
     * @return Usuario
     */
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;
    
        return $this;
    }

    /**
     * Get nombreUsuario
     *
     * @return string 
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set passwordUsuario
     *
     * @param string $passwordUsuario
     * @return Usuario
     */
    public function setPasswordUsuario($passwordUsuario)
    {
        $this->passwordUsuario = $passwordUsuario;
    
        return $this;
    }

    /**
     * Get passwordUsuario
     *
     * @return string 
     */
    public function getPasswordUsuario()
    {
        return $this->passwordUsuario;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set idCiudad
     *
     * @param integer $idCiudad
     * @return Usuario
     */
    public function setIdCiudad($idCiudad)
    {
        $this->idCiudad = $idCiudad;
    
        return $this;
    }

    /**
     * Get idCiudad
     *
     * @return integer 
     */
    public function getIdCiudad()
    {
        return $this->idCiudad;
    }
}
