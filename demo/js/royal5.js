import * as $C from "../js/combinatorics.js";
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




allSelections(...rowsAndSamples)
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
      for (i = 0; i < startCheck; i++) {
        for (j = startCheck; j < permsSize; j++) {
          if (everyInArray(perms[j], perms[i]) || everyInArray(perms[i], perms[j])) {
            continue;
          }
          results.push([...perms[i], ...perms[j]]);
        }
      }
    return results.length==0 ? perms:results;
}



  /******logics */

  // totalBet()
  // {

  // }

 


  increaseMultiplier(target)
  {
    let multiValue = this.getValue(target);
    // let multiValue = parseInt(this.$(target).html());
    multiValue = multiValue>=9999?multiValue:++multiValue;

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


class group5 extends Royal5utils {
  gameId = 9;
  sample1 = 1;
  sample2 = 1;
  multiplier = 1;
  unitAmt = 1;
  rows = {
  
  };
  cart = [];

  totalBets() {
    let row1 = this.savePoint.data.row1;
    let row2 = this.savePoint.data.row2;
    let repeatedNums = row2.filter((element) => row1.includes(element));
    let repeat = repeatedNums.length;
    return row2.length * (row1.length - repeat) + repeat * (row2.length - 1);
  }

  pushToCart() {
    this.readyData.gameId = this.gameId;
    this.readyData.multiplier =this.multiplier;
    this.readyData.totalBets = this.totalBets();
    this.readyData.betAmt = this.actualBet();
    this.readyData.allSelections = super.allSelections(Object.values(this.rows), this.sample1, this.sample2);
    this.readyData.userSelections = Object.values(this.rows).join("|");
    this.cart.push(savePoint.readyData);
  }

  saveToRow(data, row)
  {
    if (Array.isArray(data)) this.rows[row] = data;
    else 
    {
      this.rows[row] = this.rows[row]||[];
      let numIndex = this.rows[row].indexOf(data);
      if (numIndex != -1) this.rows[row].splice(numIndex, 1);
      else this.rows[row].push(data);
    }
  }

  getCart()
  {
    return this.cart;
  }

  getAllRows()
  {
    return this.rows;
  }

  getMultiplier()
  {
    return this.multiplier;
  }

  getBetAmt()
  {
    return this.betAmt;
  }

  setMultiplier(multiplier)
  {
    this.multiplier = multiplier;
  }

  setBetAmt(amt)
  {
    this.amt = amt;
  }

  setUnitAmt(unitAmt)
  {
    this.unitAmt = unitAmt;
  }

  getUnitAmt()
  {
    return this.unitAmt();
  }

  calcUnitAmt() {
    let amt, totalBets, eachBet;
    amt = this.betAmt();
    totalBets = this.totalBets();
    eachBet = amt / totalBets;
    eachBet = eachBet.toFixed(3);
    return parseFloat(eachBet);
  }

  actualBet() {
    return this.unitAmt() * this.totalBets();
  }

  getRow(row)
  {
    return this.rows[row];
  }

}




let game = new group5();
let classNames = {
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
  multiplierSelect:'.multiplier-select',
  unitAmt:'.unit-amt',
  eachBetShow:'.each-bet',
  totalBetShow:'.total-bet',
  totalBetAmtShow:'.totalAmt',
  multiValue: '.multiplier-input',
  cartBtn:'.cart-btn',
  betNowBtn:'.betNow-btn',
  numBtn: '.num'
};



let savePoint = {
  cart:[],
  data:{
    // row1,
    // row2
  }
}


 game.$(classNames.allBtn).click(function(){
    let data = [0,1,2,3,4,5,6,7,8,9];
    let row = $(this).parent().attr('data-points-to');
    game.selectAll(`.${row}`);
    game.saveToRow(data, row);
  });


 game.$(classNames.bigBtn).click(function(){
    let data = [5,6,7,8,9];
    let row = $(this).parent().attr('data-points-to');
    game.selectBig(`.${row}`);
    game.saveToRow(data, row);
  });


 game.$(classNames.smallBtn).click(function(){
    let data = [0,1,2,3,4];
    let row = $(this).parent().attr('data-points-to');
    game.selectSmall(`.${row}`);
    game.saveToRow(data, row);
  });


 game.$(classNames.oddBtn).click(function(){
    let data = [1,3,5,7,9];
    let row = $(this).parent().attr('data-points-to');
    game.selectOdd(`.${row}`);
    game.saveToRow(data, row);
  });

 game.$(classNames.evenBtn).click(function(){
    let data = [0,2,4,6,8];
    let row = $(this).parent().attr('data-points-to');
    game.selectEven(`.${row}`);
    savePoint.data[row] = data;
    game.saveToRow(data, row);
  });


  game.$('.num').click(function(){
    $(this).toggleClass('default');
    let btnValue = parseInt($(this).children().html());
    let classNames = $(this).attr('class');
    let row  = game.getRowFromClass(classNames);
    game.saveToRow(btnValue, row);
    console.log(game.getAllRows());
    // let req=$.post('index.php', {name:'kofi'});
    // req.done(function(){alert('done')})
    // req.fail(function(){alert('failed')})
    // let req = $.get('rand.php',function(data, status){
    //     alert("data: "+data +"\nStatus: "+ status);
    // })
    // req.fail(function(){alert('failed')})
  })

 game.$(classNames.clearBtn).click(function(){
    let data = [];
    let row = $(this).parent().attr('data-points-to');
    game.clear(`.${row}`);
    savePoint.data[row] = data;
    game.saveToRow(data, row);
  });

  
  game.$(classNames.multiplierSelect).click(function(){
      $(classNames.multiplierSelect).removeClass('money-bg');
      game.$(this).addClass('money-bg');
      let value = $(this).val();
      game.setMultiplier(value);
 });

 game.$(classNames.unitAmt).click(function(){
      $(classNames.unitAmt).removeClass('money-bg');
      game.$(this).addClass('money-bg');
      let value = $(this).val();
      game.setUnitAmt(value);
 });


 game.$('.multiplier-input').click(function(){
  let multiplier = game.getMultiplier();
  $(this).val(multiplier);
  $(this).select();
 })

 game.$('input.bet-amt').click(function(){
  let betAmt = game.getBetAmt();
  $(this).val(betAmt);
  $(this).select();
  game.$('.unit-bet').removeClass('money-bg');
  game.$('.multiplier-select').removeClass('money-bg');
 })

 game.$('.bet-amt').on('input', function(){
  let onlyNums = parseInt($(this).val().replace(/\D+/g, ''));
  onlyNums = onlyNums ? onlyNums:1;
  onlyNums = onlyNums>=9999?9999:onlyNums;
  $(this).val(onlyNums);
 })

 game.$('.bet-amt').on('blur', function(){ 
    let value = parseInt($(this).val());
    game.setBetAmt(value);
    let unitAmt = game.getUnitAmt();
    game.$('.multiplier-input').val(multiplier);
    game.$('.multiplier-select[value="1"]').click();
    game.$(`.unit-amt[value=${unitAmt}`).click();  
})

 game.$('.multiplier-input').on('input', function(){
  let onlyNums = parseInt($(this).val().replace(/\D+/g, ''));
  onlyNums = onlyNums ? onlyNums:1;
  $(this).val(onlyNums);
  $('.bet-amt').val('-');
 })

 game.$('.multiplier-input').on('blur', function(){
  let value = parseInt($(this).val());
  game.setMultiplier(value);
 })

 game.$('.plus').click(function(){
  game.increaseMultiplier(classNames.multiValue);
  $(this).addClass('money-bg');
  setTimeout(function(){
    $('.plus').removeClass('money-bg')
  }, 50);
 })

 game.$('.minus').click(function(){
  game.decreaseMultiplier(classNames.multiValue);
  $(this).addClass('money-bg');
  setTimeout(function(){
    $('.minus').removeClass('money-bg')
  }, 50);
 })


game.$('.cart').click(function(){
  game.pushToCart();
})

game.$('.bet-now').click(function(){
  let data = game.getData();
  let url = '';
  let req=$.post(url, data);
  req.done();
  req.fail(alert('An error occured, make sure your URL is correct and try again.'));
})


function pushToCart()
{
  savepoint.readyData.gameId = game.gameId();
  savePoint.readyData.multiplier = game.getMultiplier();
  savePoint.readyData.totalBets = game.totalBets();
  savepoint.readyData.unitAmt = game.unitAmt();
  savepoint.readyData.betAmt = game.betAmt();
  savepoint.readyData.unitAmt = game.unitAmt();
  savepoint.readyData.allSelections = game.allSelections();
  savepoint.readyData.userSelections = game.gameId();

  savePoint.cart.push(savePoint.readyData);
}

game.$('.least-bet').hide();



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
