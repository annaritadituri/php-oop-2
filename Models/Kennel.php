<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product {

    private string $size;
    private string $color;
    private string $product;

    //size methods
    public function setSize(string $size) : void {
        $this->size = $size;
    }

    public function getSize() : string {
        return $this->size;
    }

    //color methods
    public function setColor(string $color) : void {
        $this->color = $color;
    }

    public function getColor() : string {
        return $this->color;
    }

    //product methods
    public function setProduct() : void {
        $this->product = 'KENNEL';
    }

    public function getProduct() : string {
        return $this->product;
    }

}

?>
