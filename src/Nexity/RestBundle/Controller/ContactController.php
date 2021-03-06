<?php

namespace Nexity\RestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\View\View; // Utilisation de la vue de FOSRestBundle

/**
 * Class ContactController
 * @package Nexity\RestBundle\Controller
 */
class ContactController extends Controller
{
    /**
     * Collection get action
     * @var Request $request
     *
     */
    public function getContactsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $contacts = $em->getRepository('NexityBackBundle:Contact')->findAll();

        // Création d'une vue FOSRestBundle
        $view = View::create($contacts);
        $view->setFormat('json');

        return $view;
    }

    /**
     * Collection post action
     * @var Request $request
     */
    public function postContactAction()
    {
        $contactFormHandler = $this->get('contact_handler');

        if($contactFormHandler->process()) {
            return $this->redirect($this->generateUrl('nexity_front_contact_contactsuccess'));
        }

        return $this->render('NexityFrontBundle:Contact:create.html.twig', ['form' => $contactFormHandler->createView(), 'errors' => $contactFormHandler->getErrors()]);
    }
}
