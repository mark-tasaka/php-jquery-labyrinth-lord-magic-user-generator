<?php


function getGear($input)
{
        $a00 = array("Backpack (empty)", 2);
        $a01 = array("Bedroll", 5);
        $a02 = array("Case, map or scroll", 1);
        $a03 = array("Blanket, winter", 3);
        $a04 = array("Block and tackle", 5);
        $a05 = array("Candles (10)", 0);
        $a06 = array("Crowbar", 5);
        $a07 = array("Flask (empty)", 1);
        $a08 = array("Flint and steel", 0);
        $a09 = array("Garlic (3 cloves)", 0);
        $a10 = array("Grappling hook", 5);
        $a11 = array("Hammer", 2);
        $a12 = array("Holy symbol, wooden", 0);
        $a13 = array("Holy symbol, silver", 1);
        $a14 = array("Holy water (flask)", 1);
        $a15 = array("Ink (1 ox. vial)", 0);
        $a16 = array("Quill pen", 0);
        $a17 = array("Ladder, 10-foot", 20);
        $a18 = array("Lantern", 3);
        $a19 = array("Lock", 1);
        $a20 = array("Manacles", 2);
        $a21 = array("Mirror, small steel", 1);
        $a22 = array("Oil (1-pint flask)", 1);
        $a23 = array("Paper (sheet)", 0);
        $a24 = array("Parchment (sheet)", 0);
        $a25 = array("Pick, miner's", 10);
        $a26 = array("Pole, 10-foot wooden", 8);
        $a27 = array("Rations, unpreserved", 1);
        $a28 = array("Rations, trail (5 days)", 5);
        $a29 = array("Rope, hemp (50 ft.)", 10);
        $a30 = array("Rope, silk (50 ft.)", 5);
        $a31 = array("Sack, large (empty)", 1);
        $a32 = array("Sack, small (empty)", 1);
        $a33 = array("Saddle", 25);
        $a34 = array("Saddle bag", 1);
        $a35 = array("Spade or shovel", 3);
        $a36 = array("Spell book (blank)", 3);
        $a37 = array("Spikes, iron (12)", 8);
        $a38 = array("Spyglass", 1);
        $a39 = array("Stakes, wooden (3)", 1);
        $a40 = array("Thieves' tools", 1);
        $a41 = array("Torches (8)", 8);
        $a42 = array("Vial (for ink, potion)", 0);
        $a43 = array("Waterskin/wineskin", 4);
        $a44 = array("Wine (2 pints)", 1);
        $a45 = array("Wolfsbane (first full)", 0);
    
    
        $arr= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $a21, $a22, $a23, $a24, $a25, $a26, $a27, $a28, $a29, $a30, $a31, $a32, $a33, $a34, $a35, $a36, $a37, $a38, $a39, $a40, $a41, $a42, $a43, $a44, $a45);
        
        return $arr[$input];
}




?>