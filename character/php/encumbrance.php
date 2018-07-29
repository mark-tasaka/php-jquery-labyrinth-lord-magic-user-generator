<?php

function turnMovement($input)
{
    $turnMove = "-";
    
    if($input <= 40)
    {
        $turnMove = "120'";
    }
    else if($input > 40 && $input <= 60)
    {
        $turnMove = "90'";
    }
    else if($input > 60 && $input <= 80)
    {
        $turnMove = "60'";
    }
    else if($input > 80 && $input <= 160)
    {
        $turnMove = "30'";
    }
    
    return $turnMove;
}

function encounterMovement($input)
{
    $turnMove = "-";
    
    if($input <= 40)
    {
        $turnMove = "40'/round";
    }
    else if($input > 40 && $input <= 60)
    {
        $turnMove = "30'/round";
    }
    else if($input > 60 && $input <= 80)
    {
        $turnMove = "20'/round";
    }
    else if($input > 80 && $input <= 160)
    {
        $turnMove = "10'/round";
    }
    
    return $turnMove;
}


function runningMovement($input)
{
    $turnMove = "-";
    
    if($input <= 40)
    {
        $turnMove = "120'/round";
    }
    else if($input > 40 && $input <= 60)
    {
        $turnMove = "90'/round";
    }
    else if($input > 60 && $input <= 80)
    {
        $turnMove = "60'/round";
    }
    else if($input > 80 && $input <= 160)
    {
        $turnMove = "30'/round";
    }
    
    return $turnMove;
}



?>