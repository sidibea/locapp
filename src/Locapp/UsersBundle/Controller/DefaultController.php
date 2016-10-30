<?php

namespace Locapp\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LocappUsersBundle:Default:index.html.twig', array('name' => $name));
    }
}
