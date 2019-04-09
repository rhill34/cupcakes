<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Define an associative array containing key-value pairs
 * for various cupcake flavors, and use the array
 * to display the cupcake options.
 * @return array of the Cupcake flavors
 */
function flavors()
{
    $array = array(
        "grasshopper" => "The Grasshopper",
        "maple"       => "Whiskey Maple Bacon",
        "carrot"      => "Carrot Walnut",
        "caramel"     =>"Salted Caramel Cupcake",
        "velvet"      => "Red Velvet",
        "lemon"       => "Lemon Drop",
        "tiramisu"    => "Tiramisu"
    );
    return $array;
}

/**
 * formCheckBoxes displays checkboxes of an array in to client
 * @param $flavorsArray
 */
function formCheckBoxes($flavorsArray)
{
    foreach ($flavorsArray as $flavor => $flavor_value)
        echo '<input type="checkbox" name="cupcakes1[]" value="'.$flavor_value.'" id="'.$flavor.'"><label>'.$flavor_value.'</label><br>';
}