<?php

namespace Kotik\TestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
  public function indexAction($name)
  {
    return $this->render('KotikTestBundle:Default:index.html.twig', array('name' => $name));
  }

  /**
   * @Template()
   */
  public function itemsAction()
  {
    return ['items' => ['one', 'two', 'three']];
  }
}
