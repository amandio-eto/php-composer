<?php
require __DIR__. '/vendor/autoload.php';
use Amandio\PhpComposer\Data\People;


$data = new People("Jose Amandio de Almeida");
echo $data->sayHello("Amandio Backed Programmer ETO");