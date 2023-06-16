<?php 
//static //utility method
// :: scope resolution operator
class Str
{
public static $x=3;
public $y=7;
public static function upperFirst($string)
{
return ucfirst($string);
}
public static function filter($string)
{
return htmlspecialchars(trim($string));
}
public static function callStatic()
{
echo self::$x;
}
public function callNonStatic()
{
echo self::$x;
echo "<br>";
echo $this->y;
}
}
$name='ali';
$js="<script>alert('hello')</script>";
// $str=new Str;
// echo $str->upperFirst($name);
//echo "<br>";
// echo $str->filter($js);
//echo "<br>";

//utility method
echo Str::upperFirst($name);
echo "<br>";
echo Str::filter($js);
echo "<br>";
echo Str::$x;
echo "<br>";
echo Str::callStatic();
echo "<br>";
$str=new Str;
echo $str->callNonStatic();
echo "<br>";
