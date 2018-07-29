<?php


    function getWeapon($input)
    {
        $a00 = array("Axe, battle+", "1d8", 6);
        $a01 = array("Axe, hand", "1d6", 3);
        $a02 = array("Club", "1d4", 3);
        $a03 = array("Crossbow, heavy (quarrels x10)", "1d8", 9);
        $a04 = array("Crossbow, light (quarrels x10)", "1d6", 5);
        $a05 = array("Dagger", "1d4", 1);
        $a06 = array("Daggers x 2", "1d4", 2);
        $a07 = array("Daggers x 3", "1d4", 3);
        $a08 = array("Dagger, silver", "1d4", 1);
        $a09 = array("Darts x 2", "1d4", 1);
        $a10 = array("Darts x 4", "1d4", 2);
        $a11 = array("Darts x 6", "1d4", 3);
        $a12 = array("Flail", "1d6", 5);
        $a13 = array("Flail, heavy+", "1d8", 10);
        $a14 = array("Hammer, light", "1d4", 2);
        $a15 = array("Hammer, war+", "1d6", 5);
        $a16 = array("Javelin", "1d6", 2);
        $a17 = array("Javelins x 2", "1d6", 4);
        $a18 = array("Lance", "1d6", 10);
        $a19 = array("Longbow (arrows x 20)", "1d8", 6);
        $a20 = array("Mace", "1d6", 3);
        $a21 = array("Morningstar+", "1d6", 6);
        $a22 = array("Pick, heavy+", "1d8", 6);
        $a23 = array("Pick, light", "1d6", 3);
        $a24 = array("Pole Arm+", "1d10", 15);
        $a25 = array("Quarterstaff+", "1d6", 4);
        $a26 = array("Scimitar", "1d8", 4);
        $a27 = array("Shortbow (arrows x 20)", "1d6", 5);
        $a28 = array("Sling (bullets x 10)", "1d4", 5);
        $a29 = array("Spear", "1d6", 6);
        $a30 = array("Sword, long", "1d8", 4);
        $a31 = array("Sword, bastard^", "1d8/2d4", 6);
        $a32 = array("Sword, short", "1d6", 2);
        $a33 = array("Sword, two-handed+", "1d10", 15);
        $a34 = array("Trident+", "1d6", 4);
        $a35 = array("Daggers, silver x 2", "1d4", 2);
        $a36 = array("Daggers, silver x 3", "1d4", 3);

        $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $a21, $a22, $a23, $a24, $a25, $a26, $a27, $a28, $a29, $a30, $a31, $a32, $a33, $a34, $a35, $a36);
        
        return $array1[$input];
        
    }

function isWeaponTwoHanded($input, $value)
{
    if($input === "Axe, battle+")
    {
        $value += 1;
    }
    else if($input === "Flail, heavy+")
    {
        $value += 1;
    }
    else if($input === "Hammer, war+")
    {
        $value += 1;
    }
    else if($input === "Morningstar+")
    {
        $value += 1;
    }
    else if($input === "Pick, heavy+")
    {
        $value += 1;
    }
    else if($input === "Pole Arm+")
    {
        $value += 1;
    }
    else if($input === "Quarterstaff+")
    {
        $value += 1;
    }
    else if($input === "Sword, two-handed+")
    {
        $value += 1;
    }
    else if($input === "Trident+")
    {
        $value += 1;
    }
    
    return $value;
    
}

function isWeaponBastardSword($input, $value)
{
    if($input === "Sword, bastard^")
    {
        $value = 100;
    }
    return $value;
}

function weaponNotes($value)
{
    $comments = "";
    
    if($value >= 1 && $value <= 20)
    {
        $comments = "+ Two-handed weapon";
    }
    else if($value === 100)
    {
        $comments = "^ Can be used one-handed or two-handed";
    }
    else if($value > 100)
    {
        $comments = "+ Two-handed weapon<br/>^ Can be used one-handed or two-handed";
    }
    
    return $comments;
    
}




?>