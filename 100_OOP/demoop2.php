<?php

class CTest
{
    public $Price =10;
    private $dataBag;
    public function __set($k,$v)
    {
        echo "__set is running.$k, $v<br>";
        $dataBag[$k] = $v;
    }
    public function __get($k)
    {
        echo "__get be called <br>";
        return $this->dataBag[$k];
    }
}
$obj =new CTest();
echo $obj->Price."<br>";
$obj->Location = "Taichung";
echo $obj->Location."<br>";
?>