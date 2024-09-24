<?php
namespace CheckReturn;
require_once "I.php";

class C implements I
{
    public function f()
    {
        echo 'Function F of class C implements from interface I'. EOL;
    }
}