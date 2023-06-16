<?php
// solid principle //uncle bob //best practise

// 1-single responsibility
// 2-open for extension closed for edit 
// 3-liskov substitution
// 4-interface segregation
// 5-dependancy inversion



// class Sender
// {
//     public function send($data)
//     {
//         if ($data == "frontend") {
//             $msg = "we love js";
//         } elseif ($data == "bachend") {
//             $msg = "we love api";
//         } elseif ($data == "fullstack") {
//             $msg = "mix js and php in the blender";
//         }
//         return $msg;
//     }
// }
// $send= new Sender;
// echo $send->send("frontend"); //wrong



class Frontend
{
   public function greet()
   {
      echo "welcome frontend";
   }
}
class Backend
{
   public function greet()
   {
      echo "welcome Backend";
   }
}
class Fullstack
{
   public function greet()
   {
      echo "welcome Fullstack";
   }
}
class Sender
{
   public function send($obj) //instance
   {
      return $obj->greet();
   }
}

$fr = new Frontend;
$send = new Sender;
$send->send($fr);

/////////////////////////////////////////////////////////

// class Calculator 
// {
//     public function calculate ($x,$y,$op)
//     {
//         if ($op == "add") {
//             return $x + $y;
//         } elseif ($op == "sub") {
//          return $x - $y;
//         } elseif ($op == "mul") {
//          return $x * $y;
//         }
//     }
// }
// $calc= new Calculator;
// echo $calc->calculate(3,4,"add"); //wrong



interface operation
{
   public function calculate($x, $y); //named method //interface acess modifiers only public
}
class Add implements operation
{
   public function calculate($x, $y)
   {
      return $x + $y;
   }
}
class sub implements operation
{
   public function calculate($x, $y)
   {
      return $x - $y;
   }
}
class Mul implements operation
{
   public function calculate($x, $y)
   {
      return $x * $y;
   }
}
class Calculator
{
   public function calculate($x, $y, operation $op)
   {
      return  $op->calculate($x, $y);
   }
}
$calc = new Calculator;
echo $calc->calculate(3, 4, new Add); //obj
