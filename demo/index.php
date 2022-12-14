<!DOCTYPE html>

<html lang="en-us"><head>
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
  
  <style>
   
    .numbers{
      margin-bottom:10px;
    }

    .pmoney{
        border-radius:0;
  
    }

    .code {
  display:block;
  height: 37px;
  width: 37px;
  margin: 6.5px;
  border-radius: 50%;
  border:none;
  box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}

.code:hover{
  border:solid 6px  #875FDF;
}

  ::-webkit-scrollbar{width:6px;border-left:1px solid #E6ECF8;}
  ::-webkit-scrollbar-thumb{background-color:#d6872c;}

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
        float:left;
        height: 26px;
        width: 26px;
        margin-right:10px;
        background: red;
        /* border:solid 1px white; */
  
}

.number-diy .data ._number span {
  background: white;
  -webkit-background-clip: text;
  color: transparent !important;
  text-align:center;
}
.data{
  height:60px;
  
}

.rows{
position:relative;
left:20px
}

.codec{
  box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
  height:35px;
  margin-right:5px;
  font-size:12px;
  border:thin;
  margin-top:5px;
  border-radius: 5px;
}

.menu{
  box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
  height:35px;
  margin-right:5px;
  font-size:16px;
  border:thin;
  margin:5px;
  border-radius: 5px;
}

.game{
  box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
  height:35px;
  width:80px;
  margin-right:5px;
  font-size:16px;
  border:thin;
  margin:5px;
  border-radius: 5px;
}

.codec:hover{
  background-color:#875FDF;
  color:#fff;
}

.codex{
  margin-left:15px;
  margin-right:1px;
  border:none;
  background-color:transparent;
  font-size:12px
}

.nums{
  position:relative;
  left:30px;
}

/* ..... */

.selectedAll{
  border:solid 6px  #875FDF;
  background-color:#fff;
  transition: 0.3s;
}

.selectedOdd{
  border:solid 6px  #875FDF;
  background-color:#fff;
  transition: 0.3s;
}

.selectedEven{
  border:solid 6px  #875FDF;
  background-color:#fff;
  transition: 0.3s;
}

.selectedBig{
  border:solid 6px  #875FDF;
  background-color:#fff;
  transition: 0.3s;
}

.selectedSmall{
  border:solid 6px  #875FDF;
  background-color:#fff;
  transition: 0.3s;
}

.default{
  border:solid 6px  #875FDF;
  background-color:#fff;
  transition: 0.3s;
}

.coins{
  border:solid 1px #eee;
  outline: none !important;
  outline: 0;
  box-shadow: none!important;
}

.money-bg{
  background-color:#875FDF;
  color:#FFF;
}

.coins:hover{
  background-color:#E6E1FF;
}

.btnx{
  margin:3px;
}

.addCoinsBg{
  margin:3px;
}

.btnn {
  display:block;
  height: 100px;
  width: 100px;
  border-radius: 50%;
  border: 1px solid red;
}

.imggame{
  display:block;
  height: 110px;
  width: 110px;
  border-radius: 50%;
  border: 5px solid #5548A2;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}

.wining_num{
  display:block;
  height: 50px;
  width: 50px;
  font-size:25px;
  position:relative;
  top:15px;
  margin: 6px;
  border-radius: 50%;
  border:none;
  box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}
/* tab css */

/* div.first{
  background-color:red;
  height:40px;
}
div.second{
  background-color:red;
  height:40px;
}
li{
  color:white;
  height:50px;
} */

.demo div span{
  color:#FFFFFF;
}

/* end tab css */


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
        for($x = 0; $x <= 4; $x++){
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
  <button class="game">All 5</button>
  <button class="game">All 4</button>
  <button class="game">First 3</button>
  <button class="game">Mid 3</button>
  <button class="game">Last 3</button>
  </div>
  <div style="height:150px;background-color:#E6E1FF;padding:20px">
             <div>
              
              <div class="row" style="margin-left:10px;">
              <span  class=" btn-sm option"><b>Straight:</b></span>
              <button class="menu option1" data-points-to="group-joint">All 5 Straight(Joint)</button>
              <button class="menu option2" data-points-to="group-manual">All 5 Straight(Manual)</button>
              <button class="menu option3" data-points-to="group-combo">All 5 Straight(Combo)</button>
              <span  class=" btn-sm option"></span>
              </div>
              <div class="row" style="margin-left:10px;">
              <span  class=" btn-sm option"><b>Group:</b></span>
              <button class="menu option4" data-points-to="group-120">All 5 Group 120</button>
              <button class="menu option5" data-points-to="group-60">All 5 Group 60</button>
              <button class="menu option6" data-points-to="group-30">All 5 Group 30</button>
              <button class="menu option7" data-points-to="group-20">All 5 Group 20</button>
              <button class="menu option8" data-points-to="group-10">All 5 Group 10</button>
              <button class="menu option9" data-points-to="group-5">All 5 Group 5</button>
              </div>
            </div>

  </div>    
  <div style="height:50px;background-color:#FFF;box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;"></div>
  <div class="card-body">

      <div class="mb-3 main">


      <!--group-joint-->
      <div id="group-joint" class="all5", style="display:none">     
      <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
              
              <div class="group-joint" style="position:relative;top:-20px;">
            <br>
            &nbsp;
          
            <div class="rows row">
            <button class="codex">1st</button>
            <?php
              for($x = 0; $x < 10; $x++){
                ?>
                  <button class="x1 code d min num hvr-pop"><b><?=$x?></b></button>
                <?php
              }
            ?>
            <div class="nums">
            <button class="fr1 codec">All</button>
            <button class="fr2 codec">Big</button>
            <button class="fr3 codec">Small</button>
            <button class="fr4 codec">Odd</button>
            <button class="fr5 codec">Even</button>
            <button class="fr6 codec">Clear</button>
            </div>
            </div>
            <br>

            <div class="rows row">
            <button class="codex">2nd</button>
            <?php
              for($x = 0; $x < 10; $x++){
                ?>
                  <button class="x2 code d min num hvr-pop"><b><?=$x?></b></button>
                <?php
              }
            ?>
            <div class="nums">
            <button class="fr11 codec">All</button>
            <button class="fr22 codec">Big</button>
            <button class="fr33 codec">Small</button>
            <button class="fr44 codec">Odd</button>
            <button class="fr55 codec">Even</button>
            <button class="fr66 codec">Clear</button>
            </div>
            </div>
            <br>

            <div class="rows row">
            <button class="codex">3rd</button>
            <?php
              for($x = 0; $x < 10; $x++){
                ?>
                  <button class="x3 code d min num hvr-pop"><b><?=$x?></b></button>
                <?php
              }
            ?>
            <div class="nums">
            <button class="fr111 codec">All</button>
            <button class="fr222 codec">Big</button>
            <button class="fr333 codec">Small</button>
            <button class="fr444 codec">Odd</button>
            <button class="fr555 codec">Even</button>
            <button class="fr666 codec">Clear</button>
            </div>
            </div>
            <br>

            <div class="rows row">
            <button class="codex">4th</button>
            <?php
              for($x = 0; $x < 10; $x++){
                ?>
                  <button class="x4 code d min num hvr-pop"><b><?=$x?></b></button>
                <?php
              }
            ?>
            <div class="nums">
            <button class="fr1111 codec">All</button>
            <button class="fr2222 codec">Big</button>
            <button class="fr3333 codec">Small</button>
            <button class="fr4444 codec">Odd</button>
            <button class="fr5555 codec">Even</button>
            <button class="fr6666 codec">Clear</button>
            </div>
            </div>
            <br>

            <div class="rows row">
            <button class="codex">5th</button>
            <?php
              for($x = 0; $x < 10; $x++){
                ?>
                  <button class="x5 code d min num hvr-pop"><b><?=$x?></b></button>
                <?php
              }
            ?>
            <div class="nums">
            <button class="fr11111 codec">All</button>
            <button class="fr22222 codec">Big</button>
            <button class="fr33333 codec">Small</button>
            <button class="fr44444 codec">Odd</button>
            <button class="fr55555 codec">Even</button>
            <button class="fr66666 codec">Clear</button>
            </div>
            </div>
            <br>
            
          </div>
        </div>
      <p></p>
      <div class="group-joint" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
              
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
              <span class="bets">At least <b>5</b> No.</span>    <span>Total: <b class="total bets">0</b></span>  
              </div>

              <div class="row d-flex justify-content-end" style="margin-right:20px;">
              <button type="button" class="btn btn-outline-secondary btnx">Add to cart</button>
              <button type="button" class="btn btn-outline-secondary btnx">Track</button>
              <button type="button" class="btn btn-outline-secondary btnx">Bet now</button>
              </div>

              </div><!--end of bet amount buttons-->
      <p></p>
      <div class="group-joint" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
              
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



      <!--group-manual-->
      <div id="group-manual" class="all5" style="display:none">     
      <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
              
              <div class="group-manual" class="all5" style="position:relative;top:-20px;">
            <br>
            &nbsp;
          
            <div class="row d-flex justify-content-center" style="padding:20px">
            
              <textarea style="height:200px;border:solid 1px #eee;width:95%;padding:20px;outline:none;" placeholder="Enter your bet manually here&#10;Example is as below. Separate your bet with semi colon (;)&#10;0,1,2,3,4;   0,4,5,6,2;   0,2,5,6,1;   0,1,3,4,2;"></textarea>

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
      <div class="group-manual" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
              
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

     
      <!--group-combo-->
      <div id="group-combo" class="all5" style="display:none">     
      <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
        
        <div class="group-combo" style="position:relative;top:-20px;">
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

      <div class="rows row">
      <button class="codex">2nd</button>
      <?php
        for($x = 0; $x < 10; $x++){
          ?>
            <button class="x22 code d min num hvr-pop"><b><?=$x?></b></button>
          <?php
        }
      ?>
      <div class="nums">
      <button class="cb11 codec">All</button>
      <button class="cb22 codec">Big</button>
      <button class="cb33 codec">Small</button>
      <button class="cb44 codec">Odd</button>
      <button class="cb55 codec">Even</button>
      <button class="cb66 codec">Clear</button>
      </div>
      </div>
      <br>

      <div class="rows row">
      <button class="codex">3rd</button>
      <?php
        for($x = 0; $x < 10; $x++){
          ?>
            <button class="x33 code d min num hvr-pop"><b><?=$x?></b></button>
          <?php
        }
      ?>
      <div class="nums">
      <button class="cb111 codec">All</button>
      <button class="cb222 codec">Big</button>
      <button class="cb333 codec">Small</button>
      <button class="cb444 codec">Odd</button>
      <button class="cb555 codec">Even</button>
      <button class="cb666 codec">Clear</button>
      </div>
      </div>
      <br>

      <div class="rows row">
      <button class="codex">4th</button>
      <?php
        for($x = 0; $x < 10; $x++){
          ?>
            <button class="x44 code d min num hvr-pop"><b><?=$x?></b></button>
          <?php
        }
      ?>
      <div class="nums">
      <button class="cb1111 codec">All</button>
      <button class="cb2222 codec">Big</button>
      <button class="cb3333 codec">Small</button>
      <button class="cb4444 codec">Odd</button>
      <button class="cb5555 codec">Even</button>
      <button class="cb6666 codec">Clear</button>
      </div>
      </div>
      <br>

      <div class="rows row">
      <button class="codex">5th</button>
      <?php
        for($x = 0; $x < 10; $x++){
          ?>
            <button class="x55 code d min num hvr-pop"><b><?=$x?></b></button>
          <?php
        }
      ?>
      <div class="nums">
      <button class="cb11111 codec">All</button>
      <button class="cb22222 codec">Big</button>
      <button class="cb33333 codec">Small</button>
      <button class="cb44444 codec">Odd</button>
      <button class="cb55555 codec">Even</button>
      <button class="cb66666 codec">Clear</button>
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
      <div class="group-combo" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
              
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


        <!--group-120-->
        <div id="group-120" class="all5" style="display:block">
        <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
        
        <div class="g120" style="position:relative;top:-20px;">
      <br>
      &nbsp;
    
      <div class="rows row">
      <?php
        for($x = 0; $x < 10; $x++){
          ?>
            <button class="group120 code d min num hvr-grow" style><?=$x?></button>
          <?php
        }
      ?>
    
      <div class="nums">
        
      <button class="g1201 codec">All</button>
      <button class="g1202 codec">Big</button>
      <button class="g1203 codec">Small</button>
      <button class="g1204 codec">Odd</button>
      <button class="g1205 codec">Even</button>
      <button class="g1206 codec">Clear</button>
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
          <button type="button" class="btn coins">2</button>
          <button type="button" class="btn coins" style="background-color:#875FDF;color:#FFFFFF">1</button>
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
        <div class='bet-total-div' style="padding:10px">
        <span class="bets">At least <b>5</b> No.</span>    <span>Total: <b class="total120">0</b></span>  
        </div>

        <div class="row d-flex justify-content-end" style="margin-right:20px;">
        <button type="button" class="btn btn-outline-secondary btnx">Add to cart</button>
        <button type="button" class="btn btn-outline-secondary btnx">Track</button>
        <button type="button" class="btn btn-outline-secondary btnx  bet120" disabled>Bet now</button>
        </div>

        </div><!--end of bet amount buttons-->
        <p></p>
        <div class="g120" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
        
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
       

        <!--group-60-->
        <div id="group-60" class="all5" style="display:none">     
        <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
        
        <div class="g60" style="position:relative;top:-20px;">
      <br>
      &nbsp;
    
      <div class="rows row">
      <button class="codex">One Pair</button>
      <?php
        for($x = 0; $x < 10; $x++){
          ?>
            <button class="group60 code d min num hvr-pop"><b><?=$x?></b></button>
          <?php
        }
      ?>
      <div class="nums">
      <button class="g601 codec">All</button>
      <button class="g602 codec">Big</button>
      <button class="g603 codec">Small</button>
      <button class="g604 codec">Odd</button>
      <button class="g605 codec">Even</button>
      <button class="g606 codec">Clear</button>
      </div>
      </div>
      <br>
      <div class="rows row">
      <button class="codex">One No.</button>
      <?php
        for($x = 0; $x < 10; $x++){
          ?>
            <button class="group601 code d min num hvr-pop"><b><?=$x?></b></button>
          <?php
        }
      ?>
      <div class="nums">
      <button class="g6011 codec">All</button>
      <button class="g6022 codec">Big</button>
      <button class="g6033 codec">Small</button>
      <button class="g6044 codec">Odd</button>
      <button class="g6055 codec">Even</button>
      <button class="g6066 codec">Clear</button>
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
        <div class="g60" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
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


        <!--group-30-->
        <div id="group-30" class="all5" style="display:none">     
        <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
        
        <div class="g60" style="position:relative;top:-20px;">
      <br>
      &nbsp;
    
      <div class="rows row">
      <button class="codex">One Pair</button>
      <?php
        for($x = 0; $x < 10; $x++){
          ?>
            <button class="group30 code d min num hvr-pop"><b><?=$x?></b></button>
          <?php
        }
      ?>
      <div class="nums">
      <button class="g301 codec">All</button>
      <button class="g302 codec">Big</button>
      <button class="g303 codec">Small</button>
      <button class="g304 codec">Odd</button>
      <button class="g305 codec">Even</button>
      <button class="g306 codec">Clear</button>
      </div>
      </div>
      <br>
      <div class="rows row">
      <button class="codex">One No.</button>
      <?php
        for($x = 0; $x < 10; $x++){
          ?>
            <button class="group301 code d min num hvr-pop"><b><?=$x?></b></button>
          <?php
        }
      ?>
      <div class="nums">
      <button class="g3011 codec">All</button>
      <button class="g3022 codec">Big</button>
      <button class="g3033 codec">Small</button>
      <button class="g3044 codec">Odd</button>
      <button class="g3055 codec">Even</button>
      <button class="g3066 codec">Clear</button>
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
        <div class="g30" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
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
        
        
        <!--group-20-->
        <div id="group-20" class="all5" style="display:none">     
        <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
        
        <div class="g20" style="position:relative;top:-20px;">
      <br>
      &nbsp;
    
      <div class="rows row">
      <button class="codex">Three of <br/>a Kind</button>
      <?php
        for($x = 0; $x < 10; $x++){
          ?>
            <button class="group20 code d min num hvr-pop"><b><?=$x?></b></button>
          <?php
        }
      ?>
      <div class="nums">
      <button class="g201 codec">All</button>
      <button class="g202 codec">Big</button>
      <button class="g203 codec">Small</button>
      <button class="g204 codec">Odd</button>
      <button class="g205 codec">Even</button>
      <button class="g206 codec">Clear</button>
      </div>
      </div>
      <br>
      <div class="rows row">
      <button class="codex">One No.</button>
      <?php
        for($x = 0; $x < 10; $x++){
          ?>
            <button class="group201 code d min num hvr-pop"><b><?=$x?></b></button>
          <?php
        }
      ?>
      <div class="nums">
      <button class="g2011 codec">All</button>
      <button class="g2022 codec">Big</button>
      <button class="g2033 codec">Small</button>
      <button class="g2044 codec">Odd</button>
      <button class="g2055 codec">Even</button>
      <button class="g2066 codec">Clear</button>
      </div>
      </div>
      <br>
      
    </div>
  </div>
        <p></p>
        <div class="g20" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
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
        <div class="g20" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
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


        <!--group-10-->
        <div id="group-10" class="all5" style="display:none">     
        <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
        
        <div class="g10" style="position:relative;top:-20px;">
      <br>
      &nbsp;
    
      <div class="rows row">
      <button class="codex">Three of <br/>a Kind</button>
      <?php
        for($x = 0; $x < 10; $x++){
          ?>
            <button class="group10 code d min num hvr-pop"><b><?=$x?></b></button>
          <?php
        }
      ?>
      <div class="nums">
      <button class="g101 codec">All</button>
      <button class="g102 codec">Big</button>
      <button class="g103 codec">Small</button>
      <button class="g104 codec">Odd</button>
      <button class="g105 codec">Even</button>
      <button class="g106 codec">Clear</button>
      </div>
      </div>
      <br>
      <div class="rows row">
      <button class="codex">One Pair</button>
      <?php
        for($x = 0; $x < 10; $x++){
          ?>
            <button class="group101 code d min num hvr-pop"><b><?=$x?></b></button>
          <?php
        }
      ?>
      <div class="nums">
      <button class="g1011 codec">All</button>
      <button class="g1022 codec">Big</button>
      <button class="g1033 codec">Small</button>
      <button class="g1044 codec">Odd</button>
      <button class="g1055 codec">Even</button>
      <button class="g1066 codec">Clear</button>
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
        <div class="g10" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
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


        <!--group-5-->
        <div id="group-5" class="all5" style="display:none">     
        <div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
        <div class="g5" style="position:relative;top:-20px;">
      <br>
      &nbsp;
    
      <div class="rows row">
      <button class="codex">Four of <br/>a Kind</button>
      <?php
        for($x = 0; $x < 10; $x++){
          ?>
            <button class="group5 code d min num hvr-pop"><b><?=$x?></b></button>
          <?php
        }
      ?>
      <div class="nums">
      <button class="g51 codec">All</button>
      <button class="g52 codec">Big</button>
      <button class="g53 codec">Small</button>
      <button class="g54 codec">Odd</button>
      <button class="g55 codec">Even</button>
      <button class="g56 codec">Clear</button>
      </div>
      </div>
      <br>
      <div class="rows row">
      <button class="codex">One No.</button>
      <?php
        for($x = 0; $x < 10; $x++){
          ?>
            <button class="group51 code d min num hvr-pop"><b><?=$x?></b></button>
          <?php
        }
      ?>
      <div class="nums">
      <button class="g511 codec">All</button>
      <button class="g522 codec">Big</button>
      <button class="g533 codec">Small</button>
      <button class="g544 codec">Odd</button>
      <button class="g555 codec">Even</button>
      <button class="g566 codec">Clear</button>
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
        <div class="g5" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;">
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






<!--end of -->


  </div>
  </article>


</div>
    </div>
  </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/jquery.min.js"></script>

<script type='module'>
import * as $C from "../demo/js/combinatorics.js";
$(function(){

let lastId = 0;
let nums = [];
let perms = [];
let money = 1;
const sample = 5;
let data;

// $(".wining_num").each(function(index){
//   $(this).html(index);
// });
  //all
$(".g1201").click(()=>{
  $(".group120").addClass("default");

  nums = [0,1,2,3,4,5,6,7,8,9];
  totalBets();
  console.log(nums);
})

//big
$(".g1202").click(()=>{
  $(".group120").removeClass("default");
  $(".group120:nth-child(n+6)").addClass("default");
  nums = [5,6,7,8,9];
  totalBets();
})

//small
$(".g1203").click(()=>{
  $(".group120").removeClass("default");
  $(".group120:nth-child(-n+5)").addClass("default");
  nums = [0,1,2,3,4];
  totalBets();

})

//odd
$(".g1204").click(()=>{
  $(".group120").removeClass("default");
  $(".group120:nth-child(even)").addClass("default");
  nums = [1,3,5,7,9];
  totalBets();
})

//even
$(".g1205").click(()=>{
  $(".group120").removeClass("default");
  $(".group120:nth-child(odd)").addClass("default");
  nums = [0,2,4,6,8];
  totalBets();
 
})

//clear
$(".g1206").click(()=>{
  $(".group120").removeClass("default");
  nums = [];
  totalBets();
  console.log(nums);
})


$(".group120").click(function(){
  $(this).toggleClass("default");
  let btnValue = parseInt($(this).html());
  let numIndex = nums.indexOf(btnValue);
    if(numIndex != -1)
    {
        nums.splice(numIndex,1);
        
    }
    else
    {
        nums.push(btnValue)  
    }
    console.log(nums);
    totalBets();
})

 $('.bet120').click(function(){
  let comb = new $C.Combination(nums, sample);
  let userSelection = nums.join(',');
  for (let val of comb) perms.push(val);
  perms = JSON.stringify(perms);
   let data = {
    'game_id':6,
    'user_selection':userSelection,
    'data':perms
  };
  let url = '../sender.php';
  let headers = '';
  let options = {
      url: url,
      method: "POST",
      headers: headers,
      data: data,
    };
    axios(options).then((response) => {
      console.log(response);
    });

 })
 
 function totalBets()
{
  
  let len = nums.length;
  let results = 0;
  if (len >= 5)
      results = (len * (len - 1) * (len - 2) * (len - 3) * (len - 4)) / 120;
  if(results){
    $('.bet120').addClass('btn-success');
    $('.bet120').css('color', '#fff');
    $('.bet120').attr('disabled', false);
    }else
    {
      $('.bet120').removeClass('btn-success');
      $('.bet120').css('color', '#6C757D');
      $('.bet120').attr('disabled', true);
    }
    let total = moneyresults;
    results = `<span style='color:red'>${results} </span>bets. Total<span style='color:red'> ${total}</span>`
// $('.bet-total-div').hide();
    $('.bet-total-div').html(results);
    
}

// $(document).ready(function(){
//   let url = '../receiver.php?action=getdrawnumber';
//   let headers = '';
//   let data = {
//     'last_id':lastId
//   }
//   let options = {
//       url: url,
//       method: "POST",
//       headers: headers,
//       data: data
//     };
//     axios(options).then((response) => {
//       console.log(response);
//       lastId = response.data.id;
//       let numbers = response.data.numbers;
//       $('.wining_num').each(function(index){
//          $(this).html(numbers[index]);
//       })
//     });
// })
function drawNum()
{
  let url = '../receiver.php?action=getdrawnumber';
  let headers = '';
  let data = {
    'last_id':lastId
  }
  let options = {
      url: url,
      method: "POST",
      headers: headers,
      data: data,
    };
    console.log(data);
    axios(options).then((response) => {
      if(response.data){
        console.log(response);
        // lastId = response.data.id;
        let numbers = response.data.numbers;
        $('.wining_num').each(function(index){
         $(this).html(numbers[index]);
      })}
    });
}


$('.coins').click(function(){
money = $(this).html();
})

//display and hiding game type
function hideAllExcept(hideAll, except)
{
  $(hideAll).hide();
  $(except).show();
}


//menu selections
$('.menu').click(function(){
  $('.menu').removeClass('money-bg');
  $(this).addClass('money-bg');
  let pointsTo = $(this).attr('data-points-to');
  let hideAll = '.all5';
  let except  = `#${pointsTo}`;
  hideAllExcept(hideAll, except);
})


// setInterval(drawNum, 1000);
})



</script>


</body>
</html>




 


 


 


