
import * as $C from '../libs/combinatorics.js';
window.Combinatorics = $C;
function generateSelections(allowRepeat = false, ...rowsAndSamples)
{
    let rows = [], samples =  [], perms = [], results =[];
    
    //dividing rows and samples
    rowsAndSamples.forEach(element=>{
       Array.isArray(element) ? rows.push(element):samples.push(element);
    });

    if(rows.length != samples.length) return -1;

    //perming rows
    let comb, val;
    rows.forEach((element, index)=>{
        comb =  new $C.Combination(element, samples[index]);
        for(val of comb)
            perms.push(val)
    })
    // getting non-repeating lists
    let startCheck = getCombination(rows[0].length, samples[0]);
    let i,j, permsSize;
    permsSize = perms.length;
    if (!allowRepeat) {
      for (i = 0; i < startCheck; i++) {
        for (j = startCheck; j < permsSize; j++) {
          if (everyInArray(perms[j], perms[i]) || everyInArray(perms[i], perms[j])) {
            continue;
          }
          results.push([...perms[i], ...perms[j]]);
        }
      }
    } else {
      for (i = 0; i < startCheck; i++) {
        for (j = startCheck; j < permsSize; j++) {
          results.push([...perms[i], ...perms[j]]);
        }
      }
    }
    return results.length==0 ? perms:results;
}

let row1 = [3,4,6,7,8,9];
let row2 = [5,6,8,9];
// let row3 = [1];
// let row4 = [1];
// let row5 = [1];

let sample1 = 1;
let sample2 = 1;
// let sample3 = 1;
// let sample4 = 1;
// let sample5 = 1;



console.log(generateSelections(false, row1, row2, sample1, sample2));

function someInArray(array1, array2)
{
  return array1.some(element=>{
        return array2.includes(element);
    });
}

function everyInArray(array1, array2)
{
  return array1.every(element=>{
        return array2.includes(element);
    });
}

function sumArray(arr)
{
    return arr.reduce(total=>{
        return
    })
}
function getCombination(n, r){
    if(!(r>=0 && n>=r))
        return -1;
    return factorial(n)/(factorial(r)*factorial(n-r));
}
let perms = [];
let comb =  new $C.Combination([1,2,2,3,2,2], 5);
        for(let val of comb)
            perms.push(val)
// console.log(perms);

function factorial(num){
    if(num == 0)
        return 1;
    if(num < 0 )
        return -1;
    let result = num;
    for(let i = num-1; i>1; i--)
        result *= i;
    return result;
}

// Game Type: Group 20

// User selection
// ——————————

// Row1 = [ 1, 2, 3, 4, 5,9]
// Row2 = [ 2, 4, 5, 7, 9]
// Repeat = 4

// Total bets: 44

// Formulae
// —————————

// Row2.length * ( Row2.length - 1 ) / 2  * (Row1.length - repeat ) + repeat * ( Row2.length - 1 ) * ( Row2.length - 2 ) / 2

// Game Type: Group 10

// User selection
// ——————————

// Row1 = [ 2,3]
// Row2 = [ 3,4,5]
// Repeat = 1

// Total bets: 5

// Formulae
// —————————

// Row2.length * (Row1.length - repeat ) + repeat * ( Row2.length - 1 )

