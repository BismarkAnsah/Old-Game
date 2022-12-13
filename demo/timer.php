<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>demo timer</title>
  <link rel="stylesheet" href="css/timeTo.css">
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
 
</head>
<body>

<div style="">
<div id="demo"></div>
</div>
<div class="result">
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
$result = mysqli_query($con, "SELECT * FROM draws ORDER by id DESC");
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
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/jquery.time-to.js"></script>
<script>

  $(()=>{

    let timer;
    let counter = 0;
    let draw;
    let timeKept = [];

    $('#countdown').timeTo(100, function(){ alert('Countdown finished'); }); 
    

    timer = localStorage.getItem("timer",timer);

    function thetimer(){
      counter++;

   
      draw =  Math.floor(00000 + Math.random() * 99999);
      draw.length = 5;
      
      $('#demo').timeTo(10, thetimer);
      timer = 10;
      localStorage.setItem("timer",timer);
      //$(".draw").text(draw);
      console.log("ID:"+ counter + " Draw Numer: " + draw);

     //push to database
     $.post("add_draw.php",{
      draw : draw
     },function(data){
        $.post("getGame.php",function(data){
            $(".result").html(data);
        })
     })


    }

    $('#demo').timeTo(10, thetimer);

  })

</script>
</body>
</html>