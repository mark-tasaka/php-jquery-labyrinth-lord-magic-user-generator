<?php

    function getArmour($input)
    {
        $a01 = array("", 0, 0);
        $a02 = array("Banded mail", -5, 35);
        $a03 = array("Chain mail", -4, 30);
        $a04 = array("Leather", -1, 15);
        $a05 = array("Padded", -1, 10);
        $a06 = array("Plate mail", -6, 50);
        $a07 = array("Scale mail", -3, 40);
        $a08 = array("Splint mail", -5, 45);
        $a09 = array("Studded Leather", -2, 20);


        $array1= array($a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09);
        
        return $array1[$input];
        
    }


    function getShield($input)
    {
        $a01 = array("", 0, 0);
        $a02 = array("Shield", -1, 10);


        $array1= array($a01, $a02);
        
        return $array1[$input];
        
    }

?>