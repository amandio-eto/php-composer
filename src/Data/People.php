<?php
namespace Amandio\PhpComposer\Data;
class People
{
  
    public $name;
    
    public function __construct(string $name)
    {
        
    }
    public function sayHello(string $name)
    {
        
         echo "Hello $name, $this->name";
    }



    
}