<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {

    private float $weight;
    private string $size;
    private string $flavor;
    private string $product;

    //weight methods
    public function setWeight(float $weight) : void {
        $this->weight = $weight;
    }

    public function getWeight() : float {
        return $this->weight;
    }

    //size methods
    public function setSize(string $size) : void {
        $this->size = $size;
    }

    public function getSize() : string {
        return $this->size;
    }

    //flavor methods
    public function setFlavor(string $flavor) : void {
        $this->flavor = $flavor;
    }

    public function getFlavor() : string {
        return $this->flavor;
    }

    //product methods
    public function setProduct() : void {
        $this->product = 'FOOD';
    }

    public function getProduct() : string {
        return $this->product;
    }

}

?>
