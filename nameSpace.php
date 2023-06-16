<?php 
require_once "classes/Auth.php";
require_once "classes/Payment.php";


use Classes\Auth\User as Auser; //alias //rename
use Classes\Payment\User as Puser;


// $user1= new classes\Auth\User;
// echo "<br>";
// $user2= new classes\Payment\User;


$user1= new Auser;
echo "<br>";
$user2= new Puser;
