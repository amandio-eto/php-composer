<?php
require __DIR__ . '/vendor/autoload.php';
use Amandio\PhpComposer\Data\People;

$people = new People('amandio'); 
echo $people->sayHello("I'm Backend Programmer in ETO Company");