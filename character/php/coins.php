<?php

function getCoins ($input)
{
        $a00 = array(0, " gp");
        $a01 = array(rand(1, 6), " gp");
        $a02 = array(rand(1, 6) + rand(1, 6) + rand(1, 6), " gp");
        $a03 = array(rand(1, 6) + rand(1, 6) + rand(1, 6) + rand(1, 6) + rand(1, 6) + rand(1, 6), " gp");
        $a04 = array(rand(1, 6) + rand(1, 6), " pp");
        $a05 = array(rand(1, 6) + rand(1, 6) + rand(1, 6) + rand(1, 6), " pp");

        $array1= array($a00, $a01, $a02, $a03, $a04, $a05);
        
        return $array1[$input];
}



?>