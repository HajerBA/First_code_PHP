<?php namespace zoo;

class Animal
{
    private $nb_legs;  
    private $nb_eyes;

    public function __construct(int $nb_legs = 4,int $nb_eyes = 2){
        $this->nb_legs = $nb_legs;
        $this->nb_eyes = $nb_eyes;
      }
    public function get_nblegs(): int{
        return $this->nb_legs;
      }
      public function get_nbeyes(){
        return $this->nb_eyes;
      }
    public function eat() {
        echo "I am eating";
    }
    public function sleep()
    {
        echo "I'm sleeping";
    }
    public function walk()
    {
        echo "I'm walking";
    }
}

