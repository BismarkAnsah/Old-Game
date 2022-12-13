<table class="table table-striped table-bordered" style="padding:30px">
<thead>
  <tr>
    <td>ID</td>
    <td>GameGroup</td>
    <td>GameID</td>
    <td>GameDate</td>
    <td>GameTime</td>
    <td>DrawNumber</td>
    <td>Status</td>
    </tr>
    </thead>

<?php
include "connect.php";
$result = mysqli_query($con,"SELECT * FROM draws ORDER BY id DESC LIMIT 1");
$count = 0;
while ($row = mysqli_fetch_array($result)){
    $count++;
    $gameGroup = $row['game_group'];
    $gameid = $row['game_id'];
    $gamedate = $row['draw_date'];
    $gametime = $row['draw_time'];
    $gamenumber = $row['draw_number'];
    $gamestatus = $row['draw_status'];
  
    echo "<tr>";
    echo "<td>$count</td> <td>$gameGroup</td> <td>$gameid</td> <td>$gamedate</td> <td>$gametime</td>  <td>$gamenumber</td>  <td>$gamestatus</td> ";
    echo "<tr>";
  
  }

?>

</table>