<?php 
interface Shape{
    public function area($x,$y); //named method //interface acess modifiers only public
    public function diameter(); //named method
}
interface X{
    public function test(); //named method
}
class Square implements Shape,X
{
    public $len;
    public function __construct($length){
        $this->len=$length;
    }
    public function area($x,$y)
    {
        return $this->len**2;
    }
    public function diameter()
    {
        return $this->len*4;

    } 
    public function test()
    {

    } 
}
    class Circle implements Shape
{
    public function area($x,$y)
    {

    }
    public function diameter()
    {
        
    } 
}
