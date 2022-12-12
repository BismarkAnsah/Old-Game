function uniqueArrays(groupsOf, arr){
    let totalObjs = arr.length;
    let sample = totalObjs - groupsOf;
    let limit = combination(totalObjs, sample);
    let result = [];
    let current;
    for(let i = 0; i<limit; i++)
    {
        current = arr.slice(0, groupsOf);

        // result.push(current);
        // result[i] = current.sort();
        result[i] = current;
        arr = arr.splice(-sample, sample).concat(current);
        console.log(arr)
    }

    console.log(result);
}

uniqueArrays(5, [0,1,2,3,4,5])

function permutation(n, r)
{
    if(!(r>=0 && n>=r))
    return -1;
return factorial(n)/factorial(n-r);
}
function combination(n, r){
    if(!(r>=0 && n>=r))
        return -1;
    return factorial(n)/(factorial(r)*factorial(n-r));
}

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
