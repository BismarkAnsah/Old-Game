<?php
$file = new SplFileObject("test.txt");
$i = 0;
// $pattern = '/[0-9]+px/';
$pattern = '/[0-9]*.[0-9]+px/';

while(!$file->eof())
  {
    
    $str =  $file->fgets()."<br/>";
    if(preg_match($pattern, $str)):
        $i++;
    // echo $str;
    // echo "<br/>";
    // echo "<br/>";
    $startPos =  strpos($str, ":");
    $match = substr($str, $startPos);
    $replace = round(intval(substr($str, $startPos+1))/3).'px';
    // echo($str);
    echo preg_replace($pattern, $replace, $str);
    echo "<br/>";
    // echo "<br/>";
    // // break;
    else:
        echo $str;
    endif;

  }
echo $i;
$file = null;
// echo intval('    200px');