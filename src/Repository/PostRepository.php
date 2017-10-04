<?php

namespace Application\Repository;

use Doctrine\ORM\EntityRepository;

class PostRepository extends EntityRepository
{
    public function getNotPublishedPosts()
    {
        return $this->findBy(['published' => 0]);
    }
}