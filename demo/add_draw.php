<?php
include "connect.php";
$draw = $_POST['draw'];
$draw  = implode(",",array_map('intval', str_split($draw)));

// init some parameteres
$game_group = "Royal 5";
$game_name = "game120";
$game_date = date("F d, Y");
$game_time = date("H:i:s a");
$game_status = "Done";

mysqli_query($con, "INSERT INTO draws(
game_group,
game_id,
draw_date,
draw_time,
draw_count,
draw_number,
draw_status

)VALUES(
    '$game_group',
    '$game_name',
    '$game_date',
    '$game_time',
    '$game_status',
    '$draw',
    '$game_status'

)");

echo "1 draw inserted ok";

