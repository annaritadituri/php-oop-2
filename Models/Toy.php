<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product {

    private float $weight;
    private string $size;
    private bool $noise;
    private string $color;
    private string $type;
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

    //noise methods
    public function setNoise(bool $noise) : void {
        $this->noise = $noise;
    }

    public function getFlavor() : bool {
        return $this->noise;
    }

    //color methods
    public function setColor(string $color) : void {
        $this->color = $color;
    }

    public function getColor() : string {
        return $this->color;
    }

    //type methods
    public function setType(string $type) : void {
        $this->type = $type;
    }

    public function getType() : string {
        return $this->type;
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
