class Royal5utils {

  /***
   * 
   * README.md
   * 
   * methods jQuery style selections.
   * parameter names point use css selectors.
   * For example,  parameters named 'target' and 'effects' are css selectors.
   * 'effects' adds the class to the 'target'
   * 
   */
  pageId = "#group-joint";
  decimalPlaces = 3;
  page;
  groupName = ".group-joint";
  

  savepoint = {
    cart:[],
    data:{
      gameId:1
      // betSelection,
      // allSelections,
      // multiplier,
      // totalBets,
      // eachBet
    }
  }
  constructor() {
    this.page = $(this.pageId);
  }


  
  $(element = "") {
    return element ? $(this.page).find(element) : this.$(this.pageId);
  }

  selectAll(row=this.classNames.row1Nums, effects='default') {
      this.$(row).addClass(effects);
  }

  selectBig(row=this.classNames.row1Nums, effects='default') {
      this.$(row).removeClass(effects);
      this.$(`${row}:nth-child(n+7)`).addClass(effects);
  }

  selectSmall(row=this.classNames.row1Nums, effects='default') {
      this.$(row).removeClass(effects);
      this.$(`${row}:nth-child(-n+6)`).addClass(effects);
  }

  selectEven(row=this.classNames.row1Nums, effects='default') {
      this.$(row).removeClass(effects);
      this.$(`${row}:nth-child(even)`).addClass(effects);

  }

  selectOdd(row, effects='default') {
      this.$(row).removeClass(effects);
      this.$(`${row}:nth-child(odd)`).addClass(effects);
  }

  clear(row, effects='default') {
      this.$(row).removeClass(effects);
  }

  selectAmount(row, effects='default')
  {
        this.$(row).removeClass(effects);
        this.$(row).addClass(effects);
  }

  selectElement(target, effects='money-bg')
  {
        this.$(target).removeClass(effects);
        console.log(this.$(this));
        this.$(this).addClass(effects);
  }

  toggleBetsDisplay(totalBets)
  {
     if(totalBets)
     {
      this.$('.least-bet-info').hide();
     }else
     this.$('.total-bets-info').hide();
  }

  applyEffects(effectsClass, elementSelector)
  {
    this.$(elementSelector).addClass(effectsClass);
  }


  /******logics */

  // totalBet()
  // {

  // }

  getEachBet()
  {
    let amt, totalBets, eachBet;
    amt = this.getAmt();
    totalBets = this.getTotalBets();
    eachBet = amt/totalBets;
    eachBet = eachBet.toFixed(3);
    return parseFloat(eachBet)
  }
  getActualBet()
  {
    let eachBet, totalBets = this.getEachBet();
    totalBets = this.getTotalBets();
    return totalBets * eachBet;
  }
  getTotalBets()
  {

  }

  increaseMultiplier(target)
  {
    let multiValue = this.getValue(target);
    // let multiValue = parseInt(this.$(target).html());
    ++multiValue;
    // this.$(target).html(multiValue);
    this.$(target).val(multiValue);
  }

  getValue(selector, parseInteger=true)
  {
    let value = this.$(selector).val();
    return parseInteger ? parseInt(value):value;
  }

  decreaseMultiplier(target)
  {
    
    let multiValue = this.getValue(target);
    // let multiValue = parseInt(this.$(target).html());
    multiValue = multiValue <= 1?multiValue:--multiValue ;
    // this.$(target).html(multiValue);
    this.$(target).val(multiValue);
  }


  activateButtons(disabled, ...btnSelectors)
  {
    btnSelectors.forEach(selector=>{
      this.$(selector).attr('disabled', disabled);
    })
  }

  getRowFromClass(classNames)
  {
    let classIndex = classNames.indexOf('row');
    return classNames.substring(classIndex, classIndex+4);
  }

  
  postData()
  {

  }
  /****validations */
  validateMoney() {}

  

totalBets10(row1, row2){
  let repeatedNums = row2.filter(element => row1.includes(element));
  let repeat = repeatedNums.length;
  return row2.length * (row1.length - repeat ) + repeat * ( row2.length - 1 )
}
totalBets20(row1, row2){
  let repeatedNums = row2.filter(element => row1.includes(element));
  let repeat = repeatedNums.length;
  return row2.length * ( row2.length - 1 ) / 2  * (row1.length - repeat ) + repeat * ( row2.length - 1 ) * ( row2.length - 2 ) / 2}
  
totalBets30(row1, row2){
  let repeatedNums = row2.filter(element => row1.includes(element));
  let repeat = repeatedNums.length;
  return row1.length * ( row1.length - 1 ) / 2  * (row2.length - repeat ) + repeat * ( row1.length - 1 ) * ( row1.length - 2 ) / 2
  }

  totalBets60(row1, row2){
    let repeatedNums = row2.filter(element => row1.includes(element));
    let repeat = repeatedNums.length;
    return row2.length * ( row2.length - 1 ) * ( row2.length - 2 ) / 6     *   ( row1.length - repeat ) + repeat * ( row2.length - 1) * ( row2.length - 2 ) * ( row2.length - 3 ) / 6 
    }

   totalBets120(arr){
      var len = arr.length;
      if (len >= 5)
        return (len * (len - 1) * (len - 2) * (len - 3) * (len - 4)) / 120;
      return 0;
    }
newRow(oldRow, value)
{
  let btnValue = parseInt($(this).html());
  let numIndex = nums.indexOf(btnValue);
    if(numIndex != -1)
    {
        nums.splice(numIndex,1);
    }
    else
    {
        nums.push(btnValue)  
    }
}
    pushToCart()
 {
    this.sac
 }
}


