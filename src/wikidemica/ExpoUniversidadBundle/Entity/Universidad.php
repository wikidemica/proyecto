<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Universidad
 */
class Universidad
{
    /**
     * @var integer
     */
    private $idUniversidad;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $linkPaginaWeb;

    /**
     * @var boolean
     */
    private $publicaPrivada;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idMarkerGoogleMap;

    /**
     * @var integer
     */
    private $idCiudad;


    /**
     * Get idUniversidad
     *
     * @return integer 
     */
    public function getIdUniversidad()
    {
        return $this->idUniversidad;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Universidad
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
     * @return Universidad
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
     * Set publicaPrivada
     *
     * @param boolean $publicaPrivada
     * @return Universidad
     */
    public function setPublicaPrivada($publicaPrivada)
    {
        $this->publicaPrivada = $publicaPrivada;
    
        return $this;
    }

    /**
     * Get publicaPrivada
     *
     * @return boolean 
     */
    public function getPublicaPrivada()
    {
        return $this->publicaPrivada;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Universidad
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
     * Set idMarkerGoogleMap
     *
     * @param integer $idMarkerGoogleMap
     * @return Universidad
     */
    public function setIdMarkerGoogleMap($idMarkerGoogleMap)
    {
        $this->idMarkerGoogleMap = $idMarkerGoogleMap;
    
        return $this;
    }

    /**
     * Get idMarkerGoogleMap
     *
     * @return integer 
     */
    public function getIdMarkerGoogleMap()
    {
        return $this->idMarkerGoogleMap;
    }

    /**
     * Set idCiudad
     *
     * @param integer $idCiudad
     * @return Universidad
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
