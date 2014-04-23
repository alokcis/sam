<?php

namespace Client\FeedbackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Client\FeedbackBundle\Entity\Users;
class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('ClientFeedbackBundle:Default:index.html.twig', array('name' => $name));
    }

    public function startAction() {

        $data = array();
        $request = $this->get('request');
        $em = $this->getDoctrine()->getManager();
        if ($request->getMethod() == 'POST') {
            $billing_key = $request->request->get('billingId');
            $users = new Users();
            $users->setBillingKey($billing_key);
            //$company = $em->getRepository('ClientFeedbackBundle:Company')->find((int) $companyid);
            $validator = $this->get('validator');
            $data['errors'] = $validator->validate($users);
            if (count($data['errors']) <= 0) {
                $em->persist($users);
            }

            exit();
        }

        return $this->render('ClientFeedbackBundle:Default:start.html.twig', array('name' => 'test'));
    }

    public function questionareAction() {
        
    }

}
