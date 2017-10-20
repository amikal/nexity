<?php

namespace Nexity\BackBundle\Services;

use Doctrine\ORM\EntityManager;
use Symfony\Component\BrowserKit\Request;

class ContactManager
{
    /**
     * @var EntityManager
     */
    private $em;
    private $repository;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        $this->repository = $this->em->getRepository('NexityBackBundle:Contact');
    }

    public function persist($contact)
    {
        $this->em->persist($contact);
        $this->em->flush();
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

}