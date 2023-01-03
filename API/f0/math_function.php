<?php
function add(array $nums) {
   $nums = array_sum($nums);
   return $nums;
}

function sub(array $nums) {
    $vysledek = reset($nums);
    foreach(array_slice($nums, 1) as $value) {
        $vysledek -= $value;
    }
    return $vysledek;
}

function mul(array $nums) {
    $vysledek = 1; 
    foreach($nums as $value) {
        $vysledek *= $value;
    }
    return $vysledek;
}

function div(array $nums) {
    $vysledek = $nums[0];
    for($x = 0; $x< count($nums)-1; $x++) { 
        $vysledek = $vysledek / $nums[$x+1]; 
    }
    return $vysledek;
}

function mod(array $nums) {
    
    $num = $nums[0];
    $pow = $nums[1];
    $vysledek = pow($num, $pow);


    return $vysledek;
}

function square(array $nums) {
    $num = sqrt($nums[0]);
    return $num;

}
?>