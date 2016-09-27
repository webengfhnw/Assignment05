<?php

class BaseClass
{
    protected $a;

    function __construct()
    {
        print "BaseClass Constructor" . "<br/>";
        echo $this->a = 5;
        echo "<br/>";
    }

    function __destruct()
    {
        print "Object deleted" . "<br/>";
    }
}

class SubClass extends BaseClass
{

    protected $b;

    function __construct()
    {
        parent::__construct();
        print "SubClass Constructor" . "<br/>";
        echo $this->b = 10;
        echo "<br/>";
    }
}

$obj = new SubClass();
$obj2 = new BaseClass();
