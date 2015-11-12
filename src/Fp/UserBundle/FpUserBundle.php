<?php

namespace Fp\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;


class FpUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
