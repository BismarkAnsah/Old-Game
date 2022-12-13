function fiveRows(row1, row2, row3, row4, row5)
{
    let i, j;
    let rows = [row1,row2,row3,row4,row5];
    let rowLen = row1.length;
    let results = [];
    let holder = [];
    let l = 0;
    for(i = 0; i<rowLen;){
        for(j = 0;j<5; j++){
            holder.push(rows[i][j])
        }
        results.push(holder);
        holder = [];
        i++;
        if(i == rowLen){
            ;
            l++;
            if(l==5)
                break;
            rowLen = rows[l].length;
        }
    }
    return results;
}

