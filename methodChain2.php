<?php 
abstract class Product
{
public $priceAfterDiscount;
public function __construct(public $name, public $price, public $quantity)
{
}
abstract public function setDiscount();
abstract public function printDiscount();
}
class Mobile extends Product
{

    public function setDiscount()
    {
        $this->priceAfterDiscount=$this->price*0.90; //10%
        return $this;
    }
    public function printDiscount()
    {
    echo "mobile name:$this->name <br> price:$this->price <br> quantity:$this->quantity <br> price after discount:$this->priceAfterDiscount";
    }
}
class Laptop extends Product
{
    public function setDiscount()
    {
        $this->priceAfterDiscount=$this->price*0.95;//5%
        return $this;
    }
    public function printDiscount()
    {
    echo "laptop name:$this->name <br> price:$this->price <br> quantity:$this->quantity <br> price after discount:$this->priceAfterDiscount";
    }
}

$mobile=new Mobile('samsung','10000','25');
$mobile->setDiscount()->printDiscount(); 
echo "<br>";
