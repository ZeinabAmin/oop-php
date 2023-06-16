<?php
//dont repeat yourself
class Person
{
    // public $name,$email,$age;
    public function __construct(public $name, public $email, public $age)
    {
        $this->greet();
    }
    public function greet()
    {
        echo "Hello user $this->name";
    }
}

class Teacher extends Person
{
    public $subject, $salary;
    //polymorphism override
    public function greet()
    {
        echo "Hello teacher $this->name";
    }
    public function test()
    {
        $this->greet();
    }
}
class Student extends Person
{
    public $grades, $year;
    //polymorphism override
    public function greet()
    {
        echo "Hello student $this->name";
    }
    //polymorphism overload
    // public function greet($data)
    // {
    //     echo "Hello student $this->name";
    // }

}

$teach1 = new Teacher('Mai', 'mai@gmail.com', 22);
echo "<br>";
$teach1->subject = 'backend';
$teach1->salary = 15000;
$teach1->greet();
echo "<br>";
$teach1->test();
echo "<br>";
print_r($teach1);
echo "<br>";
