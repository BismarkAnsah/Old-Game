import * as $C from '../libs/combinatorics.js';
import Royal5 from './utils.js';


(function(){
    class Group5 extends Royal5 {
        row1Sample = 1;
        row2Sample = 1;
        gameId = 1;
        numsClicked = {
            row1:[],
            row2:[]
        }

        getGameId()
        {
            return this.gameId;
        }
        totalBets(){
            let row1 = this.numsClicked.row1;
            let row2 = this.numsClicked.row2;
            let repeatedNums = row2.filter(element => row1.includes(element));
            let repeat = repeatedNums.length;
            return row2.length * (row1.length - repeat ) + repeat * ( row2.length - 1 );
        }

        generateSelections()
        {
            return super.generateSelections(false, this.numsClicked.row1, this.numsClicked.row2, this.row1Sample, this.row2Sample);
        }
        
        getSelectedNums()
        {
            return [this.numsClicked.row1, this.numsClicked.row2];
        }
    }

/******  BEGIN  ******/
//all these are html elements
    let group5 = new Group5();
    let allNums = [...group5.getElements('.button.row1'), ...group5.getElements('.button.row2')];
    let submitBtn = group5.getElement('.submitBtn');
    let clearBtn1 = group5.getElement('.clearBtn.row1');
    let selectAllBtn1 = group5.getElement('.selectAllBtn.row1');
    let selectBigBtn1 = group5.getElement('.selectBigBtn.row1');
    let selectSmallBtn1 = group5.getElement('.selectSmallBtn.row1');
    let selectEvenBtn1 = group5.getElement('.selectEvenBtn.row1');
    let selectOddBtn1 = group5.getElement('.selectOddBtn.row1');

    let clearBtn2 = group5.getElement('.clearBtn.row2');
    let selectAllBtn2 = group5.getElement('.selectAllBtn.row2');
    let selectBigBtn2 = group5.getElement('.selectBigBtn.row2');
    let selectSmallBtn2 = group5.getElement('.selectSmallBtn.row2');
    let selectEvenBtn2 = group5.getElement('.selectEvenBtn.row2');
    let selectOddBtn2 = group5.getElement('.selectOddBtn.row2');
     
/******  End  ******/


    allNums.forEach(num=>{
        num.addEventListener('click', ()=>{
            group5.changeBtnColor(num);
            group5.toggleSaveNumber(num);
            group5.showTotalBets();
        })
    });

    clearBtn1.addEventListener('click', ()=>{
        group5.clear(clearBtn1);
    });
 
    clearBtn2.addEventListener('click', ()=>{
        group5.clear(clearBtn2);
    });

    selectBigBtn1.addEventListener('click', ()=>{
        group5.selectBig(selectBigBtn1)
    });

    selectBigBtn2.addEventListener('click', ()=>{
        group5.selectBig(selectBigBtn2)
    });

    selectSmallBtn1.addEventListener('click', ()=>{
        group5.selectSmall(selectSmallBtn1);
    });

    selectSmallBtn2.addEventListener('click', ()=>{
        group5.selectSmall(selectSmallBtn2);
    });

    selectEvenBtn1.addEventListener('click', ()=>{
        group5.selectEven(selectEvenBtn1);
    });

    selectEvenBtn2.addEventListener('click', ()=>{
        group5.selectEven(selectEvenBtn2);
    });

    selectOddBtn1.addEventListener('click', ()=>{
        group5.selectOdd(selectOddBtn1);
    });

    selectOddBtn2.addEventListener('click', ()=>{
        group5.selectOdd(selectOddBtn2);
    });

    selectAllBtn1.addEventListener('click', ()=>{
        group5.selectAll(selectAllBtn1);
    });

    selectAllBtn2.addEventListener('click', ()=>{
        group5.selectAll(selectAllBtn2);
    });



    submitBtn.addEventListener('click', ()=>{
        let allSelections = group5.generateSelections();
        let url = '';
        let headers = '';
        let betSelections = group5.getBetSelections();
        let gameId = group5.getGameId();
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
            data: {
                'game_id':gameId,
                'data':allSelections
            }
        } 
        axios(options)
        .then(response => {console.log(response)});
        
    }) 
})();

