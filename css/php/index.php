<?php
    // function curl($url) {
    //     $ch = curl_init();  
    //     curl_setopt($ch, CURLOPT_URL, $url); 
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    //     $data = curl_exec($ch);
    //     curl_close($ch);    
    //     return $data;  
    // }
    // $data = curl("http://1kball.com/draw_time/hnnf/1");
    
    $c = curl_init("https://google.com");
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);


$html = curl_exec($c);

if (curl_error($c))
    die(curl_error($c));


$status = curl_getinfo($c, CURLINFO_HTTP_CODE);

curl_close($c);
echo $html;
?>
