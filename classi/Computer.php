<?php 
require_once __DIR__ . "/Product.php";

class Computer extends Product {

    public $ram;
    public $batteryDuration;
    public $weight;

    function __construct($brand, $series, $operatingSystem, $price, $discount = 0, $ram, $batteryDuration, $weight) {
        parent::__construct($brand, $series, $operatingSystem, $price, $discount = 0);
        $this->ram=$ram;
        $this->batteryDuration=$batteryDuration;
        $this->weight=$weight;
    }

    public function setDiscount($age) {
        $compDiscount = parent::setDiscount($age);
        return $this->discount = $compDiscount + 5;

    }

}

$computer1 = new Computer("Apple", "MacBook Air", "MacOS", 1240, 0,"8gb", "18h", "1.3kg");
$computer1->setDiscount($age);
$computer1->getPrice();

var_dump($computer1);
echo $age;
echo $this->price;

?>

