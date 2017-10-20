<?php

namespace Nexity\BackBundle\Services;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;

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

    public function ajaxFindContact(Request $request)
    {
        return $this->repository->ajaxFindContact($request);
    }

    public function ajaxGetContact($ids)
    {
        return $this->repository->ajaxGetContact($ids);
    }

}