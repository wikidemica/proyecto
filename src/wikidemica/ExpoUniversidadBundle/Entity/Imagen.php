<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imagen
 */
class Imagen
{
    /**
     * @var integer
     */
    private $idMultimedia;

    /**
     * @var string
     */
    private $contenido;

    /**
     * @var string
     */
    private $thumb;


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
     * Set contenido
     *
     * @param string $contenido
     * @return Imagen
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    
        return $this;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set thumb
     *
     * @param string $thumb
     * @return Imagen
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
    
        return $this;
    }

    /**
     * Get thumb
     *
     * @return string 
     */
    public function getThumb()
    {
        return $this->thumb;
    }
}
