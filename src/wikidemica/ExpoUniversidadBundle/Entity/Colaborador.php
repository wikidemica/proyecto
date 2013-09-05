<?php

namespace wikidemica\ExpoUniversidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colaborador
 */
class Colaborador
{
    /**
     * @var integer
     */
    private $idUsuario;


    /**
     * Get idUsuario
     *
     * @return integer 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}
