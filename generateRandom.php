<?php

function generateRandom($min, $max, $howMany)
{
    $nums = [];
    for($i=0;$i<$howMany;$i++)
        array_push($nums, random_int($min, $max));
    return $nums;
}

print_r(json_encode(generateRandom(0,9,5)));