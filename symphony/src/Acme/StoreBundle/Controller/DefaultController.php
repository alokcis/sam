<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeStoreBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function createAction() {
        $user = new User();
        $user->setBillingKey('A Foo Bar12322');
       // $user->setPrice('19.99');    
    
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
    
        return new Response('Created product id '.$user->getUserId());
    }
}
