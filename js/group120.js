import * as $C from '../libs/combinatorics.js';
const machineSelection  = [1,2,3,4,5];
let userSelections = [];
const sample = 5;
let bets = document.querySelector('.bets');
function changeColor(e){
  let el = e.target;
  el.classList.toggle('btn-success');
  el.classList.add('on');
}




function restoreDefaultColor (){
    let selectedNumbers = document.querySelectorAll('.on');
    for(let i = 0; i<selectedNumbers.length; i++)
    {
        selectedNumbers[i].classList.remove('btn-success');
    }
}

let numbers = [];

function storeNum(e){
    btnValue = parseInt(e.target.innerHTML);
    let numIndex = numbers.indexOf(btnValue);
    if(numIndex != -1)
    {
        numbers.splice(numIndex,1);
        
    }
    else
    {
        numbers.push(btnValue)  
    }
    bets.innerHTML = totalBets(numbers);
    
}

function getUserSelections(numbers, sample)
{
    let userSelections = [];
    window.Combinatorics = $C;
    let c =  new $C.Combination(numbers, sample);
    let counter = 0;
    for(let element of c)
        userSelections.push(element);
    return userSelections; 
}
let foo = [1,2,3,4,4,4]
console.log(getUserSelections(foo, 4));
let btns = document.querySelectorAll('.btn');
let btnValue;

//adds events to all buttons 0 - 9

for(let i = 0; i<=9; i++)
{
    btns[i].addEventListener('click', storeNum);
    btns[i].addEventListener('click', changeColor);
}


let submitBtn = document.querySelector('#submit');
submitBtn.addEventListener('click', (e)=>{ 
userSelections = getUserSelections(numbers, sample);
console.log(JSON.stringify(userSelections));
userWon(machineSelection, userSelections);
})

function userWon(machineSelection, userSelections)
{
  let bet = []
  let position = ""
        userSelections.forEach(selection => {
        if(selection.sort().join(",") === machineSelection.sort().join(",")){
            bet.push(selection)
            position = userSelections.indexOf(selection)
        } 
        })
        console.log("win:" + bet.length)
        console.log("position:" + position)

}

let clearBtn = document.querySelector('#clearBtn');
clearBtn.addEventListener('click', (e)=>{
    restoreDefaultColor();
    numbers = [];
    bets.innerHTML = totalBets(numbers);
})

function factorial(num){
  if (num < 0) return -1;
  if (num == 0) return 1;
  else return num * factorial(num - 1);
};


let totalBets = (arr) => {
  var len = arr.length;
  if (len >= 5)
    return (len * (len - 1) * (len - 2) * (len - 3) * (len - 4)) / 120;
  return 0;
}



  