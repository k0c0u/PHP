<?php
//Задание 1,2,3
class Goods {
    public $id;
    public $title;
    public $price;
    function getGoods() {
        return "{$this->id}<br> {$this->title}<br> {$this->price}<br>";
    }
}
$goods2 = new Goods();
$goods2->id = 7;
$goods2->title = "tempTit";
$goods2->price = 100;
echo $goods2->getGoods()."<br>";

//Задание 4
class Product2 extends Goods {
    public $description;
    public $author;
    public $clockspeed;
    function getCommodity() {
        return "{$this->description}<br> {$this->author}<br>";
    }
}
$goods3 = new Product2();
$goods3->id = 10;
$goods3->title = "titleTemp";
$goods3->price = 220;
$goods3->description = "Book";
$goods3->author = "Pushkin";
echo $goods3->getGoods();
echo $goods3->getCommodity()."<br>";

//Задание 5
class A1 {
    public function foo1() {
        static $x1 = 0;
        echo ++$x1."<br>";
    }
}

$a11 = new A1(); //создаём объект класса А1
$a21 = new A1(); //создаём объект класса А1

$a11->foo1(); //обращаемся к функции foo1 класса А1, значение значение х1 в которой становится равной 1
$a21->foo1(); //обращаемся к функции foo1 класса А1, значение значение х1 в которой становится равной 2
$a11->foo1(); //обращаемся к функции foo1 класса А1, значение значение х1 в которой становится равной 3
$a21->foo1(); //обращаемся к функции foo1 класса А1, значение значение х1 в которой становится равной 4
echo "<br>";



?>