class group5 extends Royal5utils{
 


  totalBets(){
    let row1 = this.savePoint.data.row1;
    let row2 = this.savePoint.data.row2;
    let repeatedNums = row2.filter(element => row1.includes(element));
    let repeat = repeatedNums.length;
    return row2.length * (row1.length - repeat ) + repeat * ( row2.length - 1 );
}




}




let game = new group5();
classNames = {
  selectionCtrl:'selection-ctr',
  allBtn:'.all-btn',
  bigBtn:'.big-btn',
  smallBtn:'.small-btn',
  oddBtn:'.odd-btn',
  evenBtn:'.even-btn',
  clearBtn:'.clear-btn',
  row1Nums:'.row1',
  row2Nums:'.row2',
  row3Nums:'.row3',
  row4Nums:'.row4',
  row5Nums:'.row5',
  row6Nums:'.row6',
  betAmt:'.bet-amt',
  eachBetBox:'.each-bet-select',
  multiplier:'.multiplier',
  moneySelect:'.money',
  eachBetShow:'.each-bet',
  totalBetShow:'.total-bet',
  totalBetAmtShow:'.totalAmt',
  multiValue: '.multiplier-value',
  cartBtn:'.cart-btn',
  betNowBtn:'.betNow-btn',
  numBtn: '.num'
};



savePoint = {
  cart:[],
  data:{
    // row1,
    // row2
  }
}


 game.$(classNames.allBtn).click(function(){
    let row = $(this).parent().attr('data-points-to');
    console.log(row);
    game.selectAll(`.${row}`);
    savePoint.data[row] = [0,1,2,3,4,5,6,7,8,9];
  });


 game.$(classNames.bigBtn).click(function(){
    let row = $(this).parent().attr('data-points-to');
    game.selectBig(`.${row}`);
    savePoint.data[row] = [5,6,7,8,9];
  });


 game.$(classNames.smallBtn).click(function(){
    let row = $(this).parent().attr('data-points-to');
    game.selectSmall(`.${row}`);
    savePoint.data[row] = [0,1,2,3,4];
  });


 game.$(classNames.oddBtn).click(function(){
    let row = $(this).parent().attr('data-points-to');
    game.selectOdd(`.${row}`);
    savePoint.data[row] = [1,3,5,7,9];
  });

 game.$(classNames.evenBtn).click(function(){
    let row = $(this).parent().attr('data-points-to');
    game.selectEven(`.${row}`);
    savePoint.data[row] = [0,2,4,6,8];
  });

 game.$(classNames.clearBtn).click(function(){
    let row = $(this).parent().attr('data-points-to');
    game.clear(`.${row}`);
    savePoint.data[row] = [];
  });

  
  game.$(classNames.multiplier).click(function(){
      $(classNames.multiplier).removeClass('money-bg');
      game.$(this).addClass('money-bg');
 });

 game.$(classNames.moneySelect).click(function(){
      $(classNames.moneySelect).removeClass('money-bg');
      game.$(this).addClass('money-bg');
 });

 game.$('.plus').click(function(){
  game.increaseMultiplier(classNames.multiValue);
  $(this).addClass('money-bg');
  setTimeout(function(){
    $('.plus').removeClass('money-bg')
  }, 50);
 })

 game.$('.multiplier-value').click(function(){
  $(this).select();
   
 })

 game.$('.multiplier-value').on('input', function(){
  let onlyNums = parseInt($(this).val().replace(/\D+/g, ''));
  onlyNums = onlyNums ? onlyNums:1;
  $(this).val(onlyNums);
 })


 game.$('.minus').click(function(){
  game.decreaseMultiplier(classNames.multiValue);
  $(this).addClass('money-bg');
  setTimeout(function(){
    $('.minus').removeClass('money-bg')
  }, 50);
 })


game.$('.cart').click(function(){
  savePoint.data.multiplier = game.getMultiplier();
  savePoint.data.totalBets = game.totalBets();
  savepoint.data.unitBet = game.unitBet();
  savepoint.data.gameId = game.gameId();
  
  savePoint.cart.push(savePoint.data);
})

game.$('.least-bet').hide();



    game.$('.num').click(function(){
      console.log($(this))
      $(this).toggleClass('default');
      let btnValue = parseInt($(this).children().html());
      let classNames = $(this).attr('class');
      let row  = game.getRowFromClass(classNames);
      let oldData = savePoint.data[row];
 
      let data = newData(oldData, btnValue);
      savePoint.data[row] = data;
      console.log(savePoint);
      // let req=$.post('index.php', {name:'kofi'});
      // req.done(function(){alert('done')})
      // req.fail(function(){alert('failed')})
      // let req = $.get('rand.php',function(data, status){
      //     alert("data: "+data +"\nStatus: "+ status);
      // })
      // req.fail(function(){alert('failed')})
    })


function newData(oldData = [], btnValue)
{
    let numIndex =  oldData.indexOf(btnValue);
    if(numIndex != -1)
    {
      oldData.splice(numIndex,1);
    }
    else
    {
      oldData.push(btnValue)  
    }
    return oldData;
}

function echo(...data)
{
  console.log(...data);
}
