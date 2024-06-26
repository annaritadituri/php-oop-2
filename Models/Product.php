<?php

require_once __DIR__ . '/Category.php';

class Product {

    private string $name;
    private float $price;
    private string $imageUrl;
    private string $category;

    function __construct($name, $category) {
        $this->name = $name;
        $cat = new Category($category);
        $cat->setCategory();
        $this->category = $cat->getCategory();
    }
    
    //name methods
    public function getName() : string {
        return $this->name;
    }

    //price methods
    public function setPrice(float $price) : void {
        $this->price = $price;
    }

    public function getPrice() : float {
        return $this->price;
    }

    //imageUrl methods
    public function setImageUrl(string $imageUrl) : void {
        $this->imageUrl = $imageUrl;
    }

    public function getImageUrl() : string {
        return $this->imageUrl;
    }

}

?>
