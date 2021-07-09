<?php 

class Product {
    public $brand;
    public $series;
    public $operatingSystem;
    protected $price;
    protected $discount;

    function __construct($brand, $series, $operatingSystem, $price, $discount = 0){
        $this->brand = $brand;
        $this->series = $series;
        $this->operatingSystem = $operatingSystem;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setDiscount($age) {
        if ($age<18 || $age>65) {
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }  
        return $this->discount;

    }

    // public function getDiscount() {
    //     return $this->discount;
    // }


}

$product1 = new Product("Apple", "MacBook Air", "MacOS", 300);
echo $product1->setDiscount(70);

var_dump($product1);

?>
