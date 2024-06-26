<?php

require_once __DIR__ . '/Dog.php';
require_once __DIR__ . '/Cat.php';

class Category {

    private string $name;
    private string $category;
    private Dog $dog;
    private Cat $cat;

    function __construct($name) {
        $this->name = $name;
    }

    public function setCategory() {
        
        if($this->name === 'dog') {
            $this->dog = new Dog;
            $this->dog->setCategory($this->name);
            $this->category = $this->name;
        } else if ($this->name === 'cat') {
            $this->cat = new Cat;
            $this->cat->setCategory($this->name);
            $this->category = $this->name;
        } else {
            echo 'Inserisci una categoria valida';
        }
    }

    public function getCategory() : ? string {
        return $this->category;
    }
}

?>
