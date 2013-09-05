<?php

namespace wikidemica\ExpoUniversidadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ExpoUniversidadBundle:Default:index.html.twig', array('name' => $name));
    }
}
