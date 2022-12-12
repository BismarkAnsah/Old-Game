import * as $C from '../libs/combinatorics.js';
import Royal5 from './utils.js';

(function(){
    class Group120 extends Royal5 {
        row1Sample = 1;
        gameId = 6;
        numsClicked = {
            row1:[]
        }

        getGameId()
        {
            return this.gameId;
        }
        totalBets(){
            let len = this.numsClicked.row1.len;
            return (len * (len - 1) * (len - 2) * (len - 3) * (len - 4)) / 120;
        }
        getBetSelections()
        {
            let row1 = this.numsClicked.row1.join(',');
            return row1;
        }
        generateSelections()
        {
            return super.generateSelections(false, this.numsClicked.row1, this.row1Sample);
        }
        
        getSelectedNums()
        {
            return this.numsClicked.row1;
        }
    }

/******  BEGIN  ******/
//all these are html elements
    let group120 = new Group120();
    let allNums = group120.getElements('.button.row2');
    let submitBtn = group120.getElement('.submitBtn');
    let clearBtn1 = group120.getElement('.clearBtn.row1');
    let selectAllBtn1 = group120.getElement('.selectAllBtn.row1');
    let selectBigBtn1 = group120.getElement('.selectBigBtn.row1');
    let selectSmallBtn1 = group120.getElement('.selectSmallBtn.row1');
    let selectEvenBtn1 = group120.getElement('.selectEvenBtn.row1');
    let selectOddBtn1 = group120.getElement('.selectOddBtn.row1');
/******  End  ******/


    allNums.forEach(num=>{
        num.addEventListener('click', ()=>{
            group120.changeBtnColor(num);
            group120.toggleSaveNumber(num);
            group120.showTotalBets();
        })
    });
    clearBtn1.addEventListener('click', ()=>{
        group120.clear(clearBtn1);
    });
 
    selectBigBtn1.addEventListener('click', ()=>{
        group120.selectBig(selectBigBtn1)
    });

    selectSmallBtn1.addEventListener('click', ()=>{
        group120.selectSmall(selectSmallBtn1);
    });

    selectEvenBtn1.addEventListener('click', ()=>{
        group120.selectEven(selectEvenBtn1);
    });

    selectOddBtn1.addEventListener('click', ()=>{
        group120.selectOdd(selectOddBtn1);
    });

    selectAllBtn1.addEventListener('click', ()=>{
        group120.selectAll(selectAllBtn1);
    });

    submitBtn.addEventListener('click', ()=>{
        let allSelections = group120.generateSelections();
        let url = '';
        let headers = '';
        let betSelections = group120.getBetSelections();
        let gameId = group120.getGameId();
        let data = {
            "betSelection":betSelections,
            'game_id':gameId,
            'data':allSelections
        }
        console.log(data);
        let options = {
            url: url,
            method: 'POST',
            headers: headers,
            data: data
        } 
        axios(options)
        .then(response => {console.log(response)});
    });
})();