<?php

namespace Upao\GimnasioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UpaoGimnasioBundle:Default:index.html.twig', array('name' => $name));
    }
}
