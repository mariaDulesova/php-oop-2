<?php 
require_once __DIR__ . "/Product.php";

class Phone extends Product {

    public $cameraSystem;
    public $cellular;
   
    function __construct($brand, $series, $operatingSystem, $price, $discount = 0, $cameraSystem, $cellular) {
        parent::__construct($brand, $series, $operatingSystem, $price, $discount = 0);
        $this->cameraSystem=$cameraSystem;
        $this->cellular=$cellular;
        
    }

    public function setDiscount($age) {
        $compDiscount = parent::setDiscount($age);
        return $this->discount = $compDiscount + 10;

    }

}

$phone1 = new Phone("Apple", "iPhone12", "iOS", 1000, 0,"Dual-Camera-System", "5G");
$phone1->setDiscount($age);
$phone1->getPrice();


var_dump($phone1);
echo $age;
echo $this->price;

?>