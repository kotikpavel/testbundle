<?php

namespace Kotik\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KotikTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
