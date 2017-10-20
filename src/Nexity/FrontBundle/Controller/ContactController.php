<?php

namespace Nexity\FrontBundle\Controller;


use Doctrine\ORM\EntityNotFoundException;
use Nexity\FrontBundle\Form\Handler\ContactHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\JsonResponse as JsR;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class Contact
 * @package Nexity\FrontBundle\Controller
 */
class ContactController extends Controller
{
    /**
     * @Route("/contact/create")
     */
    public function createAction()
    {
        $contactFormHandler = $this->get('contact_handler');

        if($contactFormHandler->process()) {
            return $this->redirect($this->generateUrl('nexity_front_contact_contactsuccess'));
        }

        return $this->render('NexityFrontBundle:Contact:create.html.twig', ['form' => $contactFormHandler->createView(), 'errors' => $contactFormHandler->getErrors()]);
    }

    /**
     * @Route("/contact/success")
     */
    public function contactSuccessAction()
    {
       /* @var $session Session */
       $session = $this->get('session');

       $session->getFlashBag()->add('notifications', 'Félicications ! nous avons bien pris en compte votre demande. Merci!');

       return $this->render('NexityFrontBundle:Contact:success.html.twig');
    }
}