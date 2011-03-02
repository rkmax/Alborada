<?php

require_once __DIR__.'/../app/AlboradaKernel.php';

use Symfony\Component\HttpFoundation\Request;

$kernel = new AlboradaKernel('prod', false);
$kernel->handle(new Request())->send();
