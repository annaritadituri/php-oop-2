<?php

class Cat {

    private string $category;
    private string $classIcon;
    
    //category methods
    public function setCategory() : void {
        $this->category = 'CAT';
    }

    public function getCategory() : string {
        return $this->category;
    }

    //imageUrl methods
    public function setClassIcon() : void {
        $this->classIcon = 'fas fa-cat';
    }

    public function getClassIcon() : string {
        return $this->classIcon;
    }

}

?>
