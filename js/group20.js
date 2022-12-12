import * as $C from '../libs/combinatorics.js';
let btnsRow1 = document.querySelectorAll('.btns-row1');
let btnsRow2 = document.querySelectorAll('.btns-row2');
let bets = document.querySelector('.bets');
const machineSelection = [1,1,2,3];
let btnValue;
let numbers;
const sample = 4;
let nums1 = [];
let nums2 = [];
let userSelections = [];

function changeColor(btn){
    btn.classList.toggle('btns-color');
    btn.classList.add('on');
  }

  function restoreDefaultColor (){
    let selectedNumbers = document.querySelectorAll('.on');
    for(let i = 0; i<selectedNumbers.length; i++)
    {
        selectedNumbers[i].classList.remove('btns-color');
    }
}
  
btnsRow1.forEach(btn => {
    btn.addEventListener('click',()=>{
        let btnValue = parseInt(btn.firstChild.innerHTML);
        let numIndex = nums1.indexOf(btnValue);
        if (numIndex != -1) nums1.splice(numIndex, 1);
        else nums1.push(btnValue);
        changeColor(btn);
        // console.log(nums1);
        bets.innerHTML = totalBets(nums1, nums2);
    });
})

btnsRow2.forEach(btn => {
    btn.addEventListener('click', ()=>{
        let btnValue = parseInt(btn.firstChild.innerHTML);
        let numIndex = nums2.indexOf(btnValue);
        if (numIndex != -1) nums2.splice(numIndex, 1);
        else nums2.push(btnValue);
        // console.log(nums2);
        changeColor(btn);
        bets.innerHTML = totalBets(nums1, nums2);
    });
})



function getUserSelections(numbers, sample)
{

    let userSelections = [];
    window.Combinatorics = $C;
    let c =  new $C.Combination(numbers, sample);
    let counter = 0;
    for(let element of c)
        userSelections.push(element);

    console.log(userSelections);
    return userSelections; 
}

let clearBtn = document.querySelector('.clear');
clearBtn.addEventListener('click', (e)=>{
    restoreDefaultColor();
    numbers = [];
    nums1 = [];
    nums2 = [];
    bets.innerHTML = totalBets(nums1, nums2);
})

let submitBtn = document.querySelector('.submit');
submitBtn.addEventListener('click', ()=>{

numbers = nums1.concat(nums2);

userSelections = getUserSelections(numbers, sample);
userWon(machineSelection, userSelections);
})

function totalBets(row1, row2){
let repeatedNums = row2.filter(element => row1.includes(element));
let repeat = repeatedNums.length;
return row2.length * ( row2.length - 1 ) / 2  * (row1.length - repeat ) + repeat * ( row2.length - 1 ) * ( row2.length - 2 ) / 2
}

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