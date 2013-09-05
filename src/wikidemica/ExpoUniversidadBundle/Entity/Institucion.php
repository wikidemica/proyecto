<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Institucion
 */
class Institucion
{
    /**
     * @var integer
     */
    private $idInstitucion;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $linkPaginaWeb;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idUniversidad;


    /**
     * Get idInstitucion
     *
     * @return integer 
     */
    public function getIdInstitucion()
    {
        return $this->idInstitucion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Institucion
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
     * Set linkPaginaWeb
     *
     * @param string $linkPaginaWeb
     * @return Institucion
     */
    public function setLinkPaginaWeb($linkPaginaWeb)
    {
        $this->linkPaginaWeb = $linkPaginaWeb;
    
        return $this;
    }

    /**
     * Get linkPaginaWeb
     *
     * @return string 
     */
    public function getLinkPaginaWeb()
    {
        return $this->linkPaginaWeb;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Institucion
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
     * Set idUniversidad
     *
     * @param integer $idUniversidad
     * @return Institucion
     */
    public function setIdUniversidad($idUniversidad)
    {
        $this->idUniversidad = $idUniversidad;
    
        return $this;
    }

    /**
     * Get idUniversidad
     *
     * @return integer 
     */
    public function getIdUniversidad()
    {
        return $this->idUniversidad;
    }
}
