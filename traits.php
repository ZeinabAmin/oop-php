<?php 
// class A
// {
// public $a;
// }
trait A
{
    public $a;
}
// class B
// {
//     public $b,$name;
// }
trait B
{
    public $b,$name;
}
class C
{
    use a,b;
    public $c;
}
// trait C
// {
//     public $c;
// }

$c=new C;
print_r($c);
// C Object ( [c] => [a] => [b] => [name] => )
