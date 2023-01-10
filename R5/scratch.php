<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>scratch</title>
    <style>

    </style>
</head>

<body>

    <div class="container-fluid align-items-center">
        <div class="row">
            <div class="col-2 side-menu">
                <div class="row">History</div>
                <div class="row">Instant <br> Games</div>
                <div class="row">PK10</div>
                <div class="row">5D</div>
                <div class="row">Mark 6</div>
                <div class="row">11 x 5</div>
                <div class="row">2 color Ball</div>
                <div class="row">4D</div>
                <div class="row">North <br> Vietlott</div>
                <div class="row">Central <br> Vietlott</div>
                <div class="row">South <br> Vietlott</div>
                <div class="row">Thailott</div>
                <div class="row">LF lotto</div>
                <div class="row">Fast 3</div>
            </div>

            <div class="col-6 account-menu">
                <div class="row">
                    <div class="col">Back to lobby</div>
                    <div class="col">Call of Heros</div>
                    <div class="col">kzing00kzd9527</div>
                    <div class="col">Bal: <span class="currency-symbol"> 38.000</span><span class="hide-balance"></span></div>
                    <div class="col">Record</div>
                    <div class="col">Setting</div>
                    <div class="col">English</div>
                </div>
                <div class="row offset-md-9">202212211287 期・截止时间</div>
                <div class="row">
                    <div class="col offset-md-4">
                        <div class="row">No:20221108-246</div>
                        <div class="row">For sale</div>
                    </div>
                    <div class="col">
                        <div class="row">Timer</div>
                        <div class="row">Progress bar</div>
                    </div>
                    <div class="col">
                        <div class="row">
                        <button>0</button>
                        <button>0</button>
                        <button>0</button>
                        <button>0</button>
                        <button>0</button>
                        <button class="caret">V</button>
                        </div>
                    </div>
                </div>
                <div class="row game-nav">
                    <div class="col all5">All5</div>
                    <div class="col all4">All4</div>
                    <div class="col first3">First 3</div>
                    <div class="col mid3">Mid 3</div>
                    <div class="col last3">Last 3</div>
                    <div class="col first2">First 2</div>
                    <div class="col last2">Last 2</div>
                    <div class="col fixed-place">Fixed Place</div>
                    <div class="col any-place">Any place</div>
                    <div class="col bsoe">B/S/O/E</div>
                    <div class="col fun">Fun</div>
                    <div class="col pick2">Pick 2</div>
                    <div class="col pick3">Pick 3</div>
                    <div class="col pick4">pick 4</div>
                </div>
                <div class="row">
                    <div class="col-1 straight">Straight: </div>
                    <div class="col-2">First 3 Straight(Joint)</div>
                    <div class="col-2">First 3 Straight(Manual)</div>
                    <div class="col-2">All 5 Straight(Combo)</div>
                </div>
                <div class="row">
                    <div class="col-1 group">Group: </div>
                    <div class="col-2">All 5 Group 120</div>
                    <div class="col-2">All 5 Group 120</div>
                    <div class="col-2">All 5 Group 120</div>
                    <div class="col-2">All 5 Group 120</div>
                    <div class="col-2">All 5 Group 120</div>
                </div>
                <div class="row">
                    <div class="col-2">All 5 Group 10</div>
                    <div class="col-2">All 5 Group 5</div>
                </div>
                <div class="row">
                    <div class="col-2">
                        First 3 Straight(Joint)
                    </div>
                    <div class="col-2">Prize: 1965.15</div>
                    <div class="col-2"><button>How to Play</button></div>
                    <div class="col-2"><button>What is solo?</button></div>
                </div>
                <div class="row">
                        <?php
                          for ($x = 0; $x < 10; $x++) {
                          ?>
                            <button class=""><b><?= $x ?></b></button>
                          <?php
                          }
                          ?>
                </div>
            </div>





















            <div class="col-3 bets-menu">
                <div class="row">
                <div class="col-offset-md-4">Recent draw</div>
                <div class="col-2">Dragon</div>
                <div class="col-2">Trend</div>
                <div class="col-2">Recent bet</div>
                </div>
            </div>
        </div>


</body>

</html>