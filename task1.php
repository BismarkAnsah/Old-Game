<?php
/*

Task 1

user selection
1,2,3,4,5
2,3,4,5,6
3,4,5,6,7
4,5,6,7,8
5,6,7,8,9

machine selection
1,2,3,4,5

task1. write a php program to compare the user selection and machine selection to see if both  contain the same element*/

$machineSelection = array(1,2,3,4,5);
$userSelections = array(
    array(1,2,3,4,5),
    array(2,3,4,5,6),
    array(3,4,5,6,7),
    array(4,5,6,7,8),
    array(5,3,4,2,1)
);

function userWon($machineSelection, $userSelections)
{
    $result = [];
    sort($machineSelection);
    foreach ($userSelections as $selection) :
        sort($selection);
        if ($selection == $machineSelection)
            $result = $selection;
    endforeach;
    return $result;
}


if(userWon($machineSelection, $userSelections))
    $result = "You Win";
else 
    $result = "You Lost";
echo "<span class ='result' />$result</span>";
?>

<script>
    let result = document.querySelector('.result').innerHTML;
    console.log(result);
</script>