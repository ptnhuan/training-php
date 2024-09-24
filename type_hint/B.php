<?php
namespace CheckReturn;
require_once "C.php";

class B extends C
{
    public function b1(){
        echo 'This is function B1 from class B.'. EOL;
    }
}