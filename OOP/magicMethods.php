<?php
    class Math
    {
        public function __call($name, $args)
        {
            echo "Method $name doesn't exists";
        }
        
        static function __callStatic($name, $args)
        {
            echo "Static method $name doesn't exists";
        }
    }
    $obj = new Math;
    $obj->add();
    $obj->move();
    Math::add();
