<?php

abstract class Product {
    public $BasePrice = 11;
    abstract protected function PriceCalculation();  //Расчет цены товара
    abstract protected function Profit(); //Расчет дохода с прибыли
    public function printValue() {
    echo "Доход с продаж ".this->Profit()."<br>";
    }
}
//Класс штучного товара
class PieceGoods extends Product
    public function __construct($Efficiency){
        $this->Efficiency = $Efficiency; //Прибыль с товара
}
    protected function PriceCalculation(){
        return $this->BasePrice;
}
    protected function Profit(){
    return "штучного товара".$this->PriceCalculation() * $this->Efficiency;
}

//Класс цифрового товара
class DigitalGoods extends Product
    public function __construct($Efficiency){
    $this->Efficiency = $Efficiency; //Прибыль с товара
}
    protected function PriceCalculation(){
    return $this->BasePrice / 2;
}
    protected function Profit(){
    return "цифрового товара".$this->PriceCalculation2() * $this->Efficiency;
}

//Класс весового товара
class WeightGoods extends Product
    public $ProductWeight;
    public function __construct($ProductWeight,$Efficiency){
        $this->ProductWeight = $ProductWeight; //Вес товара
        $this->Efficiency = $Efficiency; //Прибыль с товара
}
    protected function PriceCalculation(){
    return $this->BasePrice * $this->ProductWeight;
}
    protected function Profit(){
    return "весового товара".$this->PriceCalculation2() * $this->Efficiency;
}

$PieceProduct = new PieceGoods(0.18); //Прибыльность товара
$PieceProduct->printValue();
$Digital = new DigitalGoods(0.08);
$Digital->printValue();
$Weight = new WeightGoods(5.1,0.16);
$Weight->printValue();
?>

<!--Реализовать паттерн Singleton при помощи traits.-->
<?php

trait getObj
{
    //статический метод для проверки и/или создания объекта в единственном экземпляре
    public static function getObj()
    {
        //если getObj пустой, создаем экземпляр
        if (is_null(self::$objSingleton)) {
            self::$objSingleton = new self();
        }
        ////если getObj не пустой, возращаем экземпляр
        return self::$objSingleton;
    }
}


class MySingletonPattern
{
    private static $objSingleton;

    //С помощью модификатора запрещаем создавать экземпляр класса. Для создания необходимо использовать статический метод.
    private function __construct()
    {
    }

    use getObj;

}

$obj1 = MySingletonPattern::getObj();
var_dump($obj1);