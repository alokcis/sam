<?php

namespace Acme\RestaurantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    { 
        //return $this->render('AcmeRestaurantBundle:Default:index.html.twig', array('name' => $name));
    }
}
