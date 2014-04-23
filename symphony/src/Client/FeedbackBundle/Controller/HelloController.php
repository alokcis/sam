<?php

namespace Client\FeedbackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function indexAction($name)
    {
        
        //return $this->render('ClientFeedbackBundle:Hello:index.html.twig', array('name' => $name));
        return $this->render('ClientFeedbackBundle:Hello:index.html.twig', array('name' => $name));

    }
    
    
}
