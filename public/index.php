<?php

require '../vendor/autoload.php';

$hello =  new \App\Wcs\Hello();
echo $hello->talk();

echo \HelloWorld\SayHello::world();