<?php

include "math_function.php";

$funkce = filter_input(INPUT_GET, 'funkce', FILTER_SANITIZE_SPECIAL_CHARS);
$nums = explode(",", filter_input(INPUT_GET, 'n'));

foreach($nums as $klic => $value){
    if(!strlen($klic)){
        unset($nums[$klic]);
    }
}

$nums = array_values($nums);
$vysledek = $funkce($nums);
$json = json_encode($vysledek);


$data = array (
    "funkce" => "$funkce",
    "vysledek" => "$json"
);

echo json_encode($data);


function reply($data) {
    echo json_encode($data);
}



?>