let counter = 0;
let randomnumber;

function showWinning(){
counter++;
if(counter == 10){
$(".info").hide();
$(".winner").show(); 

randomnumber = Math.floor(Math.random() * (99999 - 0 + 10000)) + 0;

console.log(randomnumber)

$diy = $('.number-diy .data');
$diy.rollNumber({
number: randomnumber, 
speed: 500, 
interval: 200,
rooms: 5,
space: 50,
symbol: '', 
fontStyle: {
'font-size': 60,
'color':'white',
'text-align' : 'center',
'margin-top':10
}
})
}

if(counter >= 20){
counter = 0;
$(".info").show();
$(".winner").hide();
}
}

let counterr = setInterval(showWinning, 1000);



