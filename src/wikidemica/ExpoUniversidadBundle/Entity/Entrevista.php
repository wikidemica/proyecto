<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entrevista
 */
class Entrevista
{
    /**
     * @var integer
     */
    private $idMultimedia;

    /**
     * @var integer
     */
    private $linkYoutube;


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
     * Set linkYoutube
     *
     * @param integer $linkYoutube
     * @return Entrevista
     */
    public function setLinkYoutube($linkYoutube)
    {
        $this->linkYoutube = $linkYoutube;
    
        return $this;
    }

    /**
     * Get linkYoutube
     *
     * @return integer 
     */
    public function getLinkYoutube()
    {
        return $this->linkYoutube;
    }
}
