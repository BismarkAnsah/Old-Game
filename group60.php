<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css"  />
<style>
 .button {

  height: 55px;
  width: 55px;
  border-radius: 50%;
  cursor:pointer;
  margin: 4px;
  border:none;
  /* box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px; */
  box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
}
.btns-color
{
   border: solid 8px #674DBC;
}
.button:hover{
    border:solid 8px #674DBC;
}

b{
 font-size:25px;
}



</style>
<br><br><br><br><br>

<center>

<div class="card" style="width: 45rem;">
  <div class="card-body" style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
 <div class="row">
  <input type="hidden" class="row60" value="row1" disabled>
  <?php
 for($x = 0; $x <= 9; $x++){
    ?>
      <button class="button btns-row1 hvr-grow"><b><?=$x?></b></button>
    <?php
 }
 ?>
 </div>

 <div class="row row">
 <input type="hidden" class="row60" value="row2" disabled>
  
 <?php
 for($x = 0; $x <= 9; $x++){
    ?>
      <button class="button btns-row2 hvr-grow"><b><?=$x?></b></button>
    <?php
 }
 ?>
 
 
 </div>
 <hr>

 <div>
    <p style="font-size:18px">
    Total Bets:<span class="bets" style="font-size:20px">0</span>
    </p>
  
    <p>
       <span><button class="submit">Submit Bet</button></span>
       <span><button class="clear">Clear All</button></span>
       <span><button class="all">Select All</button></span>    
       <span><button class="even">Select Even</button></span> 
       <span><button class="odd">Select Odd</button></span> 
       <span><button class="big">Select Big</button></span> 
       <span><button class="sm">Select Small</button></span> 
    </p>
 </div>

  </div>
</div>

</center>

<script type = "module" src="js/group60.js"></script>