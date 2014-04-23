<?php

namespace Acme\RestaurantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\RestaurantBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;

class FeedbackController extends Controller
{
    public function indexAction(Request $request)
    {
        //return $this->render('AcmeRestaurantBundle:Feedback:index.html.twig', array('name' => $name));
        // just setup a fresh $task object (remove the dummy data)
        $user = new User();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createFormBuilder($user)
        ->add('billing_key', 'text')       
        ->add('save', 'submit')
        ->getForm();
        // ... do something to the $author object

        $validator = $this->get('validator');
        $errors = $validator->validate($user);
        if (count($errors) > 0) {
            /*
             * Uses a __toString method on the $errors variable which is a
             * ConstraintViolationList object. This gives us a nice string
             * for debugging
             */
            $errorsString = (string) $errors;   
            
            return $this->render('AcmeRestaurantBundle:Feedback:index.html.twig', array(
            'form' => $form->createView(),
            'error' =>  $errorsString
        ));
        }
        $form->handleRequest($request);
        if ($form->isValid()) { 
            // perform some action, such as saving the task to the database
            $user_form_data = $form->getData();            
            
            $user->setBillingKey($user_form_data->getBillingKey());
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('acme_restaurant_feedback_page'));
        }        
        return $this->render('AcmeRestaurantBundle:Feedback:index.html.twig', array(
        'form' => $form->createView(),
        'error' => ''
        ));       
    }
    
    public function pageAction(Request $request){
        return $this->render('AcmeRestaurantBundle:Feedback:page.html.twig', array());        
        
    }
}
