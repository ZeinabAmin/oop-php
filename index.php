<?php
// Class User {
//     public $name,$email,$age;

//     public function greet(){
//         echo "Hello $this->name";
//     }

// }

// $user= new User;
// $user->name="Ali";
// $user->email="ali@gmail.com";
// $user->age=22;
// $user->greet();
// echo "<br>";
// print_r($user);
// echo "<br>";
// echo $user->email;
// echo "<br>";

// $ibrahim= new User; //var type obj
// $ibrahim->name="Ibrahim";
// $ibrahim->email="ibrahim@gmail.com";
// $ibrahim->age=20;
// $ibrahim->greet();
// echo "<br>";
// print_r($ibrahim); obj compound type
// echo "<br>";
// echo $ibrahim->email;
// echo "<br>";
///////////////////////////////////////////////////////////
// Class User {
//     public $name,$email,$age;
//   public function __construct(){
//         echo "construct";
//     }
//     public function greet(){
//         echo "Hello $this->name";
//     }

// }

// $user= new User();
// echo "<br>";
// $user->greet();
// echo "<br>";
///////////////////////////////////////////////////////////
// class User
// {
//     public $name, $email, $age;
//     public function __construct($username, $useremail, $userage) 
//     {
//         $this->name = $username;
//         $this->email = $useremail;
//         $this->age = $userage;
//     }
//     public function greet()
//     {
//         echo "Hello $this->name";
//     }
// }

// $user = new User('Mona','mona@gmail.com',22);
// echo "<br>";
// print_r($user);
// echo "<br>";
///////////////////////////////////////////////////////////

// php 8
class User
{
    public string $type = 'user';
    // public array $courses;
    public function __construct(public string $name, public string $email, public int $age) //required propertise
    {
        $this->greet();
    }
    public function greet()
    {
        echo "Hello $this->name";
    }
    public function promote()
    {
        $this->type = "admin";
    }
    public function incAge(int $years): int
    {
        //  $this->age=$years+$this->age;
        return $this->age += $years;
    }
    public function updateEmail($newEmail)
    {
        echo  $this->greet();
        return $this->email = $newEmail;
    }
}

$user = new User('Mai', 'mai@gmail.com', 22);
echo "<br>";
print_r($user);
// User Object ( [type] => user [name] => Mai [email] => mai@gmail.com [age] => 22 )
echo "<br>";
$user->promote();
$user->type = 'guest';
$user->track = 'php';
$user->updateEmail('doaa@gmail.com');
// echo $user->updateEmail('doaa@gmail.com');
// $user->name=[1,3,5];//false 
echo "<br>";
print_r($user);
// User Object ( [type] => admin [name] => Mai [email] => mai@gmail.com [age] => 22 )
echo "<br>";
$user->incAge(10);
print_r($user); // 32
