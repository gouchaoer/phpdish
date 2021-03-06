<?php

namespace PHPDish\Bundle\PostBundle\Security;

use PHPDish\Bundle\CoreBundle\Security\EntityVoter;
use PHPDish\Bundle\PostBundle\Entity\Post;

class PostVoter extends EntityVoter
{
    protected function getResourceClass()
    {
        return Post::class;
    }
}
