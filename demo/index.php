<!DOCTYPE html>

<html lang="en-us">

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
  <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"> </script>
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

<body>
  <!-- navigation -->
  <header class="navigation fixed-top card" style="height:50px;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-white">

        <div class="order-2 order-lg-3 d-flex align-items-center">

        </div>

      </nav>
    </div>
  </header>
  <!-- /navigation -->





  <!-- end of banner -->
  <br>
  <br>
  <section class="section-sm">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-11  mb-5 ml-10">

          <article class="card mb-6" style="margin-left:20px;background-color:#EFEFEF">
            <div class="mb-0" style="margin-bottom:5px;padding:20px;height:150px;background-color:rgb(104,72,188);border-top-left-radius:10px;border-top-right-radius:10px;">

              <div class="row">
                <div class="col-sm">
                  <div>
                    <img src="images/author.jpg" class="imggame">
                  </div>
                </div>
                <div class="col-sm">
                  <div style="width:80%;height:80px;background-color:#4E338D;padding:20px;">
                    <div id="demo"></div>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="row">
                    <?php
                    for ($x = 0; $x <= 4; $x++) {
                    ?>
                      <button class="wining_num d min num hvr-pop"><b>0</b></button>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              </div>

            </div>
            <div style="height:70px;background-color:#5548A2;padding:10px;">
              <button class="menu game-group money-bg" data-points-to="all5">All 5</button>
              <button class="menu game-group" disabled data-points-to="all4">All 4</button>
              <button class="menu game-group" data-points-to="first3">First 3</button>
              <button class="menu game-group" data-points-to="mid3">Mid 3</button>
              <button class="menu game-group" data-points-to="last3">Last 3</button>
            </div>

            <div class="game-nav all5" style="display:block;height:150px;background-color:#E6E1FF;padding:20px">
              <div class="row" style="margin-left:10px;">
                <span class=" btn-sm game-name option"><b>Straight:</b></span>
                <button class="menu  game-name option1 money-bg" data-className="a5_joint" data-points-to="a5-joint" data-game-group="all5">All 5 Straight(Joint)</button>
                <button class="menu  game-name option2" data-className="a5_manual" data-points-to="a5-manual" data-game-group="all5">All 5 Straight(Manual)</button>
                <button class="menu  game-name option3" data-className="a5_combo" data-points-to="a5-combo" data-game-group="all5">All 5 Straight(Combo)</button>
                <span class=" btn-sm game-name option"></span>
              </div>
              <div class="row" style="margin-left:10px;">
                <span class=" btn-sm option"><b>Group:</b></span>
                <button class="menu game-name option4" data-className="a5_g120" data-points-to="a5-g120" data-game-group="all5">All 5 Group 120</button>
                <button class="menu game-name option5" data-className="a5_g60" data-points-to="a5-g60" data-game-group="all5">All 5 Group 60</button>
                <button class="menu game-name option6" data-className="a5_g30" data-points-to="a5-g30" data-game-group="all5">All 5 Group 30</button>
                <button class="menu game-name option7" data-className="a5_g20" data-points-to="a5-g20" data-game-group="all5">All 5 Group 20</button>
                <button class="menu game-name option8" data-className="a5_g10" data-points-to="a5-g10" data-game-group="all5">All 5 Group 10</button>
                <button class="menu game-name option9" data-className="a5_g5" data-points-to="a5-g5" data-game-group="all5">All 5 Group 5</button>
              </div>
            </div>
            <div class="game-nav all4" style="display:none;height:250px;background-color:#E6E1FF;padding:20px">
              <div class="row" style="margin-left:10px;">
                <span class=" btn-sm game-name option"><b>Straight:</b></span>
                <button class="menu  game-name option1 money-bg" data-className="f4_joint" data-points-to="f4-joint" data-game-group="all4">First 4 Straight(Joint)</button>
                <button class="menu  game-name option2" data-className="f4_manual" data-points-to="f4-manual" data-game-group="all4">First 4 Straight(Manual)</button>
                <button class="menu  game-name option3" data-className="f4_combo" data-points-to="f4-combo" data-game-group="all4">First 4 Straight(Combo)</button>
                <span class=" btn-sm game-name option"></span>
              </div>
              <div class="row" style="margin-left:10px;">
                <span class=" btn-sm option"><b>Group:</b></span>

                <button class="menu game-name option5" data-className="f4_g24" data-points-to="f4-g24" data-game-group="all4">First 4 Group 24</button>
                <button class="menu game-name option6" data-className="f4_g12" data-points-to="f4-g12" data-game-group="all4">First 4 Group 12</button>
                <button class="menu game-name option7" data-className="f4_g6" data-points-to="f4-g6" data-game-group="all4">First 4 Group 6</button>
                <button class="menu game-name option8" data-className="f4_g4" data-points-to="f4-g4" data-game-group="all4">First 4 Group 4</button>
              </div>
              <br>
              <div class="row" style="margin-left:10px;">
                <span class=" btn-sm game-name option"><b>Straight:</b></span>
                <button class="menu  game-name option1" data-className="l4_joint" data-points-to="l4-joint" data-game-group="all4">last 4 Straight(Joint)</button>
                <button class="menu  game-name option2" data-className="l4_manual" data-points-to="l4-manual" data-game-group="all4">last 4 Straight(Manual)</button>
                <button class="menu  game-name option3" data-className="l4_combo" data-points-to="l4-combo" data-game-group="all4">last 4 Straight(Combo)</button>
                <span class=" btn-sm game-name option"></span>
              </div>
              <div class="row" style="margin-left:10px;">
                <span class=" btn-sm option"><b>Group:</b></span>
                <button class="menu game-name option5" data-className="l4_g24" data-points-to="l4-g24" data-game-group="all4">last 4 Group 24</button>
                <button class="menu game-name option6" data-className="l4_g12" data-points-to="l4-g12" data-game-group="all4">last 4 Group 12</button>
                <button class="menu game-name option7" data-className="l4_g6" data-points-to="l4-g6" data-game-group="all4">last 4 Group 6</button>
                <button class="menu game-name option8" data-className="l4_g4" data-points-to="l4-g4" data-game-group="all4">last 4 Group 4</button>
              </div>
            </div>
            <div style="height:50px;background-color:#FFF;box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;"></div>


            <div class="card-body">

              <div id="all5" class="game-group page">
                <div class="mb-3 main">

                  <!--All5-joint-->
                  <div id="a5-joint" class="game all5" style="display:block">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="group-joint" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <button class="codex">1st</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x1 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="fr1 codec all-btn">All</button>
                            <button class="fr2 codec big-btn">Big</button>
                            <button class="fr3 codec small-btn">Small</button>
                            <button class="fr4 codec odd-btn">Odd</button>
                            <button class="fr5 codec even-btn">Even</button>
                            <button class="fr6 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">2nd</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x2 code d min num hvr-pop row2"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row2">
                            <button class="fr11 codec all-btn all-btn">All</button>
                            <button class="fr22 codec big-btn">Big</button>
                            <button class="fr33 codec small-btn">Small</button>
                            <button class="fr44 codec odd-btn">Odd</button>
                            <button class="fr55 codec even-btn">Even</button>
                            <button class="fr66 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">3rd</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x3 code d min num hvr-pop row3"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row3">
                            <button class="fr111 codec all-btn all-btn">All</button>
                            <button class="fr222 codec big-btn">Big</button>
                            <button class="fr333 codec small-btn">Small</button>
                            <button class="fr444 codec odd-btn">Odd</button>
                            <button class="fr555 codec even-btn">Even</button>
                            <button class="fr666 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">4th</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x4 code d min num hvr-pop row4"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row4">
                            <button class="fr1111 codec all-btn all-btn">All</button>
                            <button class="fr2222 codec big-btn">Big</button>
                            <button class="fr3333 codec small-btn">Small</button>
                            <button class="fr4444 codec odd-btn">Odd</button>
                            <button class="fr5555 codec even-btn">Even</button>
                            <button class="fr6666 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">5th</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x5 code d min num hvr-pop row5"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row5">
                            <button class="fr11111 codec all-btn">All</button>
                            <button class="fr22222 codec big-btn">Big</button>
                            <button class="fr33333 codec small-btn">Small</button>
                            <button class="fr44444 codec odd-btn">Odd</button>
                            <button class="fr55555 codec even-btn">Even</button>
                            <button class="fr66666 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                      </div>
                    </div>
                    <p></p>
                    <div class="group-joint" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="row">
                        <div class="col-sm">
                          <!--toggle-->
                          <label class="toggle">
                            <input type="checkbox">
                            <span class="slider"></span>
                            <span class="labels" data-amount="Amt." data-multiplier="Mult."></span>
                          </label>


                        </div>
                        <div class="col-sm">
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>
                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">At least <b>1</b> No. every place</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>



                  <!--All5-manual-->
                  <div id="a5-manual" class="game all5" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="group-manual" class="all5" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="row d-flex justify-content-center" style="padding:20px">

                          <textarea class="bet-box" style="height:200px;border:solid 1px #eee;width:95%;padding:20px;outline:none;" placeholder="Enter your bet manually here&#10;Example is as below. Separate your bet with semi colon (;)&#10;0,1,2,3,4;   0,4,5,6,2;   0,2,5,6,1;   0,1,3,4,2;"></textarea>

                        </div>

                      </div>
                    </div>
                    <p></p>
                    <div class="group-manual" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>


                  <!--All5-combo-->
                  <div id="a5-combo" class="game all5" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="group-combo" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <button class="codex">1st</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x11 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="cb1 codec all-btn">All</button>
                            <button class="cb2 codec big-btn">Big</button>
                            <button class="cb3 codec small-btn">Small</button>
                            <button class="cb4 codec odd-btn">Odd</button>
                            <button class="cb5 codec even-btn">Even</button>
                            <button class="cb6 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">2nd</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x22 code d min num hvr-pop row2"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row2">
                            <button class="cb11 codec all-btn">All</button>
                            <button class="cb22 codec big-btn">Big</button>
                            <button class="cb33 codec small-btn">Small</button>
                            <button class="cb44 codec odd-btn">Odd</button>
                            <button class="cb55 codec even-btn">Even</button>
                            <button class="cb66 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">3rd</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x33 code d min num hvr-pop row3"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row3">
                            <button class="cb111 codec all-btn">All</button>
                            <button class="cb222 codec big-btn">Big</button>
                            <button class="cb333 codec small-btn">Small</button>
                            <button class="cb444 codec odd-btn">Odd</button>
                            <button class="cb555 codec even-btn">Even</button>
                            <button class="cb666 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">4th</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x44 code d min num hvr-pop row4"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row4">
                            <button class="cb1111 codec all-btn">All</button>
                            <button class="cb2222 codec big-btn">Big</button>
                            <button class="cb3333 codec small-btn">Small</button>
                            <button class="cb4444 codec odd-btn">Odd</button>
                            <button class="cb5555 codec even-btn">Even</button>
                            <button class="cb6666 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">5th</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x55 code d min num hvr-pop row5"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row5">
                            <button class="cb11111 codec all-btn">All</button>
                            <button class="cb22222 codec big-btn">Big</button>
                            <button class="cb33333 codec small-btn">Small</button>
                            <button class="cb44444 codec odd-btn">Odd</button>
                            <button class="cb55555 codec even-btn">Even</button>
                            <button class="cb66666 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                      </div>
                    </div class>
                    <p></p>
                    <div class="group-combo" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">At least <b>1</b> No. every place</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>


                  <!--All5-group120-->
                  <div id="a5-g120" class="game all5" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="g120" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <button hidden class="codex">One Pair</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group60 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="g1201 codec all-btn">All</button>
                            <button class="g1202 codec big-btn">Big</button>
                            <button class="g1203 codec small-btn">Small</button>
                            <button class="g1204 codec odd-btn">Odd</button>
                            <button class="g1205 codec even-btn">Even</button>
                            <button class="g1206 codec clear-btn">Clear</button>
                          </div>
                        </div>

                      </div>
                    </div>
                    <p></p>
                    <div class="g120" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">At least <b>5</b> No.</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>


                  <!--All5-group60-->
                  <div id="a5-g60" class="game all5" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="g60" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <button class="codex">One Pair</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group60 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="g601 codec all-btn">All</button>
                            <button class="g602 codec big-btn">Big</button>
                            <button class="g603 codec small-btn">Small</button>
                            <button class="g604 codec odd-btn">Odd</button>
                            <button class="g605 codec even-btn">Even</button>
                            <button class="g606 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>
                        <div class="rows row">
                          <button class="codex">One No.</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group601 code d min num hvr-pop row2"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row2">
                            <button class="g6011 codec all-btn">All</button>
                            <button class="g6022 codec big-btn">Big</button>
                            <button class="g6033 codec small-btn">Small</button>
                            <button class="g6044 codec odd-btn">Odd</button>
                            <button class="g6055 codec even-btn">Even</button>
                            <button class="g6066 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                      </div>
                    </div>
                    <p></p>
                    <div class="g60" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
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
                          <div class="btn-group mr-2 select-amt" role="group" aria-label="First group">
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2 select-multiplier" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">One Pair at least <b>1</b> No. <br> One No. at least <b>3</b> No.</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>


                  <!--All5-group30-->
                  <div id="a5-g30" class="game all5" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="g60" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <button class="codex">One Pair</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group30 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="g301 codec all-btn">All</button>
                            <button class="g302 codec big-btn">Big</button>
                            <button class="g303 codec small-btn">Small</button>
                            <button class="g304 codec odd-btn">Odd</button>
                            <button class="g305 codec even-btn">Even</button>
                            <button class="g306 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>
                        <div class="rows row">
                          <button class="codex">One No.</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group301 code d min num hvr-pop row2"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row2">
                            <button class="g3011 codec all-btn">All</button>
                            <button class="g3022 codec big-btn">Big</button>
                            <button class="g3033 codec small-btn">Small</button>
                            <button class="g3044 codec odd-btn">Odd</button>
                            <button class="g3055 codec even-btn">Even</button>
                            <button class="g3066 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                      </div>
                    </div>
                    <p></p>
                    <div class="g30" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">One Pair at least <b>2</b> No. <br> One No. at least <b>1</b> No.</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>


                  <!--All5-group20-->
                  <div id="a5-g20" class="game all5" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="g20" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <button class="codex">Three of <br />a Kind</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group20 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="g201 codec all-btn">All</button>
                            <button class="g202 codec big-btn">Big</button>
                            <button class="g203 codec small-btn">Small</button>
                            <button class="g204 codec odd-btn">Odd</button>
                            <button class="g205 codec even-btn">Even</button>
                            <button class="g206 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>
                        <div class="rows row">
                          <button class="codex">One No.</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group201 code d min num hvr-pop row2"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row2">
                            <button class="g2011 codec all-btn">All</button>
                            <button class="g2022 codec big-btn">Big</button>
                            <button class="g2033 codec small-btn">Small</button>
                            <button class="g2044 codec odd-btn">Odd</button>
                            <button class="g2055 codec even-btn">Even</button>
                            <button class="g2066 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                      </div>
                    </div>
                    <p></p>
                    <div class="g20" style="display:none;padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">Three of a Kind at least <b>1</b> No. <br> One No. at least <b>2</b> No.</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>


                  <!--All5-group10-->
                  <div id="a5-g10" class="game all5" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="g10" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <button class="codex">Three of <br />a Kind</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group10 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="g101 codec all-btn">All</button>
                            <button class="g102 codec big-btn">Big</button>
                            <button class="g103 codec small-btn">Small</button>
                            <button class="g104 codec odd-btn">Odd</button>
                            <button class="g105 codec even-btn">Even</button>
                            <button class="g106 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>
                        <div class="rows row">
                          <button class="codex">One Pair</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group101 code d min num hvr-pop row2"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row2">
                            <button class="g1011 codec all-btn">All</button>
                            <button class="g1022 codec big-btn">Big</button>
                            <button class="g1033 codec small-btn">Small</button>
                            <button class="g1044 codec odd-btn">Odd</button>
                            <button class="g1055 codec even-btn">Even</button>
                            <button class="g1066 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                      </div>
                    </div>
                    <p></p>
                    <div class="g10" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">Three of a Kind, One Pair at least <b>1</b> No.</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>


                  <!--All5-group5-->
                  <div id="a5-g5" class="game all5" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
                      <div class="g5" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <button class="codex">Four of <br />a Kind</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group5 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="g51 codec all-btn">All</button>
                            <button class="g52 codec big-btn">Big</button>
                            <button class="g53 codec small-btn">Small</button>
                            <button class="g54 codec odd-btn">Odd</button>
                            <button class="g55 codec even-btn">Even</button>
                            <button class="g56 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>
                        <div class="rows row">
                          <button class="codex">One No.</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group51 code d min num hvr-pop row2"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row2">
                            <button class="g511 codec all-btn">All</button>
                            <button class="g522 codec big-btn">Big</button>
                            <button class="g533 codec small-btn">Small</button>
                            <button class="g544 codec odd-btn">Odd</button>
                            <button class="g555 codec even-btn">Even</button>
                            <button class="g566 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                      </div>
                    </div>
                    <p></p>
                    <div class="g5" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">Four of a Kind, One No. at least <b>1</b> No.</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>
                </div>
              </div>

              <div id="all4" class="game-group page" style="display:none">
                <div class="mb-3 main">

                  <!--first4-joint-->
                  <div id="f4-joint" class="game all4" style="display:block">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="f4-joint" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <button class="codex">1st</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x1 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="fr1 codec all-btn">All</button>
                            <button class="fr2 codec big-btn">Big</button>
                            <button class="fr3 codec small-btn">Small</button>
                            <button class="fr4 codec odd-btn">Odd</button>
                            <button class="fr5 codec even-btn">Even</button>
                            <button class="fr6 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">2nd</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x2 code d min num hvr-pop row2"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row2">
                            <button class="fr11 codec all-btn all-btn">All</button>
                            <button class="fr22 codec big-btn">Big</button>
                            <button class="fr33 codec small-btn">Small</button>
                            <button class="fr44 codec odd-btn">Odd</button>
                            <button class="fr55 codec even-btn">Even</button>
                            <button class="fr66 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">3rd</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x3 code d min num hvr-pop row3"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row3">
                            <button class="fr111 codec all-btn all-btn">All</button>
                            <button class="fr222 codec big-btn">Big</button>
                            <button class="fr333 codec small-btn">Small</button>
                            <button class="fr444 codec odd-btn">Odd</button>
                            <button class="fr555 codec even-btn">Even</button>
                            <button class="fr666 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">4th</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x4 code d min num hvr-pop row4"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row4">
                            <button class="fr1111 codec all-btn all-btn">All</button>
                            <button class="fr2222 codec big-btn">Big</button>
                            <button class="fr3333 codec small-btn">Small</button>
                            <button class="fr4444 codec odd-btn">Odd</button>
                            <button class="fr5555 codec even-btn">Even</button>
                            <button class="fr6666 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                      </div>
                    </div>
                    <p></p>
                    <div class="f4-joint" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>
                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">At least <b>1</b> No. every place</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>



                  <!--first4-manual-->
                  <div id="f4-manual" class="game all4" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="f4-manual" class="all4" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="row d-flex justify-content-center" style="padding:20px">

                          <textarea class="bet-box" style="height:200px;border:solid 1px #eee;width:95%;padding:20px;outline:none;" placeholder="Enter your bet manually here&#10;Example is as below. Separate your bet with semi colon (;)&#10;0,1,2,3,4;   0,4,5,6,2;   0,2,5,6,1;   0,1,3,4,2;"></textarea>

                        </div>

                      </div>
                    </div>
                    <p></p>
                    <div class="f4-manual" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>


                  <!--first4-combo-->
                  <div id="f4-combo" class="game all4" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="f4-combo" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <button class="codex">1st</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x11 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="cb1 codec all-btn">All</button>
                            <button class="cb2 codec big-btn">Big</button>
                            <button class="cb3 codec small-btn">Small</button>
                            <button class="cb4 codec odd-btn">Odd</button>
                            <button class="cb5 codec even-btn">Even</button>
                            <button class="cb6 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">2nd</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x22 code d min num hvr-pop row2"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row2">
                            <button class="cb11 codec all-btn">All</button>
                            <button class="cb22 codec big-btn">Big</button>
                            <button class="cb33 codec small-btn">Small</button>
                            <button class="cb44 codec odd-btn">Odd</button>
                            <button class="cb55 codec even-btn">Even</button>
                            <button class="cb66 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">3rd</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x33 code d min num hvr-pop row3"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row3">
                            <button class="cb111 codec all-btn">All</button>
                            <button class="cb222 codec big-btn">Big</button>
                            <button class="cb333 codec small-btn">Small</button>
                            <button class="cb444 codec odd-btn">Odd</button>
                            <button class="cb555 codec even-btn">Even</button>
                            <button class="cb666 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">4th</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x44 code d min num hvr-pop row4"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row4">
                            <button class="cb1111 codec all-btn">All</button>
                            <button class="cb2222 codec big-btn">Big</button>
                            <button class="cb3333 codec small-btn">Small</button>
                            <button class="cb4444 codec odd-btn">Odd</button>
                            <button class="cb5555 codec even-btn">Even</button>
                            <button class="cb6666 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>
                      </div>
                    </div class>
                    <p></p>
                    <div class="f4-combo" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">At least <b>1</b> No. every place</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>


                  <!--first4-group24-->
                  <div id="f4-g24" class="game all4" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="g24" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group60 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="g1201 codec all-btn">All</button>
                            <button class="g1202 codec big-btn">Big</button>
                            <button class="g1203 codec small-btn">Small</button>
                            <button class="g1204 codec odd-btn">Odd</button>
                            <button class="g1205 codec even-btn">Even</button>
                            <button class="g1206 codec clear-btn">Clear</button>
                          </div>
                        </div>

                      </div>
                    </div>
                    <p></p>
                    <div class="g120" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">At least <b>5</b> No.</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>


                  <!--first4-group12-->
                  <div id="f4-g12" class="game all4" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="g60" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <button class="codex">One Pair</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group60 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="g601 codec all-btn">All</button>
                            <button class="g602 codec big-btn">Big</button>
                            <button class="g603 codec small-btn">Small</button>
                            <button class="g604 codec odd-btn">Odd</button>
                            <button class="g605 codec even-btn">Even</button>
                            <button class="g606 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>
                        <div class="rows row">
                          <button class="codex">One No.</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group601 code d min num hvr-pop row2"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row2">
                            <button class="g6011 codec all-btn">All</button>
                            <button class="g6022 codec big-btn">Big</button>
                            <button class="g6033 codec small-btn">Small</button>
                            <button class="g6044 codec odd-btn">Odd</button>
                            <button class="g6055 codec even-btn">Even</button>
                            <button class="g6066 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                      </div>
                    </div>
                    <p></p>
                    <div class="g60" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
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
                          <div class="btn-group mr-2 select-amt" role="group" aria-label="First group">
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2 select-multiplier" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">One Pair at least <b>1</b> No. <br> One No. at least <b>3</b> No.</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>


                  <!--first4-group6-->
                  <div id="f4-g6" class="game all4" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="g24" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group60 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="g1201 codec all-btn">All</button>
                            <button class="g1202 codec big-btn">Big</button>
                            <button class="g1203 codec small-btn">Small</button>
                            <button class="g1204 codec odd-btn">Odd</button>
                            <button class="g1205 codec even-btn">Even</button>
                            <button class="g1206 codec clear-btn">Clear</button>
                          </div>
                        </div>

                      </div>
                    </div>
                    <p></p>
                    <div class="g120" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">At least <b>5</b> No.</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>


                  <!--first4-group4-->
                  <div id="f4-g4" class="game all4" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="g20" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <button class="codex">Three of <br />a Kind</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group20 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="g201 codec all-btn">All</button>
                            <button class="g202 codec big-btn">Big</button>
                            <button class="g203 codec small-btn">Small</button>
                            <button class="g204 codec odd-btn">Odd</button>
                            <button class="g205 codec even-btn">Even</button>
                            <button class="g206 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>
                        <div class="rows row">
                          <button class="codex">One No.</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group201 code d min num hvr-pop row2"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row2">
                            <button class="g2011 codec all-btn">All</button>
                            <button class="g2022 codec big-btn">Big</button>
                            <button class="g2033 codec small-btn">Small</button>
                            <button class="g2044 codec odd-btn">Odd</button>
                            <button class="g2055 codec even-btn">Even</button>
                            <button class="g2066 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                      </div>
                    </div>
                    <p></p>
                    <div class="g20" style="display:none;padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">Three of a Kind at least <b>1</b> No. <br> One No. at least <b>2</b> No.</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>

                  <!--last4-joint-->
                  <div id="l4-joint" class="game all4" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="l4-joint" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <button class="codex">1st</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x1 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="fr1 codec all-btn">All</button>
                            <button class="fr2 codec big-btn">Big</button>
                            <button class="fr3 codec small-btn">Small</button>
                            <button class="fr4 codec odd-btn">Odd</button>
                            <button class="fr5 codec even-btn">Even</button>
                            <button class="fr6 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">2nd</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x2 code d min num hvr-pop row2"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row2">
                            <button class="fr11 codec all-btn all-btn">All</button>
                            <button class="fr22 codec big-btn">Big</button>
                            <button class="fr33 codec small-btn">Small</button>
                            <button class="fr44 codec odd-btn">Odd</button>
                            <button class="fr55 codec even-btn">Even</button>
                            <button class="fr66 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">3rd</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x3 code d min num hvr-pop row3"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row3">
                            <button class="fr111 codec all-btn all-btn">All</button>
                            <button class="fr222 codec big-btn">Big</button>
                            <button class="fr333 codec small-btn">Small</button>
                            <button class="fr444 codec odd-btn">Odd</button>
                            <button class="fr555 codec even-btn">Even</button>
                            <button class="fr666 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">4th</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x4 code d min num hvr-pop row4"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row4">
                            <button class="fr1111 codec all-btn all-btn">All</button>
                            <button class="fr2222 codec big-btn">Big</button>
                            <button class="fr3333 codec small-btn">Small</button>
                            <button class="fr4444 codec odd-btn">Odd</button>
                            <button class="fr5555 codec even-btn">Even</button>
                            <button class="fr6666 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                      </div>
                    </div>
                    <p></p>
                    <div class="l4-joint" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>
                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">At least <b>1</b> No. every place</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>



                  <!--last4-manual-->
                  <div id="l4-manual" class="game all4" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="l4-manual" class="all4" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="row d-flex justify-content-center" style="padding:20px">

                          <textarea class="bet-box" style="height:200px;border:solid 1px #eee;width:95%;padding:20px;outline:none;" placeholder="Enter your bet manually here&#10;Example is as below. Separate your bet with semi colon (;)&#10;0,1,2,3,4;   0,4,5,6,2;   0,2,5,6,1;   0,1,3,4,2;"></textarea>

                        </div>

                      </div>
                    </div>
                    <p></p>
                    <div class="l4-manual" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>


                  <!--last4-combo-->
                  <div id="l4-combo" class="game all4" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="l4-combo" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <button class="codex">1st</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x11 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="cb1 codec all-btn">All</button>
                            <button class="cb2 codec big-btn">Big</button>
                            <button class="cb3 codec small-btn">Small</button>
                            <button class="cb4 codec odd-btn">Odd</button>
                            <button class="cb5 codec even-btn">Even</button>
                            <button class="cb6 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">2nd</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x22 code d min num hvr-pop row2"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row2">
                            <button class="cb11 codec all-btn">All</button>
                            <button class="cb22 codec big-btn">Big</button>
                            <button class="cb33 codec small-btn">Small</button>
                            <button class="cb44 codec odd-btn">Odd</button>
                            <button class="cb55 codec even-btn">Even</button>
                            <button class="cb66 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">3rd</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x33 code d min num hvr-pop row3"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row3">
                            <button class="cb111 codec all-btn">All</button>
                            <button class="cb222 codec big-btn">Big</button>
                            <button class="cb333 codec small-btn">Small</button>
                            <button class="cb444 codec odd-btn">Odd</button>
                            <button class="cb555 codec even-btn">Even</button>
                            <button class="cb666 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                        <div class="rows row">
                          <button class="codex">4th</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="x44 code d min num hvr-pop row4"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row4">
                            <button class="cb1111 codec all-btn">All</button>
                            <button class="cb2222 codec big-btn">Big</button>
                            <button class="cb3333 codec small-btn">Small</button>
                            <button class="cb4444 codec odd-btn">Odd</button>
                            <button class="cb5555 codec even-btn">Even</button>
                            <button class="cb6666 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>
                      </div>
                    </div class>
                    <p></p>
                    <div class="l4-combo" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">At least <b>1</b> No. every place</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>


                  <!--last4-group24-->
                  <div id="l4-g24" class="game all4" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="g24" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group60 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="g1201 codec all-btn">All</button>
                            <button class="g1202 codec big-btn">Big</button>
                            <button class="g1203 codec small-btn">Small</button>
                            <button class="g1204 codec odd-btn">Odd</button>
                            <button class="g1205 codec even-btn">Even</button>
                            <button class="g1206 codec clear-btn">Clear</button>
                          </div>
                        </div>

                      </div>
                    </div>
                    <p></p>
                    <div class="g120" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">At least <b>5</b> No.</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>


                  <!--last4-group12-->
                  <div id="l4-g12" class="game all4" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="g60" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <button class="codex">One Pair</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group60 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="g601 codec all-btn">All</button>
                            <button class="g602 codec big-btn">Big</button>
                            <button class="g603 codec small-btn">Small</button>
                            <button class="g604 codec odd-btn">Odd</button>
                            <button class="g605 codec even-btn">Even</button>
                            <button class="g606 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>
                        <div class="rows row">
                          <button class="codex">One No.</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group601 code d min num hvr-pop row2"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row2">
                            <button class="g6011 codec all-btn">All</button>
                            <button class="g6022 codec big-btn">Big</button>
                            <button class="g6033 codec small-btn">Small</button>
                            <button class="g6044 codec odd-btn">Odd</button>
                            <button class="g6055 codec even-btn">Even</button>
                            <button class="g6066 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                      </div>
                    </div>
                    <p></p>
                    <div class="g60" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
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
                          <div class="btn-group mr-2 select-amt" role="group" aria-label="First group">
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2 select-multiplier" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">One Pair at least <b>1</b> No. <br> One No. at least <b>3</b> No.</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>


                  <!--last4-group6-->
                  <div id="l4-g6" class="game all4" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="g24" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group60 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="g1201 codec all-btn">All</button>
                            <button class="g1202 codec big-btn">Big</button>
                            <button class="g1203 codec small-btn">Small</button>
                            <button class="g1204 codec odd-btn">Odd</button>
                            <button class="g1205 codec even-btn">Even</button>
                            <button class="g1206 codec clear-btn">Clear</button>
                          </div>
                        </div>

                      </div>
                    </div>
                    <p></p>
                    <div class="g120" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins multiplier-select money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">At least <b>5</b> No.</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>


                  <!--last4-group4-->
                  <div id="l4-g4" class="game all4" style="display:none">
                    <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                      <div class="g20" style="position:relative;top:-20px;">
                        <br>
                        &nbsp;

                        <div class="rows row">
                          <button class="codex">Three of <br />a Kind</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group20 code d min num hvr-pop row1"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row1">
                            <button class="g201 codec all-btn">All</button>
                            <button class="g202 codec big-btn">Big</button>
                            <button class="g203 codec small-btn">Small</button>
                            <button class="g204 codec odd-btn">Odd</button>
                            <button class="g205 codec even-btn">Even</button>
                            <button class="g206 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>
                        <div class="rows row">
                          <button class="codex">One No.</button>
                          <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class="group201 code d min num hvr-pop row2"><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                          <div class="nums" data-points-to="row2">
                            <button class="g2011 codec all-btn">All</button>
                            <button class="g2022 codec big-btn">Big</button>
                            <button class="g2033 codec small-btn">Small</button>
                            <button class="g2044 codec odd-btn">Odd</button>
                            <button class="g2055 codec even-btn">Even</button>
                            <button class="g2066 codec clear-btn">Clear</button>
                          </div>
                        </div>
                        <br>

                      </div>
                    </div>
                    <p></p>
                    <div class="g20" style="display:none;padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
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
                            <button type="button" class="btn coins unit-amt" value="2">2</button>
                            <button type="button" class="btn coins unit-amt money-bg" value="1">1</button>
                            <button type="button" class="btn coins unit-amt" value="0.2">0.2</button>
                            <button type="button" class="btn coins unit-amt" value="0.1">0.1</button>
                            <button type="button" class="btn coins unit-amt" value="0.02">0.02</button>
                            <button type="button" class="btn coins unit-amt" value="0.01">0.01</button>
                            <button type="button" class="btn coins unit-amt" value="0.002">0.002</button>
                            <button type="button" class="btn coins unit-amt" value="0.001">0.001</button>
                          </div>
                          <p></p>
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn coins money-bg" value="1">x1</button>
                            <button type="button" class="btn coins multiplier-select" value="5">x5</button>
                            <button type="button" class="btn coins multiplier-select" value="10">x10</button>
                            <button type="button" class="btn coins multiplier-select" value="20">x20</button>
                            <button type="button" class="btn coins multiplier-select" value="30">x30</button>
                            <button type="button" class="btn coins multiplier-select" value="40">x40</button>
                            <button type="button" class="btn coins multiplier-select" value="50">x50</button>
                            <button type="button" class="btn coins multiplier-select" value="100">x100</button>
                          </div>
                        </div>
                        <div class="col-sm">
                          <!---->
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                            Bet Amt.<input class="bet-amt" type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
                          </div>
                          <p></p>
                          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group" style="width:120px;position:relative;left:15px">
                            <button type="button" class="btn coins minus">-</button>
                            <input type="text" maxlength="4" size="3" class="btn coins multiplier-input" value="1">
                            <button type="button" class="btn coins plus">+</button>
                          </div>

                        </div>
                      </div>
                      <!--bet amount and buttons-->
                      <div style="padding:10px">
                        <div class="least-bet">Three of a Kind at least <b>1</b> No. <br> One No. at least <b>2</b> No.</div>
                        <div class="bet-info">Total Bets <span class="total-bets"> 21 </span> <br> Each bet &#8373;<span class="unit-amt">50.223</span><br> Actual betting &#8373;<span class="actual-amt">54</span></div>
                      </div>

                      <div class="row d-flex justify-content-end" style="margin-right:20px;">
                        <button type="button" class="btn btn-outline-secondary btnx cart" disabled>Add to cart</button>
                        <button type="button" class="btn btn-outline-secondary btnx track" disabled>Track</button>
                        <button type="button" class="btn btn-outline-secondary btnx bet-now" disabled>Bet now</button>
                      </div>

                    </div>
                    <!--end of bet amount buttons-->
                    <p></p>

                    <!--table-->
                  </div>

                </div>
              </div>



              <!--end of -->
              <div class="g120" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">

                <div class="table-responsive">

                  <div class="container card shadow d-flex justify-content-center mt-5">
                    <!-- nav options -->
                    <ul class="nav nav-pills mb-3 shadow-sm" id="pills-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Cart <i class='bx bxs-cart' style="font-size: 15px;"></i></a>
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
                              <div>
                                <table class="cart-table table">
                                  <thead>
                                    <tr>
                                      <th scope="col">Type</th>
                                      <th scope="col">Detail</th>
                                      <th scope="col">Bets</th>
                                      <th scope="col">Unit</th>
                                      <th scope="col">Mult.</th>
                                      <th scope="col">Bet Amt.</th>
                                      <th scope="col"><button class="clear-cart btn btn-danger">Clear</button></th>
                                    </tr>
                                  </thead>
                                  <tbody class="cart-items">
                                  </tbody>
                                </table>
                                <div><button id="cart-submit" class="btn btn-success">Bet Now</button></div>
                              </div>
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

              </div>


            </div>
          </article>


        </div>

      </div>

    </div>

    </div>

    </div>
    </div>
  </section>

  <script src="js/jquery.min.js"></script>

  <script type='module'>

  </script>
  <script src="js/royal5.js" type="module"></script>


</body>

</html>