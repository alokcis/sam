<?php

namespace Client\FeedbackBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UsersRepository extends EntityRepository {

    public function readAll() {
        $em = $this->getEntityManager();

        $query = $em->createQueryBuilder()
                ->select('*')
                ->from('ClientFeedbackBundle:User')
                ->getQuery();

        $result = $query->getResult();

        if (!empty($result)) {
            return $result;
        } else {
            return false;
        }
    }

  

}

?>