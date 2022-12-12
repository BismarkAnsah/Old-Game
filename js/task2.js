/*
Task 2

user selection
1,2,3,4,5
2,3,4,5,6
3,4,5,6,7
4,5,6,7,8
5,6,7,8,9

machine selection
1,2,3,4,5
task2. write a javascript program to out put to the console
*/

/*const machineSelection = [1,2,3,4,5];
const userSelections = [
    [1,2,3,4,5],
    [2,3,4,5,6],
    [3,4,5,6,7],
    [5,2,3,1,4],
    [5,6,7,8,9]
]

let bet = []
let position = ""

function userWon(machineSelection, userSelections)
{

        userSelections.forEach(selection => {
        if(selection.sort().join(",") === machineSelection.sort().join(",")){
            bet.push(selection)
            position = userSelections.indexOf(selection)
        } 
        })

        console.log("win:" + bet.length)
        console.log("position" + position)



}


if(userWon(machineSelection, userSelections))
    console.log("You Won");
else
    console.log("You Lost");*/


    function k_combinations(set, k) {
        var i, j, combs, head, tailcombs;
        
        // There is no way to take e.g. sets of 5 elements from
        // a set of 4.
        if (k > set.length || k <= 0) {
            return [];
        }
        
        // K-sized set has only one K-sized subset.
        if (k == set.length) {
            return [set];
        }
        
        // There is N 1-sized subsets in a N-sized set.
        if (k == 1) {
            combs = [];
            for (i = 0; i < set.length; i++) {
                combs.push([set[i]]);
            }
            return combs;
        }
        
        combs = [];
        let foo = [];
        for (i = 0; i < set.length - k + 1; i++) {
            // head is a list that includes only our current element.
            head = set.slice(i, i + 1);
            // We take smaller combinations from the subsequent elements
            tailcombs = k_combinations(set.slice(i + 1), k - 1);
            // For each (k-1)-combination we join it with the current
            // and store it to the set of k-combinations.
            
            for (j = 0; j < tailcombs.length; j++) {
              
                combs.push(head.concat(tailcombs[j]));

                foo.push('hello');
                if(foo.length == 30)
                 return foo.length;
            }
        }
        return combs;
    }

console.log(k_combinations([1,2,4,4,4], 4));
























    function combinations(set) {
        var k, i, combs, k_combs;
        combs = [];
        
        // Calculate all non-empty k-combinations
        for (k = 1; k <= set.length; k++) {
            k_combs = k_combinations(set, k);
            for (i = 0; i < k_combs.length; i++) {
                combs.push(k_combs[i]);
            }
        }
        return combs;
    }

    // console.log(combinations([1,2,3,4,8]))