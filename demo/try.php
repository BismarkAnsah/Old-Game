<head>
  <meta charset="utf-8">
  <title>Layout</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="This is meta description">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Hugo 0.74.3" />
  <!-- plugins -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css" media="screen">
  <link rel="stylesheet" href="css/timeTo.css">
  <!--Favicon-->

  <link rel="stylesheet" href="hover.css">
  <meta property="og:title" content="Reader | Hugo Personal Blog Template" />
  <meta property="og:description" content="This is meta description" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00" />

  <!--box icons library-->
  <!-- <link rel="stylesheet" href="demo/boxicons/boxicons.css"> -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <style>
    /**toggle begin */

    .toggle {
      display: none;
      --width: 80px;
      --height: calc(var(--width) / 3);

      position: relative;
      display: inline-block;
      width: var(--width);
      height: var(--height);
      box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
      border-radius: var(--height);
      cursor: pointer;
    }

    .toggle input {
      display: none;
    }

    .toggle .slider {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border-radius: var(--height);
      background-color: #2196F3;
      transition: all 0.4s ease-in-out;
    }

    .toggle .slider::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: calc(var(--height));
      height: calc(var(--height));
      border-radius: calc(var(--height) / 2);
      background-color: #fff;
      box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
      transition: all 0.4s ease-in-out;
    }

    .toggle input:checked+.slider {
      background-color: #2196F3;
    }

    .toggle input:checked+.slider::before {
      transform: translateX(calc(var(--width) - var(--height)));
    }

    .toggle .labels {
      position: absolute;
      top: 8px;
      left: 0;
      width: 100%;
      height: 100%;
      font-size: 12px;
      font-family: sans-serif;
      transition: all 0.4s ease-in-out;
    }

    .toggle .labels::after {
      content: attr(data-multiplier);
      position: absolute;
      right: 10px;
      bottom: 10px;
      color: #ffffff;
      opacity: 1;
      text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.4);
      transition: all 0.4s ease-in-out;
    }

    .toggle .labels::before {
      content: attr(data-amount);
      position: absolute;
      left: 10px;
      bottom: 10px;
      color: #ffffff;
      opacity: 0;
      text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.4);
      transition: all 0.4s ease-in-out;
    }

    .toggle input:checked~.labels::after {
      opacity: 0;
    }

    .toggle input:checked~.labels::before {
      opacity: 1;
    }

    .spinner {
      position: absolute;
      right: 2.5cm;
      margin-top: 5px;
      color: #875FDF;
      display: none;
    }

    /**toggle end */
    #cart-submit {

      width: 20%;
      margin-left: 40%;
      margin-right: 20%;
      display: none;
    }

    .del {
      font-size: 20px;
      cursor: pointer;
    }

    .clear-cart {
      display: none;
    }

    .numbers {
      margin-bottom: 10px;
    }

    .pmoney {
      border-radius: 0;

    }

    .user-balance{
      font-size: large;
      font-weight: bolder;
      color:red;
    }
    .cart,
    .cart:enabled:hover {
      background-color: #7C65D8;
      color: #fff;
    }

    .bet-now,
    .bet-now:enabled:hover {
      background-color: #FF5111;
      color: #fff;
    }

    .code {
      display: block;
      height: 37px;
      width: 37px;
      margin: 6.5px;
      border-radius: 50%;
      border: none;
      box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    }

    .code:hover {
      border: solid 6px #875FDF;
    }

    .money-bg:hover {
      color: #fff;
    }

    ::-webkit-scrollbar {
      width: 6px;
      border-left: 1px solid #E6ECF8;
    }

    ::-webkit-scrollbar-thumb {
      background-color: #d6872c;
    }

    /* Grow */
    .hvr-grow {
      display: inline-block;
      vertical-align: middle;
      transform: translateZ(0);
      box-shadow: 0 0 1px rgba(0, 0, 0, 0);
      backface-visibility: hidden;
      -moz-osx-font-smoothing: grayscale;
      transition-duration: 0.3s;
      transition-property: transform;
    }

    .hvr-grow:hover,
    .hvr-grow:focus,
    .hvr-grow:active {
      transform: scale(1.1);
    }

    .number-diy .data ._number {
      /* border:solid 1px #bbb; */
      float: left;
      height: 26px;
      width: 26px;
      margin-right: 10px;
      background: red;
      /* border:solid 1px white; */

    }

    .number-diy .data ._number span {
      background: white;
      -webkit-background-clip: text;
      color: transparent !important;
      text-align: center;
    }

    .data {
      height: 60px;

    }

    .rows {
      position: relative;
      left: 20px
    }

    .codec {
      box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
      height: 35px;
      margin-right: 5px;
      font-size: 12px;
      border: thin;
      margin-top: 5px;
      border-radius: 5px;
    }

    .menu {
      box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
      height: 35px;
      margin-right: 5px;
      font-size: 16px;
      border: thin;
      margin: 5px;
      border-radius: 5px;
    }

    .game-group.menu {
      box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
      height: 35px;
      width: 80px;
      margin-right: 5px;
      font-size: 16px;
      border: thin;
      margin: 5px;
      border-radius: 5px;
    }

    .codec:hover {
      background-color: #875FDF;
      color: #fff;
    }

    .codex {
      margin-left: 15px;
      margin-right: 1px;
      border: none;
      background-color: transparent;
      font-size: 12px
    }

    .nums {
      position: relative;
      left: 30px;
    }

    /* ..... */

    .selectedAll {
      border: solid 6px #875FDF;
      background-color: #fff;
      transition: 0.3s;
    }

    .selectedOdd {
      border: solid 6px #875FDF;
      background-color: #fff;
      transition: 0.3s;
    }

    .selectedEven {
      border: solid 6px #875FDF;
      background-color: #fff;
      transition: 0.3s;
    }

    .selectedBig {
      border: solid 6px #875FDF;
      background-color: #fff;
      transition: 0.3s;
    }

    .selectedSmall {
      border: solid 6px #875FDF;
      background-color: #fff;
      transition: 0.3s;
    }

    .default {
      border: solid 6px #875FDF;
      background-color: #fff;
      transition: 0.3s;
    }

    .coins {
      border: solid 1px #eee;
      outline: none !important;
      outline: 0;
      box-shadow: none !important;
    }

    .money-bg {
      background-color: #875FDF;
      color: #FFF;
    }



    .btnx {
      margin: 3px;
    }

    .addCoinsBg {
      margin: 3px;
    }

    .btnn {
      display: block;
      height: 100px;
      width: 100px;
      border-radius: 50%;
      border: 1px solid red;
    }

    .imggame {
      display: block;
      height: 110px;
      width: 110px;
      border-radius: 50%;
      border: 5px solid #5548A2;
      box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    }

    .wining_num {
      display: block;
      height: 50px;
      width: 50px;
      font-size: 25px;
      position: relative;
      top: 15px;
      margin: 6px;
      border-radius: 50%;
      border: none;
      box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    }


    .demo div span {
      color: #FFFFFF;
    }

    span.total-bets,
    span.unit-amt,
    span.actual-amt {
      color: red;
    }
  </style>
