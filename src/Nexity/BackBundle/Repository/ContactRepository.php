<?php

namespace Nexity\BackBundle\Repository;

use Doctrine\ORM\Query\Expr;
use Symfony\Component\HttpFoundation\Request;

/**
 * ContactRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ContactRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAll()
    {
        $qb = $this->createQueryBuilder('c');

        $query = $qb;

        $result = $query->getQuery()->execute();

        return $result;
    }

    public function ajaxFindContact(Request $request)
    {
        $expr = new Expr();

        $result = $this->createQueryBuilder('c')
            ->select('c.code_postal')
            ->where($expr->like('c.code_postal', ':cp'))
            ->groupBy('c.code_postal')
            ->setParameter('cp', sprintf('%s%%', $request->query->get('q', '')))
            ->getQuery()
            ->getArrayResult();

        return $result;
    }
}
