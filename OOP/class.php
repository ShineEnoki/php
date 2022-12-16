<?php

abstract class Animal {
    protected $name;
    protected $color;

    abstract function talk();
    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    
    final public function run()
    {
        echo "Animal is running...";
    }

};

class Dog extends Animal
{
    public function talk(){echo "nothing";}
    public function __construct($name, $color){
        parent::__construct($name, $color);
    }
   
    public function shout(){
        return "$this->name : woof woof";
    }

    public function profile(){
        return "$this->name has $this->color color";
    }


   
};


$puppy = new Dog("puppy", "green");
echo $puppy->profile();
echo "<br/>";
echo $puppy->shout();
$puppy->talk();




