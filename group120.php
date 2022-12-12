<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

        <div class="round-buttons ">
            <?php
                for($i = 0; $i<=9; $i++)
                {
                    echo "<button type='button' class='btn btn-primary btn-circle btn-sm'>$i</button>";
                }
            ?>
        </div>
    
            <button type="submit" class="btn btn-success" id = "submit">Submit</button>
            <button type="submit" class="submit btn btn-info" id = "clearBtn">Clear</button>
        </div>
        <span>Number of bets: <span class="bets">0</span></span>
 

        <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->

<script type="module" src="js/group120.js"></script>
</body>
</html>













































































<!-- 
<script>    
    window.Combinatorics = $C;
    let c =  new $C.Combination([0,1,2,3,4,5,6,7,8,9], 5);
    let counter = 0;
    const userSelections = [];
    const machineSelection = [5,8,4,6,7];
    for(let element of c){
        // console.log(element);
        userSelections.push(element);
        counter++
        // if(counter == 21)
        //     break;

  }
</script> -->