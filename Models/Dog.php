<?php

class Dog {

    private string $category;
    private string $classIcon;
    
    //category methods
    public function setCategory() : void {
        $this->category = 'DOG';
    }

    public function getCategory() : string {
        return $this->category;
    }

    //imageUrl methods
    public function setClassIcon() : void {
        $this->classIcon = 'fas fa-dog';
    }

    public function getClassIcon() : string {
        return $this->classIcon;
    }

}

?>
