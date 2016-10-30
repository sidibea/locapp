<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 30/10/16
 * Time: 19:32
 */

namespace Locapp\MainBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller {

    public function indexAction(){

        return $this->render('LocappMainBundle:Dashboard:index.html.twig');
    }

} 