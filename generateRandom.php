<?php

function generateRandom($min, $max, $howMany)
{
    $nums = [];
    for($i=0;$i<$howMany;$i++)
        array_push($nums, random_int($min, $max));
    return $nums;
}
$data = generateRandom(0,9,5);
$response = array('id'=>random_int(10,1000), 'numbers'=>$data);
print_r(json_encode($response));