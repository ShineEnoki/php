<?php

    interface Animal
    {
        public function move();
    }


    class Dog implements Animal 
    {
        public function move(){
            echo "the dog is running";
        }
    }


    class Fish implements Animal{
        public function move(){
            echo "the fish is swimming";
        }
    }


    function app(Animal $obj){
        $obj->move();
    }


    app(new Fish);
    