</head>
<div id="group_combo" style="border:solid 5px green">     
<div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;border:solid 5px red">
        
        <div class="group_combo" style="position:relative;top:-20px;">
      <br>
      &nbsp;
    
      <div class="rows row">
      <button class="codex">1st</button>
      <?php
        for($x = 0; $x < 10; $x++){
          ?>
            <button class="x11 code d min num hvr-pop"><b><?=$x?></b></button>
          <?php
        }
      ?>
      <div class="nums">
      <button class="cb1 codec">All</button>
      <button class="cb2 codec">Big</button>
      <button class="cb3 codec">Small</button>
      <button class="cb4 codec">Odd</button>
      <button class="cb5 codec">Even</button>
      <button class="cb6 codec">Clear</button>
      </div>
      </div>
      <br>

      
    </div>
  </div>
<p></p>
<div class="group_combo" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;border:solid 5px red">
        
        <div class="row">
          <div class="col-sm">
          <!--dropdown 1-->
            <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border:solid 1px #eee">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">draw numbre 1</a>
          <a class="dropdown-item" href="#">draw numbre 2</a>
          <a class="dropdown-item" href="#">draw numbre 3</a>
        </div>
      </div>


          </div>
          <div class="col-sm">
          <div class="btn-group mr-2" role="group" aria-label="First group">
          <button type="button" class="btn coins">2</button>
          <button type="button" class="btn coins">1</button>
          <button type="button" class="btn coins">0.2</button>
          <button type="button" class="btn coins">0.1</button>
          <button type="button" class="btn coins">0.02</button>
          <button type="button" class="btn coins">0.01</button>
          <button type="button" class="btn coins">0.002</button>
          <button type="button" class="btn coins">0.001</button>
          </div>
          <p></p>
          <div class="btn-group mr-2" role="group" aria-label="First group">
          <button type="button" class="btn coins">x1</button>
          <button type="button" class="btn coins">x5</button>
          <button type="button" class="btn coins">x10</button>
          <button type="button" class="btn coins">x20</button>
          <button type="button" class="btn coins">x30</button>
          <button type="button" class="btn coins">x40</button>
          <button type="button" class="btn coins">x50</button>
          <button type="button" class="btn coins">x100</button>
          </div>
          </div>
          <div class="col-sm">
          <!---->
          <div class="btn-group mr-2" role="group" aria-label="First group">
          Bet Amt.<input type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
          </div>
          <p></p>
          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group"  style="width:120px;position:relative;left:15px">
          <button type="button" class="btn coins">-</button>
          <button type="button" class="btn coins">1</button>
          <button type="button" class="btn coins">+</button>
          </div>

          </div>
        </div>
      <!--bet amount and buttons-->
        <div style="padding:10px">
        <span class="bets">At least <b>5</b> No.</span>    <span>Total: <b class="total">0</b></span>  
        </div>

        <div class="row d-flex justify-content-end" style="margin-right:20px;">
        <button type="button" class="btn btn-outline-secondary btnx">Add to cart</button>
        <button type="button" class="btn btn-outline-secondary btnx">Track</button>
        <button type="button" class="btn btn-outline-secondary btnx">Bet now</button>
        </div>

        </div><!--end of bet amount buttons-->
<p></p>
<div class="group_combo" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;border:solid 5px red">
        
        <div class="table-responsive">

        <div class="container card shadow d-flex justify-content-center mt-5">
            <!-- nav options -->
            <ul class="nav nav-pills mb-3 shadow-sm" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Example 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Example 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Example 3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Example 4</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Example 5</a>
              </li>
            </ul>

            <!-- content -->
            <div class="tab-content" id="pills-tabContent p-3">
              <!-- 1st card -->
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            
                <ul class="ccontent">
                  <li>
                    <div class="wrapp">
                      <div>login attempts</div>
                    </div>
                  </li>
                </ul>

              </div>
              <!-- 2nd card -->
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                
              <ul class="ccontent">
                  <li>
                    <div class="wrapp">
                      <div>login attempts</div>
                    </div>
                  </li>
                </ul>

              </div>
              <!-- 3nd card -->
              <div class="tab-pane fade third" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                
              <ul class="ccontent">
                  <li>
                    <div class="wrapp">
                      <div>Values</div>
                    </div>
                  </li>
                </ul>

              </div>
            </div>
          </div>
        
        </div>

        </div><!--table-->
</div> 