<?php namespace zoo;
include "animal.php";
class Cat extends Animal
{
    private $color;  
    private $race;
    private $domesticated;  
    private $name;
    //on met les variable non optionnel avant celle optionelle
    public function __construct($color =[],$domesticated=true,$name,$race) {
        parent::__construct();
        $this->color= $color;
        $this->race= $race;
        $this->domesticated= $domesticated;
        $this->name= $name;       
      }
    public function get_color()
    {
        return $this->$color;
    }
    public function get_race()
    {
        return  $this->$race; 
    }
    public function get_name()
    {
        return  $this->$name;    
    }
    public function get_domesticated()
    {
        return  $this->$domesticated;       
    }
    public function meow()
    {
     echo "miou miou :p";
    }
    public function scratch()
    {
      echo "griffe";
    }
    public function hunt()
    {
      echo "run after a mouse";
    }
}

