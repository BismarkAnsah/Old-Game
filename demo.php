<?php
#game rule: 
//arr1 value repeat 2x
//arr2 value mentain

$arr1 = [1,2,5];
$arr2 = [1,2,3];
$win  = [1,2,3,4,1];

// $value =  boolval([0]);
// var_dump($value);

function group60CheckWin()
{

}

class Royal5 {
    private $row1;
    private $row2;
    private $row3;
    private $row4;
    private $row5;
    private $drawNumber;

function __construct($drawNumber, ...$rows)
{
    $this->drawNumber = $drawNumber;
    $totalRows = count($rows);
    if($totalRows == 1)
        $this->row1 = $rows;
    else
    for($i=0;$i<$totalRows;$i++)
        $this->{"rows$i"} = $rows[$i];
}

    #all numbers must appear in draw number without repetition
    public function group120()
    {
        // print_r($this->drawNumber);
        // print_r($this->row1);
        // die;
        $difference = array_diff($this->drawNumber, $this->row1);
        $totalDifference = count($difference);
        $totalRow1 = count($this->row1);
        return $totalDifference == ($totalRow1-5);
    }
private function deleteElements($delete, $from)
{
    
}
   private function countDuplicates($needle, $arr)
{
    $duplicates = 1;
    foreach($arr as $value)
        $needle != $value ?:++$duplicates;
    return $duplicates;
}

    #a number in row1 appears 2x and numbers in row2 must be in remaining draw number
    public function group60()
    {
        // $unmatchedNums = array_diff($this->drawNumber, $this->row1);
        // return $unmatchedNums == 3 && !array_diff($unmatchedNums, $this->drawNumber);
        $rule1 = false; 
        $rule2 = false;
        $duplicatedValue = [];
        foreach($this->row1 as $value)
        {
            $duplicates = $this->countDuplicates($value, $this->drawNumber);
            if($duplicates == 2){
                $rule1 = true;
                array_push($value);
                break;
            }
        }
        if(!$rule1)
            return false;
        $remains = array_diff($duplicatedValue, $this->drawNumber);
        if(!array_diff($remains, $this->row2))
            $rule2 = true;
        return $rule2;
       
    }

    # 2 numbers in row1 appears 2x and numbers in row2 must be in remaining draw number
    public function group30()
    {
        $rule1 = false; 
        $rule2 = false;
        $duplicatedValue = [];
        $numberDuplicates = 0;
        foreach($this->row1 as $value)
        {
            $duplicates = $this->countDuplicates($value, $this->drawNumber);
            if($duplicates == 2){
                ++$numberDuplicates;
                array_push($value);
                break;
            }
        }
        $rule1 = $numberDuplicates == 2 ? true:false;
        if(!$rule1)
            return false;
        $remains = array_diff($duplicatedValue, $this->drawNumber);
        if(!array_diff($remains, $this->row2))
            $rule2 = true;
        return $rule2;
    }


    # 2 numbers in row1 appears 3x and numbers in row2 must be in remaining draw number
    public function group20()
    {
        $rule1 = false; 
        $rule2 = false;
        $duplicatedValue = [];
        foreach($this->row1 as $value)
        {
            $duplicates = $this->countDuplicates($value, $this->drawNumber);
            if($duplicates == 3){
                $rule1 = true;
                array_push($value);
                break;
            }
        }
        if(!$rule1)
            return false;
        $remains = array_diff($duplicatedValue, $this->drawNumber);
        if(!array_diff($remains, $this->row2))
            $rule2 = true;
        return $rule2;
    }

    public function group10()
    {
        $rule1 = false; 
        $rule2 = false;
        $duplicatedValue = [];
        foreach($this->row1 as $value)
        {
            $duplicates = $this->countDuplicates($value, $this->drawNumber);
            if($duplicates == 3){
                $rule1 = true;
                array_push($value);
                break;
            }
        }
        if(!$rule1)
            return false;
        $remains = array_diff($duplicatedValue, $this->drawNumber);
        if(!array_diff($remains, $this->row2) && ($remains[0] == $remains[1]))
            $rule2 = true;
        return $rule2;
    }

    public function group5()
    {
        $rule1 = false; 
        $rule2 = false;
        $duplicatedValue = [];
        foreach($this->row1 as $value)
        {
            $duplicates = $this->countDuplicates($value, $this->drawNumber);
            if($duplicates == 4){
                $rule1 = true;
                array_push($value);
                break;
            }
        }
        if(!$rule1)
            return false;
        $remains = array_diff($duplicatedValue, $this->drawNumber);
        if(!array_diff($remains, $this->row2))
            $rule2 = true;
        return $rule2;
    }

    public function allFiveJoint()
    {
        for($i=0;$i<5;$i++)
            if(!in_array($this->drawNumber[0], $this->{"row$i"}))
                return false;
        return true;
    }

    public function allFiveCombo()
    {
        $wins = 0;
        for($i=5;$i>0;$i--)
            if(!in_array($this->drawNumber[0], $this->{"row$i"}))
                return $wins;
            else
                ++$wins;
        return $wins;
    }

}


$row1 = [0,2,3,8,9];
$drawNumber = [9,8,0,2,3];
$checkWin = new Royal5($drawNumber, $row1);

$win = $checkWin->group120();
var_dump($win);