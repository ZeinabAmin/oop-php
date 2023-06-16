<?php
//to limit acess
class Myparent
{
    // public $name = 'Ali';
    // protected $name = 'Ali';
    private $name = 'Ali';
    public function test()
    {
        echo $this->name;
    }
}
class Child extends Myparent
{
    // public function test()
    // {
    //   echo $this->name;
    // }
}

$my = new Myparent();
echo "<br>";
// echo $my->name;
echo "<br>";
$my->test(); //Ali
echo "<br>";

$child = new Child();
echo "<br>";
$child->test();
echo "<br>";
