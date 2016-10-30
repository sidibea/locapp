<?php

namespace Locapp\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LocappMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
