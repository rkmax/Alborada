<?php

require_once __DIR__.'/AlboradaKernel.php';

use Symfony\Bundle\FrameworkBundle\Cache\Cache;

class AlboradaCache extends Cache
{
    protected function getOptions()
    {
        return array();
    }
}
