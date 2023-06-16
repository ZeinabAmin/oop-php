<?php
// solid principle //uncle bob //best practise

// 1-single responsibility
// 2-open for extension closed for edit 
// 3-liskov substitution
// 4-interface segregation
// 5-dependancy inversion


// class order
// {
//     public function visa(visa $obj){}
//     public function Paypal(paypal $obj){}
//     public function cashe(cashe $obj){}
// } //wrong

interface payment
{
    public function pay(); //named method
}
class Visa implements payment
{
    public function pay()
    {
    }
}
class Paypal implements payment
{
    public function pay()
    {
    }
}
class cashe implements payment
{
    public function pay()
    {
    }
}
class order
{
    public function pay(payment $obj)
    {
        $obj->pay();
    }
}
