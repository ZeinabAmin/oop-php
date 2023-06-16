<?php
// solid principle //uncle bob //best practise

// 1-single responsibility
// 2-open for extension closed for edit 
// 3-liskov substitution
// 4-interface segregation
// 5-dependancy inversion



interface printer
{
    public function print(); //named method
}
interface scanner
{
    public function scanner(); //named method
}
class PrintA implements printer, scanner
{
    public function print()
    {
        echo "printed";
    }
    public function scanner()
    {
        echo "scanned";
    }
}
class PrintB implements printer
{
    public function print()
    {
        echo "printed";
    }
}

$a = new PrintA;
$a->print();
echo "<br>";
$a->scanner();
