<?php

class Availability{
    public static function display ($availability){
        if ($availability ==0){
            echo "Nav pieejams";
        } else if ($availability == 1){
            echo "Ir uz vietas";
        }
    }
    
    public static function displayClass ($availability){
        if ($availability ==0){
            echo "outofstock";
        } else if ($availability == 1){
            echo "instock";
        }
    }
}

