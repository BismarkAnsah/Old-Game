<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css"  />
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
.on
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
      $even = $x%2 == 0 ?'even':'';
      $odd  = $x%2 == 1 ?'odd':'';
      $big = $x>=5 ?'big':'';
      $small = $x<5 ? 'small':''
    ?>
      
      <button class="button group5 row1 <?php echo "$even $odd $big $small";?> hvr-grow"><b><?=$x?></b></button>
    <?php
 }
 ?>
 </div>

 <div class="row row">
 <input type="hidden" class="row60" value="row2" disabled>
  
 <?php
 for($x = 0; $x <= 9; $x++){
      $even = $x%2 == 0 ?'even':'';
      $odd  = $x%2 == 1 ?'odd':'';
      $big = $x>=5 ?'big':'';
      $small = $x<5 ? 'small':''
    ?>
      
      <button class="button group5 row2 <?php echo "$even $odd $big $small";?> hvr-grow"><b><?=$x?></b></button>
    <?php
 }
 ?>
 
 
 </div>
 <hr>

 <div>
    <p style="font-size:18px">
    Total Bets:<span class="totalBets" style="font-size:20px">0</span>
    </p>
  
    <p>
       <span><button class="clearBtn row1">Clear All</button></span>
       <span><button class="selectAllBtn row1">Select All</button></span>    
       <span><button class="selectEvenBtn row1">Select Even</button></span> 
       <span><button class="selectOddBtn row1">Select Odd</button></span> 
       <span><button class="selectBigBtn row1">Select Big</button></span> 
       <span><button class="selectSmallBtn row1">Select Small</button></span> 
    </p>
    <p>
       <span><button class="submitBtn">Submit Bet</button></span>
       <span><button class="clearBtn row2">Clear All</button></span>
       <span><button class="selectAllBtn row2">Select All</button></span>    
       <span><button class="selectEvenBtn row2">Select Even</button></span> 
       <span><button class="selectOddBtn row2">Select Odd</button></span> 
       <span><button class="selectBigBtn row2">Select Big</button></span> 
       <span><button class="selectSmallBtn row2">Select Small</button></span> 
    </p>
 </div>

  </div>
</div>

</center>

<script type = "module" src="js/group10.js"></script>