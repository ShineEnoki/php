<?php

    trait Job
    {
        public function job(){
            echo "This animal is doing well";
        }
    }

    trait Value
    {
        public function price(){
            echo "This animal is mid in price";
        }
    }

    class Cow
    {
        use Job, Value;
    }

    $nc = new Cow;
    $nc->job();
    $nc->price();