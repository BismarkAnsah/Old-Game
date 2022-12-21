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
  constructor(pageId) {
    this.pageId = pageId;
    this.page = $(pageId);
  }


  
  $(element = "") {
    return element ? $(this.page).find(element) : this.$(this.pageId);
  }
getPageId()
{
  return this.pageId;
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


  truncate(number, decimalPlaces = 3) 
  {
    let indexOfDecimal = number.toString().indexOf(".");
    if(indexOfDecimal == -1)
      return number;
    let result = +number.toString().slice(0, indexOfDecimal + (decimalPlaces + 1));
    return parseFloat(result);
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


  disableButtons(disabled, ...btnSelectors)
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

getPageId()
{
  return this.pageId;
}
  /****validations */
  validateMoney() {}
}


class group5 extends Royal5utils {
  gameId = 9;
  sample1 = 1;
  sample2 = 1;
  multiplier = 1;
  unitAmt = 1;
  betAmt = '';
  rows = {
    row1:[],
    row2:[],
  };
  cart = [];
  readyData = {};
  constructor(pageId)
  {
    super(pageId);
  }
  calcTotalBets() {
      let row1 = this.rows.row1;
      let row2 = this.rows.row2;
      let repeatedNums = row2.filter((element) => row1.includes(element));
      let repeat = repeatedNums.length;
      return row2.length * (row1.length - repeat) + repeat * (row2.length - 1);
  }

  showBetsInfo()
  {
    let totalBets = this.calcTotalBets();
    let unitAmt = this.betAmt? this.calcUnitAmt(this.betAmt):this.unitAmt;
    if(!totalBets)
    {
      super.$('div.least-bet').show();
      super.$('div.bet-info').hide();
      super.disableButtons(true, '.cart', '.bet-now');
      return 0;
    }

    
    let multiplier = this.multiplier;
    // console.log(unitAmt);
    let actualAmt = super.truncate(totalBets * multiplier * unitAmt);
    super.$('span.total-bets').html(totalBets);
    super.$('span.unit-amt').html(unitAmt);
    super.$('span.actual-amt').html(actualAmt);
    super.$('div.least-bet').hide();
    super.$('div.bet-info').show();
    super.disableButtons(false, '.cart', '.bet-now');
    if(!unitAmt)
    super.disableButtons(true, '.cart', '.bet-now');
  }

  unsetBetAmt()
  {
    this.betAmt = '';
    super.$('input.bet-amt').val('');
  }
  pushToCart() {
 
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier =this.multiplier;
    let calc = this.calcTotalBets();
    this.readyData.allSelections = [];/*super.allSelections(Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = Object.values(this.rows).join("|");
    this.cart.push(this.readyData);
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

  resetAllData()
  {
    this.multiplier = 1;
    this.unitAmt = 1;
    this.betAmt = '';
    this.readyData = {};
    super.$('.clear-btn').click();
    super.$('input.bet-amt').val('');
    super.$('.multiplier-input').val(1);
    super.$('.multiplier-select').removeClass('money-bg');
    super.$('.multiplier-select[value="1"]').addClass('money-bg');
    super.$('.unit-amt').removeClass('money-bg');
    super.$('.unit-amt[value="1"]').addClass('money-bg');
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
    this.betAmt = amt;
  }

  setUnitAmt(amt)
  {
    this.unitAmt = amt;
  }

  getUnitAmt()
  {
    return this.unitAmt;
  }

  calcUnitAmt(betAmt) {
    betAmt = betAmt||0;
    let totalBets, unitAmt;
    totalBets = this.calcTotalBets();
    if(totalBets == 0)
      return totalBets;
    unitAmt = betAmt / totalBets;
    return super.truncate(unitAmt);
  }

  calcActualAmt() {
    return super.truncate(this.calcTotalBets() * this.unitAmt);
  }


  getRow(row)
  {
    return this.rows[row];
  }

}

class group10 extends Royal5utils {
  gameId = 8;
  sample1 = 1;
  sample2 = 1;
  multiplier = 1;
  unitAmt = 1;
  betAmt = '';
  rows = {
    row1:[],
    row2:[]
  };
  cart = [];
  readyData = {};
  constructor(pageId)
  {
    super(pageId);
  }
  calcTotalBets() {
    let row1 = this.rows.row1;
    let row2 = this.rows.row2;
    let repeatedNums = row2.filter(element => row1.includes(element));
    let repeat = repeatedNums.length;
    return row2.length * (row1.length - repeat ) + repeat * ( row2.length - 1 )
  }

  showBetsInfo()
  {
    let totalBets = this.calcTotalBets();
    let unitAmt = this.betAmt? this.calcUnitAmt(this.betAmt):this.unitAmt;
    if(!totalBets)
    {
      super.$('div.least-bet').show();
      super.$('div.bet-info').hide();
      super.disableButtons(true, '.cart', '.bet-now');
      return 0;
    }
    let multiplier = this.multiplier;
    // console.log(unitAmt);
    let actualAmt = super.truncate(totalBets * multiplier * unitAmt);
    super.$('span.total-bets').html(totalBets);
    super.$('span.unit-amt').html(unitAmt);
    super.$('span.actual-amt').html(actualAmt);
    super.$('div.least-bet').hide();
    super.$('div.bet-info').show();
    super.disableButtons(false, '.cart', '.bet-now');
    if(!unitAmt)
    super.disableButtons(true, '.cart', '.bet-now');
  }

  unsetBetAmt()
  {
    this.betAmt = '';
    super.$('input.bet-amt').val('');
  }
  pushToCart() {
 
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier =this.multiplier;
    let calc = this.calcTotalBets();
    this.readyData.allSelections = [];/*super.allSelections(Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = Object.values(this.rows).join("|");
    this.cart.push(this.readyData);
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

  resetAllData()
  {
    this.multiplier = 1;
    this.unitAmt = 1;
    this.betAmt = '';
    this.readyData = {};
    super.$('.clear-btn').click();
    super.$('input.bet-amt').val('');
    super.$('.multiplier-input').val(1);
    super.$('.multiplier-select').removeClass('money-bg');
    super.$('.multiplier-select[value="1"]').addClass('money-bg');
    super.$('.unit-amt').removeClass('money-bg');
    super.$('.unit-amt[value="1"]').addClass('money-bg');
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
    this.betAmt = amt;
  }

  setUnitAmt(amt)
  {
    this.unitAmt = amt;
  }

  getUnitAmt()
  {
    return this.unitAmt;
  }

  calcUnitAmt(betAmt) {
    betAmt = betAmt||0;
    let totalBets, unitAmt;
    totalBets = this.calcTotalBets();
    if(totalBets == 0)
      return totalBets;
    unitAmt = betAmt / totalBets;
    return super.truncate(unitAmt);
  }

  calcActualAmt() {
    return super.truncate(this.calcTotalBets() * this.unitAmt);
  }


  getRow(row)
  {
    return this.rows[row];
  }

}


class group20 extends Royal5utils {
  gameId = 7;
  sample1 = 1;
  sample2 = 2;
  multiplier = 1;
  unitAmt = 1;
  betAmt = '';
  rows = {
    row1:[],
    row2:[]
  };
  cart = [];
  readyData = {};
  constructor(pageId)
  {
    super(pageId);
  }
  calcTotalBets() {
      let row1 = this.rows.row1;
      let row2 = this.rows.row2;
      let repeatedNums = row2.filter(element => row1.includes(element));
      let repeat = repeatedNums.length;
      return row2.length * ( row2.length - 1 ) / 2  * (row1.length - repeat ) + repeat * ( row2.length - 1 ) * ( row2.length - 2 ) / 2
    }

    showBetsInfo()
  {
    let totalBets = this.calcTotalBets();
    let unitAmt = this.betAmt? this.calcUnitAmt(this.betAmt):this.unitAmt;
    if(!totalBets)
    {
      super.$('div.least-bet').show();
      super.$('div.bet-info').hide();
      super.disableButtons(true, '.cart', '.bet-now');
      return 0;
    }

    
    let multiplier = this.multiplier;
    // console.log(unitAmt);
    let actualAmt = super.truncate(totalBets * multiplier * unitAmt);
    super.$('span.total-bets').html(totalBets);
    super.$('span.unit-amt').html(unitAmt);
    super.$('span.actual-amt').html(actualAmt);
    super.$('div.least-bet').hide();
    super.$('div.bet-info').show();
    super.disableButtons(false, '.cart', '.bet-now');
    if(!unitAmt)
    super.disableButtons(true, '.cart', '.bet-now');
  }

  unsetBetAmt()
  {
    this.betAmt = '';
    super.$('input.bet-amt').val('');
  }
  pushToCart() {
 
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier =this.multiplier;
    let calc = this.calcTotalBets();
    this.readyData.allSelections = [];/*super.allSelections(Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = Object.values(this.rows).join("|");
    this.cart.push(this.readyData);
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

  resetAllData()
  {
    this.multiplier = 1;
    this.unitAmt = 1;
    this.betAmt = '';
    this.readyData = {};
    super.$('.clear-btn').click();
    super.$('input.bet-amt').val('');
    super.$('.multiplier-input').val(1);
    super.$('.multiplier-select').removeClass('money-bg');
    super.$('.multiplier-select[value="1"]').addClass('money-bg');
    super.$('.unit-amt').removeClass('money-bg');
    super.$('.unit-amt[value="1"]').addClass('money-bg');
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
    this.betAmt = amt;
  }

  setUnitAmt(amt)
  {
    this.unitAmt = amt;
  }

  getUnitAmt()
  {
    return this.unitAmt;
  }

  calcUnitAmt(betAmt) {
    betAmt = betAmt||0;
    let totalBets, unitAmt;
    totalBets = this.calcTotalBets();
    if(totalBets == 0)
      return totalBets;
    unitAmt = betAmt / totalBets;
    return super.truncate(unitAmt);
  }

  calcActualAmt() {
    return super.truncate(this.calcTotalBets() * this.unitAmt);
  }


  getRow(row)
  {
    return this.rows[row];
  }

  }

class group30 extends Royal5utils {
  gameId = 6;
  sample1 = 2;
  sample2 = 1;
  multiplier = 1;
  unitAmt = 1;
  betAmt = '';
  rows = {
    row1:[],
    row2:[]
  };
  cart = [];
  readyData = {};
  constructor(pageId)
  {
    super(pageId);
  }
  calcTotalBets() {
      let row1 = this.rows.row1;
      let row2 = this.rows.row2;
      let repeatedNums = row2.filter(element => row1.includes(element));
      let repeat = repeatedNums.length;
      return row1.length * ( row1.length - 1 ) / 2  * (row2.length - repeat ) + repeat * ( row1.length - 1 ) * ( row1.length - 2 ) / 2;
  }

  showBetsInfo()
  {
    let totalBets = this.calcTotalBets();
    let unitAmt = this.betAmt? this.calcUnitAmt(this.betAmt):this.unitAmt;
    if(!totalBets)
    {
      super.$('div.least-bet').show();
      super.$('div.bet-info').hide();
      super.disableButtons(true, '.cart', '.bet-now');
      return 0;
    }

    
    let multiplier = this.multiplier;
    // console.log(unitAmt);
    let actualAmt = super.truncate(totalBets * multiplier * unitAmt);
    super.$('span.total-bets').html(totalBets);
    super.$('span.unit-amt').html(unitAmt);
    super.$('span.actual-amt').html(actualAmt);
    super.$('div.least-bet').hide();
    super.$('div.bet-info').show();
    super.disableButtons(false, '.cart', '.bet-now');
    if(!unitAmt)
    super.disableButtons(true, '.cart', '.bet-now');
  }

  unsetBetAmt()
  {
    this.betAmt = '';
    super.$('input.bet-amt').val('');
  }
  pushToCart() {
 
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier =this.multiplier;
    let calc = this.calcTotalBets();
    this.readyData.allSelections = [];/*super.allSelections(Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = Object.values(this.rows).join("|");
    this.cart.push(this.readyData);
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

  resetAllData()
  {
    this.multiplier = 1;
    this.unitAmt = 1;
    this.betAmt = '';
    this.readyData = {};
    super.$('.clear-btn').click();
    super.$('input.bet-amt').val('');
    super.$('.multiplier-input').val(1);
    super.$('.multiplier-select').removeClass('money-bg');
    super.$('.multiplier-select[value="1"]').addClass('money-bg');
    super.$('.unit-amt').removeClass('money-bg');
    super.$('.unit-amt[value="1"]').addClass('money-bg');
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
    this.betAmt = amt;
  }

  setUnitAmt(amt)
  {
    this.unitAmt = amt;
  }

  getUnitAmt()
  {
    return this.unitAmt;
  }

  calcUnitAmt(betAmt) {
    betAmt = betAmt||0;
    let totalBets, unitAmt;
    totalBets = this.calcTotalBets();
    if(totalBets == 0)
      return totalBets;
    unitAmt = betAmt / totalBets;
    return super.truncate(unitAmt);
  }

  calcActualAmt() {
    return super.truncate(this.calcTotalBets() * this.unitAmt);
  }


  getRow(row)
  {
    return this.rows[row];
  }

}

class group60 extends Royal5utils {
  gameId = 5;
  sample1 = 1;
  sample2 = 3;
  multiplier = 1;
  unitAmt = 1;
  betAmt = '';
  rows = {
    row1:[],
    row2:[]
  };
  cart = [];
  readyData = {};
  constructor(pageId)
  {
    super(pageId);
  }
  calcTotalBets() {
      let row1 = this.rows.row1;
      let row2 = this.rows.row2;
      let repeatedNums = row2.filter(element => row1.includes(element));
      let repeat = repeatedNums.length;
      return row2.length * ( row2.length - 1 ) * ( row2.length - 2 ) / 6     *   ( row1.length - repeat ) + repeat * ( row2.length - 1) * ( row2.length - 2 ) * ( row2.length - 3 ) / 6;
  }

  showBetsInfo()
  {
    let totalBets = this.calcTotalBets();
    let unitAmt = this.betAmt? this.calcUnitAmt(this.betAmt):this.unitAmt;
    if(!totalBets)
    {
      super.$('div.least-bet').show();
      super.$('div.bet-info').hide();
      super.disableButtons(true, '.cart', '.bet-now');
      return 0;
    }

    
    let multiplier = this.multiplier;
    // console.log(unitAmt);
    let actualAmt = super.truncate(totalBets * multiplier * unitAmt);
    super.$('span.total-bets').html(totalBets);
    super.$('span.unit-amt').html(unitAmt);
    super.$('span.actual-amt').html(actualAmt);
    super.$('div.least-bet').hide();
    super.$('div.bet-info').show();
    super.disableButtons(false, '.cart', '.bet-now');
    if(!unitAmt)
    super.disableButtons(true, '.cart', '.bet-now');
  }

  unsetBetAmt()
  {
    this.betAmt = '';
    super.$('input.bet-amt').val('');
  }
  pushToCart() {
 
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier =this.multiplier;
    let calc = this.calcTotalBets();
    this.readyData.allSelections = [];/*super.allSelections(Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = Object.values(this.rows).join("|");
    this.cart.push(this.readyData);
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

  resetAllData()
  {
    this.multiplier = 1;
    this.unitAmt = 1;
    this.betAmt = '';
    this.readyData = {};
    super.$('.clear-btn').click();
    super.$('input.bet-amt').val('');
    super.$('.multiplier-input').val(1);
    super.$('.multiplier-select').removeClass('money-bg');
    super.$('.multiplier-select[value="1"]').addClass('money-bg');
    super.$('.unit-amt').removeClass('money-bg');
    super.$('.unit-amt[value="1"]').addClass('money-bg');
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
    this.betAmt = amt;
  }

  setUnitAmt(amt)
  {
    this.unitAmt = amt;
  }

  getUnitAmt()
  {
    return this.unitAmt;
  }

  calcUnitAmt(betAmt) {
    betAmt = betAmt||0;
    let totalBets, unitAmt;
    totalBets = this.calcTotalBets();
    if(totalBets == 0)
      return totalBets;
    unitAmt = betAmt / totalBets;
    return super.truncate(unitAmt);
  }

  calcActualAmt() {
    return super.truncate(this.calcTotalBets() * this.unitAmt);
  }


  getRow(row)
  {
    return this.rows[row];
  }

}

class group120 extends Royal5utils {
  gameId = 4;
  sample1 = 5;
  multiplier = 1;
  unitAmt = 1;
  betAmt = '';
  rows = {
    row1:[]
  };
  cart = [];
  readyData = {};
  constructor(pageId)
  {
    super(pageId);
  
    console.log(this.getPageId());
  }

  
  calcTotalBets()
  {     let row1 = this.rows.row1;
        let len = row1.length;
        return (len * (len - 1) * (len - 2) * (len - 3) * (len - 4)) / 120;
  }

  showBetsInfo()
  {
    let totalBets = this.calcTotalBets();
    let unitAmt = this.betAmt? this.calcUnitAmt(this.betAmt):this.unitAmt;
    if(!totalBets)
    {
      super.$('div.least-bet').show();
      super.$('div.bet-info').hide();
      super.disableButtons(true, '.cart', '.bet-now');
      return 0;
    }

    
    let multiplier = this.multiplier;
    // console.log(unitAmt);
    let actualAmt = super.truncate(totalBets * multiplier * unitAmt);
    super.$('span.total-bets').html(totalBets);
    super.$('span.unit-amt').html(unitAmt);
    super.$('span.actual-amt').html(actualAmt);
    super.$('div.least-bet').hide();
    super.$('div.bet-info').show();
    super.disableButtons(false, '.cart', '.bet-now');
    if(!unitAmt)
    super.disableButtons(true, '.cart', '.bet-now');
  }

  unsetBetAmt()
  {
    this.betAmt = '';
    super.$('input.bet-amt').val('');
  }
  pushToCart() {
 
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier =this.multiplier;
    let calc = this.calcTotalBets();
    this.readyData.allSelections = [];/*super.allSelections(Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = Object.values(this.rows).join("|");
    this.cart.push(this.readyData);
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

  resetAllData()
  {
    this.multiplier = 1;
    this.unitAmt = 1;
    this.betAmt = '';
    this.readyData = {};
    super.$('.clear-btn').click();
    super.$('input.bet-amt').val('');
    super.$('.multiplier-input').val(1);
    super.$('.multiplier-select').removeClass('money-bg');
    super.$('.multiplier-select[value="1"]').addClass('money-bg');
    super.$('.unit-amt').removeClass('money-bg');
    super.$('.unit-amt[value="1"]').addClass('money-bg');
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
    this.betAmt = amt;
  }

  setUnitAmt(amt)
  {
    this.unitAmt = amt;
  }

  getUnitAmt()
  {
    return this.unitAmt;
  }

  calcUnitAmt(betAmt) {
    betAmt = betAmt||0;
    let totalBets, unitAmt;
    totalBets = this.calcTotalBets();
    if(totalBets == 0)
      return totalBets;
    unitAmt = betAmt / totalBets;
    return super.truncate(unitAmt);
  }

  calcActualAmt() {
    return super.truncate(this.calcTotalBets() * this.unitAmt);
  }


  getRow(row)
  {
    return this.rows[row];
  }

}

class groupJoint extends Royal5utils {

  gameId = 1;
  // sample1 = 1;
  // sample2 = 1;
  multiplier = 1;
  unitAmt = 1;
  betAmt = '';
  rows = {
    row1:[],
    row2:[],
    row3:[],
    row4:[],
    row5:[]
  };
  cart = [];
  readyData = {};
  constructor(pageId)
  {
    super(pageId);
    console.log(this.getPageId());
  }
  calcTotalBets() {
    console.log(this.rows);
    let row1 = this.rows.row1.length;
    let row2 = this.rows.row2.length;
    let row3 = this.rows.row3.length;
    let row4 = this.rows.row4.length;
    let row5 = this.rows.row5.length;
    return row1 * row2 * row3 * row4 * row5;
  }
  showBetsInfo()
  {
    let totalBets = this.calcTotalBets();
    let unitAmt = this.betAmt? this.calcUnitAmt(this.betAmt):this.unitAmt;
    if(!totalBets)
    {
      super.$('div.least-bet').show();
      super.$('div.bet-info').hide();
      super.disableButtons(true, '.cart', '.bet-now');
      return 0;
    }

    
    let multiplier = this.multiplier;
    // console.log(unitAmt);
    let actualAmt = super.truncate(totalBets * multiplier * unitAmt);
    super.$('span.total-bets').html(totalBets);
    super.$('span.unit-amt').html(unitAmt);
    super.$('span.actual-amt').html(actualAmt);
    super.$('div.least-bet').hide();
    super.$('div.bet-info').show();
    super.disableButtons(false, '.cart', '.bet-now');
    if(!unitAmt)
    super.disableButtons(true, '.cart', '.bet-now');
  }

  unsetBetAmt()
  {
    this.betAmt = '';
    super.$('input.bet-amt').val('');
  }
  pushToCart() {
 
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier =this.multiplier;
    let calc = this.calcTotalBets();
    this.readyData.allSelections = [];/*super.allSelections(Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = Object.values(this.rows).join("|");
    this.cart.push(this.readyData);
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

  resetAllData()
  {
    this.multiplier = 1;
    this.unitAmt = 1;
    this.betAmt = '';
    this.readyData = {};
    super.$('.clear-btn').click();
    super.$('input.bet-amt').val('');
    super.$('.multiplier-input').val(1);
    super.$('.multiplier-select').removeClass('money-bg');
    super.$('.multiplier-select[value="1"]').addClass('money-bg');
    super.$('.unit-amt').removeClass('money-bg');
    super.$('.unit-amt[value="1"]').addClass('money-bg');
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
    this.betAmt = amt;
  }

  setUnitAmt(amt)
  {
    this.unitAmt = amt;
  }

  getUnitAmt()
  {
    return this.unitAmt;
  }

  calcUnitAmt(betAmt) {
    betAmt = betAmt||0;
    let totalBets, unitAmt;
    totalBets = this.calcTotalBets();
    if(totalBets == 0)
      return totalBets;
    unitAmt = betAmt / totalBets;
    return super.truncate(unitAmt);
  }

  calcActualAmt() {
    return super.truncate(this.calcTotalBets() * this.unitAmt);
  }


  getRow(row)
  {
    return this.rows[row];
  }

}

class groupManual extends Royal5utils {
  gameId = 2;
  sample1 = 1;
  sample2 = 1;
  multiplier = 1;
  unitAmt = 1;
  betAmt = '';
  rows = {
    row1:[],
    row2:[],
    row3:[],
    row4:[],
    row5:[]
  };
  cart = [];
  readyData = {};
  constructor(pageId)
  {
    super(pageId);
  }
  calcTotalBets() {
    console.log(this.rows);
    let row1 = this.rows.row1.length;
    let row2 = this.rows.row2.length;
    let row3 = this.rows.row3.length;
    let row4 = this.rows.row4.length;
    let row5 = this.rows.row5.length;
    return row1 * row2 * row3 * row4 * row5;
  }
  showBetsInfo()
  {
    let totalBets = this.calcTotalBets();
    let unitAmt = this.betAmt? this.calcUnitAmt(this.betAmt):this.unitAmt;
    if(!totalBets)
    {
      super.$('div.least-bet').show();
      super.$('div.bet-info').hide();
      super.disableButtons(true, '.cart', '.bet-now');
      return 0;
    }

    
    let multiplier = this.multiplier;
    // console.log(unitAmt);
    let actualAmt = super.truncate(totalBets * multiplier * unitAmt);
    super.$('span.total-bets').html(totalBets);
    super.$('span.unit-amt').html(unitAmt);
    super.$('span.actual-amt').html(actualAmt);
    super.$('div.least-bet').hide();
    super.$('div.bet-info').show();
    super.disableButtons(false, '.cart', '.bet-now');
    if(!unitAmt)
    super.disableButtons(true, '.cart', '.bet-now');
  }

  unsetBetAmt()
  {
    this.betAmt = '';
    super.$('input.bet-amt').val('');
  }
  pushToCart() {
 
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier =this.multiplier;
    let calc = this.calcTotalBets();
    this.readyData.allSelections = [];/*super.allSelections(Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = Object.values(this.rows).join("|");
    this.cart.push(this.readyData);
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

  resetAllData()
  {
    this.multiplier = 1;
    this.unitAmt = 1;
    this.betAmt = '';
    this.readyData = {};
    super.$('.clear-btn').click();
    super.$('input.bet-amt').val('');
    super.$('.multiplier-input').val(1);
    super.$('.multiplier-select').removeClass('money-bg');
    super.$('.multiplier-select[value="1"]').addClass('money-bg');
    super.$('.unit-amt').removeClass('money-bg');
    super.$('.unit-amt[value="1"]').addClass('money-bg');
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
    this.betAmt = amt;
  }

  setUnitAmt(amt)
  {
    this.unitAmt = amt;
  }

  getUnitAmt()
  {
    return this.unitAmt;
  }

  calcUnitAmt(betAmt) {
    betAmt = betAmt||0;
    let totalBets, unitAmt;
    totalBets = this.calcTotalBets();
    if(totalBets == 0)
      return totalBets;
    unitAmt = betAmt / totalBets;
    return super.truncate(unitAmt);
  }

  calcActualAmt() {
    return super.truncate(this.calcTotalBets() * this.unitAmt);
  }


  getRow(row)
  {
    return this.rows[row];
  }

}


class groupCombo extends Royal5utils {
  gameId = 3;
  // sample1 = 1;
  // sample2 = 1;
  multiplier = 1;
  unitAmt = 1;
  betAmt = '';
  rows = {
    row1:[],
    row2:[],
    row3:[],
    row4:[],
    row5:[]
  };
  cart = [];
  readyData = {};
  constructor(pageId)
  {
    super(pageId);
  }
  calcTotalBets() {
    console.log(this.rows);
    let row1 = this.rows.row1.length;
    let row2 = this.rows.row2.length;
    let row3 = this.rows.row3.length;
    let row4 = this.rows.row4.length;
    let row5 = this.rows.row5.length;
    return row1 * row2 * row3 * row4 * row5 * 5;
  }
  showBetsInfo()
  {
    let totalBets = this.calcTotalBets();
    let unitAmt = this.betAmt? this.calcUnitAmt(this.betAmt):this.unitAmt;
    if(!totalBets)
    {
      super.$('div.least-bet').show();
      super.$('div.bet-info').hide();
      super.disableButtons(true, '.cart', '.bet-now');
      return 0;
    }

    
    let multiplier = this.multiplier;
    // console.log(unitAmt);
    let actualAmt = super.truncate(totalBets * multiplier * unitAmt);
    super.$('span.total-bets').html(totalBets);
    super.$('span.unit-amt').html(unitAmt);
    super.$('span.actual-amt').html(actualAmt);
    super.$('div.least-bet').hide();
    super.$('div.bet-info').show();
    super.disableButtons(false, '.cart', '.bet-now');
    if(!unitAmt)
    super.disableButtons(true, '.cart', '.bet-now');
  }

  unsetBetAmt()
  {
    this.betAmt = '';
    super.$('input.bet-amt').val('');
  }
  pushToCart() {
 
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier =this.multiplier;
    let calc = this.calcTotalBets();
    this.readyData.allSelections = [];/*super.allSelections(Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = Object.values(this.rows).join("|");
    this.cart.push(this.readyData);
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

  resetAllData()
  {
    this.multiplier = 1;
    this.unitAmt = 1;
    this.betAmt = '';
    this.readyData = {};
    super.$('.clear-btn').click();
    super.$('input.bet-amt').val('');
    super.$('.multiplier-input').val(1);
    super.$('.multiplier-select').removeClass('money-bg');
    super.$('.multiplier-select[value="1"]').addClass('money-bg');
    super.$('.unit-amt').removeClass('money-bg');
    super.$('.unit-amt[value="1"]').addClass('money-bg');
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
    this.betAmt = amt;
  }

  setUnitAmt(amt)
  {
    this.unitAmt = amt;
  }

  getUnitAmt()
  {
    return this.unitAmt;
  }

  calcUnitAmt(betAmt) {
    betAmt = betAmt||0;
    let totalBets, unitAmt;
    totalBets = this.calcTotalBets();
    if(totalBets == 0)
      return totalBets;
    unitAmt = betAmt / totalBets;
    return super.truncate(unitAmt);
  }

  calcActualAmt() {
    return super.truncate(this.calcTotalBets() * this.unitAmt);
  }


  getRow(row)
  {
    return this.rows[row];
  }

}

let game = new group120('#group-120');
ready();
function ready(){
  
   console.log(game);
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
  betNowBtn:'.bet-now',
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
    game.showBetsInfo();
  });


 game.$(classNames.bigBtn).click(function(){
    let data = [5,6,7,8,9];
    let row = $(this).parent().attr('data-points-to');
    game.selectBig(`.${row}`);
    game.saveToRow(data, row);
    game.showBetsInfo();
  });


 game.$(classNames.smallBtn).click(function(){
    let data = [0,1,2,3,4];
    let row = $(this).parent().attr('data-points-to');
    game.selectSmall(`.${row}`);
    game.saveToRow(data, row);
    console.log(data);
    game.showBetsInfo();
  });


 game.$(classNames.oddBtn).click(function(){
    let data = [1,3,5,7,9];
    let row = $(this).parent().attr('data-points-to');
    game.selectOdd(`.${row}`);
    game.saveToRow(data, row);
    game.showBetsInfo();
  });

 game.$(classNames.evenBtn).click(function(){
    let data = [0,2,4,6,8];
    let row = $(this).parent().attr('data-points-to');
    game.selectEven(`.${row}`);
    savePoint.data[row] = data;
    game.saveToRow(data, row);
    game.showBetsInfo();
  });


  game.$('.num').click(function(){
    $(this).toggleClass('default');
    let btnValue = parseInt($(this).children().html());
    let classNames = $(this).attr('class');
    let row  = game.getRowFromClass(classNames);
    console.log(row, btnValue);
    game.saveToRow(btnValue, row);
    game.showBetsInfo();
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
    game.showBetsInfo();
  });

  
  game.$(classNames.multiplierSelect).click(function(){
      game.$(classNames.multiplierSelect).removeClass('money-bg');
      game.$(this).addClass('money-bg');
      let value = $(this).val();
      game.setMultiplier(value);
      game.$('.multiplier-input').val(value);
      game.unsetBetAmt();
      game.showBetsInfo();
 });

 game.$(classNames.unitAmt).click(function(){
      game.$(classNames.unitAmt).removeClass('money-bg');
      game.$(this).addClass('money-bg');
      let value = $(this).val();
      game.setUnitAmt(value);
      game.unsetBetAmt();
      game.showBetsInfo();
 });


 game.$('.multiplier-input').click(function(){
  $(this).select();
 })

 game.$('.multiplier-input').on('input', function(){
  let onlyNums = parseInt($(this).val().replace(/\D+/g, ''));
  onlyNums = onlyNums ? onlyNums:1;
  $(this).val(onlyNums);
  game.$(`.multiplier-select[value=${onlyNums}]`).click();
  game.unsetBetAmt();
  game.setMultiplier(onlyNums);
  game.showBetsInfo();
 })

 game.$('input.bet-amt').click(function(){
  let betAmt = game.betAmt;
  let unitAmt = game.betAmt?unitAmt:0;
  game.setUnitAmt(unitAmt);
  $(this).val(betAmt);
  $(this).select();
  game.$('.unit-amt').removeClass('money-bg');
  game.$('.multiplier-select[value="1"]').click();
 })

 game.$('input.bet-amt').on('input', function(){
  let onlyNums = parseInt($(this).val().replace(/\D+/g, ''));
  onlyNums = onlyNums ? onlyNums:'';
  onlyNums = onlyNums>=9999?9999:onlyNums;
  let unitAmt = game.calcUnitAmt(onlyNums);
  game.setUnitAmt(unitAmt);
  game.setBetAmt(onlyNums);
  $(this).val(onlyNums);
  game.showBetsInfo();
  console.log(game.getBetAmt());
 })

 game.$('.bet-amt').on('blur', function(){ 
   
})

 game.$('.plus').click(function(){
  game.increaseMultiplier(classNames.multiValue);
  $(this).addClass('money-bg');
  let value = game.$('.multiplier-input').val();
  setTimeout(function(){
    $('.plus').removeClass('money-bg')
  }, 50);
  game.setMultiplier(value);
  game.$('.multiplier-select').removeClass('money-bg');
  game.$(`.multiplier-select[value=${value}]`).click();
  game.showBetsInfo();
 })

 game.$('.minus').click(function(){
  game.decreaseMultiplier(classNames.multiValue);
  let value = game.$('.multiplier-input').val();
  $(this).addClass('money-bg');
  setTimeout(function(){
    $('.minus').removeClass('money-bg')
  }, 50);
  game.setMultiplier(value);
  game.$('.multiplier-select').removeClass('money-bg');
  game.$(`.multiplier-select[value=${value}]`).click();
  game.showBetsInfo();
 })


game.$('.cart').click(function(){
  game.pushToCart();
  game.resetAllData();
})

game.$('.bet-now').click(function(){
  game.pushToCart();
  let data = game.getCart();
  let url = 'den.kld';
  let req=$.post(url, data);
  req.done(function(){
    alert('failed');
    game.resetAllData();
  });
  req.fail(alert('An error occured, make sure your URL is correct and try again.'));
})


game.$('div.bet-info').hide();


function echo(...data)
{
  console.log(...data);
}

}


//display and hiding game type
function hideAllExcept(hideAll, except)
{
  $(hideAll).hide();
  $(except).show();
}


//menu selections
$('.menu').click(function(){
  $('.menu').removeClass('money-bg');
  $(this).addClass('money-bg');
  let pointsTo = $(this).attr('data-points-to');
  let className = $(this).attr('data-className');
  game = getClass(className, `#${pointsTo}`);
  ready();
  let hideAll = '.all5';
  let except  = `#${pointsTo}`;
  hideAllExcept(hideAll, except);
})

function getClass(className, classConstructor)
{
  let classes = {
    'groupJoint':new groupJoint(classConstructor),
    'groupManual':new groupManual(classConstructor),
    'groupCombo':new groupCombo(classConstructor),
    'group120':new group120(classConstructor),
    'group60':new group60(classConstructor),
    'group30':new group30(classConstructor),
    'group20':new group20(classConstructor),
    'group10':new group10(classConstructor),
    'group5':new group5(classConstructor)
  }
  return classes[className];
}