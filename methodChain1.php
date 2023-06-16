<?php 
class Number
{
public $number;
public function setNumber($num)
{
$this->number=$num;
return $this;
}
public function mulTwo()
{
    $this->number *=2;
    return $this;
}
public function addTwo()
{
    $this->number +=2;
    return $this;
}
public function print()
{
echo $this->number;
}
}

// $number=new Number;
// $number->setNumber(3);
// $number->mulTwo();
// $number->addTwo();
// $number->print();
// echo "<br>";


$number=new Number;
$number->setNumber(3)->mulTwo()->addTwo()->print(); //8
echo "<br>";
