<?php

namespace Redking\Bundle\SonataUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class RedkingSonataUserBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataUserBundle';
    }
}
