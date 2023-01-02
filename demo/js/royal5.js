//draw numbers
import * as $C from "../js/combinatorics.js";
class Royal5utils {

  /***
   * 
   * README.md
   * 
   * methods use jQuery style selections.
   * parameter names use css selectors.
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

  appendRow(type, detail, bets, unit, multiplier, betAmt, index)
  {
    let cartItem = `<tr id="cart-row${index}">
    <th scope="row">${type}</th>
    <td>${detail}</td>
    <td>${bets}</td>
    <td>${unit}</td>
    <td>${multiplier}</td>
    <td>${betAmt}</td>
    <td><i class="del bx bxs-trash" id="del-${index}"></i></td>
    </tr>`;
    $(".cart-items").prepend(cartItem);
    $('#cart-submit').show();
    $('.clear-cart').show();
    // $(`del-${index}`).fadeIn('slow', function() { $(this).prepend(cartItem); });
  }

  removeRow(id)
  {
    let index = id.split("-")[1];
    $(`#cart-row${index}`).fadeOut(300, function() { $(this).remove(); });
    cart.splice(index,1);console.log(cart.length);
    if(!cart.length)
    {
    $('#cart-submit').hide();
    $('.clear-cart').hide();
    }
  }

  truncate(number, decimalPlaces = 3) 
  {
    let indexOfDecimal = number.toString().indexOf(".");
    if(indexOfDecimal == -1)
      return number;
    let result = +number.toString().slice(0, indexOfDecimal + (decimalPlaces + 1));
    return parseFloat(result);
  }
   everyInArray(array1, array2)
  {
    return array1.every(element=>{
          return array2.includes(element);
      });
  }
  
   getCombination(n, r){
      if(!(r>=0 && n>=r))
          return -1;
      return this.factorial(n)/(this.factorial(r)*this.factorial(n-r));
  }
   factorial(num){
      if(num == 0)
          return 1;
      if(num < 0 )
          return -1;
      let result = num;
      for(let i = num-1; i>1; i--)
          result *= i;
      return result;
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
    let startCheck = this.getCombination(rows[0].length, samples[0]);
    let i,j, permsSize;
    permsSize = perms.length;
      for (i = 0; i < startCheck; i++) {
        for (j = startCheck; j < permsSize; j++) {
          if (this.everyInArray(perms[j], perms[i]) || this.everyInArray(perms[i], perms[j])) {
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

  gameId = 9;
  type = 'All 5 group 5';
  sample1 = 1;
  sample2 = 1;
  multiplier = 1;
  unitAmt = 1;
  errorBets = 0;
  allBets = [];
  betAmt = '';
  rows = {};
  cart = [];
  readyData = {};

 
  setAllBets()
  {

    this.allBets = this.getBets();
  }

  alertErrBets()
  {
    if(this.errorBets)
    {
      this.$('.bet-box').val(this.allBets);
      alert("System Deleted Invalid Entries");
    }
  }

  getBets()
  {
    let bets = this.$('.bet-box').val().split(";");
    bets.forEach((element, index)=>{
      element = element.trim();
      bets[index] = element;
      let arrElement = element.split(',');
      let errors = 0;
      if(!this.isValidEntry(arrElement)){
        bets.splice(index,1);
        errors++;
      }
      this.errorBets = errors;
    });
    
    return bets;
  }  

  isValidEntry(entry)
  {
    if(entry.length != 5)
      return false;
    if(entry.some(value=>{
      return (isNaN(value) || isNaN(parseInt(value)));
    })) return false;

    return true;
  }
  
  unsetBetAmt()
  {
    this.betAmt = '';
    this.$('input.bet-amt').val('');
  }
  pushToCart() {
 
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier =this.multiplier;
    this.readyData.totalBets = this.calcTotalBets();
    this.readyData.allSelections = this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    /*this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = Object.values(this.rows).join("|");
    cart.push(this.readyData);
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
    this.$('.clear-btn').click();
    this.$('input.bet-amt').val('');
    this.$('.multiplier-input').val(1);
    this.$('.multiplier-select').removeClass('money-bg');
    this.$('.multiplier-select[value="1"]').addClass('money-bg');
    this.$('.unit-amt').removeClass('money-bg');
    this.$('.unit-amt[value="1"]').addClass('money-bg');
  }

  /**Getters */
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
    return this.truncate(unitAmt);
  }

  calcActualAmt() {
    return this.truncate(this.calcTotalBets() * this.unitAmt * this.multiplier);
  }


  getRow(row)
  {
    return this.rows[row];
  }

}


class group5 extends Royal5utils {
  gameId = 9;
  type = 'All 5 group 5';
  sample1 = 1;
  sample2 = 1;
  rows = {
    row1:[],
    row2:[],
  };

  constructor(pageId)
  {
    super(pageId);
  }

  pushToCart() {
 
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier =this.multiplier;
    this.readyData.totalBets = this.calcTotalBets();
    this.readyData.allSelections = this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    /*this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = Object.values(this.rows).join("|");
    cart.push(this.readyData);
  }

  saveToRow(data, row)
  {
    if (Array.isArray(data)) this.rows[row] = data;
    else 
    {
      this.rows[row] = this.rows[row]||[];
      let numIndex = this.rows[row].indexOf(data);
      numIndex != -1?this.rows[row].splice(numIndex, 1):this.rows[row].push(data);
    }
  }

}

class group10 extends Royal5utils {

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

  pushToCart() {
 
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier =this.multiplier;
    this.readyData.totalBets = this.calcTotalBets();
    this.readyData.allSelections = this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    /*this.allSelections(Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = Object.values(this.rows).join("|");
    cart.push(this.readyData);
  }


}


class group20 extends Royal5utils {
  gameId = 7;
  type = 'All 5 group 20';
  sample1 = 1;
  sample2 = 2;
  rows = {
    row1:[],
    row2:[]
  };
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

    
  pushToCart() {
 
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier =this.multiplier;
    this.readyData.totalBets = this.calcTotalBets();
    this.readyData.allSelections = this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    /*this.allSelections(Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = Object.values(this.rows).join("|");
    cart.push(this.readyData);
  }

  }



class group30 extends Royal5utils {
  gameId = 6;
  type = 'All 5 group 30';
  sample1 = 2;
  sample2 = 1;
  rows = {
    row1:[],
    row2:[]
  };
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

 
  pushToCart() {
 
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier =this.multiplier;
    this.readyData.totalBets = this.calcTotalBets();
    this.readyData.allSelections = this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    /*this.allSelections(Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = Object.values(this.rows).join("|");
    cart.push(this.readyData);
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

}

class group60 extends Royal5utils {
  gameId = 5;
  type = 'All 5 group 60';
  sample1 = 1;
  sample2 = 3;
  rows = {
    row1:[],
    row2:[]
  };
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

  pushToCart() {
 
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier =this.multiplier;
    this.readyData.totalBets = this.calcTotalBets();
    this.readyData.allSelections = this.allSelections(...Object.values(this.rows), this.sample1, this.sample2);
    /*this.allSelections(Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = Object.values(this.rows).join("|");
    cart.push(this.readyData);
  }

  }


class group120 extends Royal5utils {
  gameId = 4;
  type = 'All 5 group 120';
  sample1 = 5;
  rows = {
    row1:[]
  };

  constructor(pageId)
  {
    super(pageId);
  
  }

  calcTotalBets()
  {     let row1 = this.rows.row1;
        let len = row1.length;
        return (len * (len - 1) * (len - 2) * (len - 3) * (len - 4)) / 120;
  }


  pushToCart()
  {
    let index = cart.length;
    let type = this.type;
    let detail = this.readyData.userSelections;
    let bets = this.readyData.totalBets;
    let unit = this.readyData.unitStaked;
    let multiplier = `x${this.readyData.multiplier}`;
    let betAmt = `&#8373;${this.readyData.totalBetAmt}`;
    this.appendRow(type, detail, bets, unit, multiplier, betAmt, index);
    cart.push(this.readyData);
    this.readyData = {};
  }

}

class groupJoint extends Royal5utils {

  gameId = 1;
  type = 'All 5 Straight(Joint)';
  // sample1 = 1;
  // sample2 = 1;
  rows = {
    row1:[],
    row2:[],
    row3:[],
    row4:[],
    row5:[]
  };
  constructor(pageId)
  {
    super(pageId);
  }
  calcTotalBets() {
    let row1 = this.rows.row1.length;
    let row2 = this.rows.row2.length;
    let row3 = this.rows.row3.length;
    let row4 = this.rows.row4.length;
    let row5 = this.rows.row5.length;
    return row1 * row2 * row3 * row4 * row5;
  }

  pushToCart() {
 
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier =this.multiplier;
    this.readyData.totalBets = this.calcTotalBets();
    this.readyData.allSelections = []/*this.allSelections(Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = Object.values(this.rows).join("|");
    cart.push(this.readyData);
  }

}

class groupManual extends Royal5utils {
  gameId = 2;
  type = 'All 5 group Straight(Manual)';
  sample1 = 1;
  sample2 = 1;
  rows = {
    row1:[],
    row2:[],
    row3:[],
    row4:[],
    row5:[]
  };
  constructor(pageId)
  {
    super(pageId);
  }

  
  calcTotalBets()
  {
    return this.allBets.length;
  }


  pushToCart() {
 
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier =this.multiplier;
    this.readyData.totalBets = this.calcTotalBets();
    this.readyData.allSelections = this.allBets/*this.allSelections(Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = [];
    cart.push(this.readyData);
  }
 

}


class groupCombo extends Royal5utils {
  gameId = 3;
  type = 'All 5 Straight(Combo)';
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
      this.$('div.least-bet').show();
      this.$('div.bet-info').hide();
      this.disableButtons(true, '.cart', '.bet-now');
      return 0;
  }

    
    let multiplier = this.multiplier;
    // console.log(unitAmt);
    let actualAmt = this.truncate(totalBets * multiplier * unitAmt);
    this.$('span.total-bets').html(totalBets);
    this.$('span.unit-amt').html(unitAmt);
    this.$('span.actual-amt').html(actualAmt);
    this.$('div.least-bet').hide();
    this.$('div.bet-info').show();
    this.disableButtons(false, '.cart', '.bet-now');
    if(!unitAmt)
    this.disableButtons(true, '.cart', '.bet-now');
  }

  unsetBetAmt()
  {
    this.betAmt = '';
    this.$('input.bet-amt').val('');
  }
  pushToCart() {
 
    // console.log(this.unitAmt);
    // this.readyData.totalbetAmt = this.calcTotalBets();
    this.readyData.gameId = this.gameId;
    this.readyData.unitStaked = this.unitAmt;
    this.readyData.totalBetAmt = this.calcActualAmt();
    this.readyData.multiplier =this.multiplier;
    let calc = this.calcTotalBets();
    this.readyData.allSelections = []/*this.allSelections(Object.values(this.rows), this.sample1, this.sample2);*/
    this.readyData.userSelections = Object.values(this.rows).join("|");
    index = cart.length;
    cart.push(this.readyData);
    
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
    this.$('.clear-btn').click();
    this.$('input.bet-amt').val('');
    this.$('.multiplier-input').val(1);
    this.$('.multiplier-select').removeClass('money-bg');
    this.$('.multiplier-select[value="1"]').addClass('money-bg');
    this.$('.unit-amt').removeClass('money-bg');
    this.$('.unit-amt[value="1"]').addClass('money-bg');
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
    return this.truncate(unitAmt);
  }

  calcActualAmt() {
    return this.truncate(this.calcTotalBets() * this.unitAmt * this.multiplier);
  }


  getRow(row)
  {
    return this.rows[row];
  }

}


let lastId = 0;
let initializedClasses = [];
let cart = [];
let oldClass = 'group120';
let game = new group120('#group-120');
ready('group120');



function ready(className){
if(initializedClasses.includes(className)) 
{
    game.resetAllData();
    return 0;
}

function showBetsInfo()
{
  let totalBets = game.calcTotalBets();
  let unitAmt = game.getBetAmt()? game.calcUnitAmt(game.betAmt):game.getUnitAmt();
  if(!totalBets)
  {
    game.$('div.least-bet').show();
    game.$('div.bet-info').hide();
    game.disableButtons(true, '.cart', '.bet-now');
    return 0;
  }

  
  let multiplier = game.getMultiplier();
  // console.log(unitAmt);
  let actualAmt = game.truncate(totalBets * multiplier * unitAmt);
  game.$('span.total-bets').html(totalBets);
  game.$('span.unit-amt').html(unitAmt);
  game.$('span.actual-amt').html(actualAmt);
  game.$('div.least-bet').hide();
  game.$('div.bet-info').show();
  game.disableButtons(false, '.cart', '.bet-now');
  if(!unitAmt)
  game.disableButtons(true, '.cart', '.bet-now');
}


initializedClasses.push(className);
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

// $('.cart').hide();
// $('.cart-items').hide();

 game.$(classNames.allBtn).click(function(){
    let data = [0,1,2,3,4,5,6,7,8,9];
    
    let row = $(this).parent().attr('data-points-to');
    game.selectAll(`.${row}`);
    game.saveToRow(data, row);
    showBetsInfo();
  });


 game.$(classNames.bigBtn).click(function(){
    let data = [5,6,7,8,9];
    let row = $(this).parent().attr('data-points-to');
    game.selectBig(`.${row}`);
    game.saveToRow(data, row);
    showBetsInfo();
  });


 game.$(classNames.smallBtn).click(function(){
    let data = [0,1,2,3,4];
    let row = $(this).parent().attr('data-points-to');
    game.selectSmall(`.${row}`);
    game.saveToRow(data, row);
    console.log(data);
    showBetsInfo();
  });


 game.$(classNames.oddBtn).click(function(){
    let data = [1,3,5,7,9];
    let row = $(this).parent().attr('data-points-to');
    game.selectOdd(`.${row}`);
    game.saveToRow(data, row);
    showBetsInfo();
  });

 game.$(classNames.evenBtn).click(function(){
    let data = [0,2,4,6,8];
    let row = $(this).parent().attr('data-points-to');
    game.selectEven(`.${row}`);
    savePoint.data[row] = data;
    game.saveToRow(data, row);
    showBetsInfo();
  });


  game.$('.num').click(function(){
    $(this).toggleClass('default');
    let btnValue = parseInt($(this).children().html());
    let classNames = $(this).attr('class');
    let row  = game.getRowFromClass(classNames);
    console.log(row, btnValue);
    game.saveToRow(btnValue, row);
    showBetsInfo();
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
    showBetsInfo();
  });

  
  game.$(classNames.multiplierSelect).click(function(){
      game.$(classNames.multiplierSelect).removeClass('money-bg');
      game.$(this).addClass('money-bg');
      let value = $(this).val();
      game.setMultiplier(value);
      game.$('.multiplier-input').val(value);
      game.unsetBetAmt();
      showBetsInfo();
 });

 game.$(classNames.unitAmt).click(function(){
      game.$(classNames.unitAmt).removeClass('money-bg');
      game.$(this).addClass('money-bg');
      let value = $(this).val();
      game.setUnitAmt(value);
      game.unsetBetAmt();
      showBetsInfo();
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
  showBetsInfo();
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
  showBetsInfo();
  console.log(game.getBetAmt());
 })

 game.$('.bet-amt').on('blur', function(){ 
   
})

game.$('.bet-box').on('input',function(){
    game.setAllBets();
    showBetsInfo();
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
  showBetsInfo();
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
  showBetsInfo();
 })

game.$('.cart').click(function(){
  game.saveData();
  game.pushToCart();
  game.resetAllData();
})

game.$('.bet-now').click(function(){
  game.alertErrBets();
  game.saveData();
  let savedData = game.getSavedData();
  let data = JSON.stringify([savedData]);
  let url = '../nav.php';
    let req = $.post(url, data, function(response){
      console.log(response);
      response = JSON.parse(response);
if(response.title == 'success'){

  toastr.options.progressBar = true;
  toastr.success(response.message, response.title);
  game.resetAllData();
  cart = [];
}else{
  toastr.options.progressBar = true;
  toastr.warning(response.message, response.title);
  
}
     
    req.fail(function(){
      toastr.options.progressBar = true;
      toastr.warning('Please check your internet connection', 'Failed');
    })
    
  });
})

$('#cart-submit').click(function(){
  let data = JSON.stringify(cart);
  let url = '../nav.php';
  console.log(data);
    let req = $.post(url, data, function(response){
      console.log(response);
      response = JSON.parse(response);
if(response.title == 'success'){
  toastr.options.progressBar = true;
  toastr.success(response.message, response.title);
  $('.del').click();
}else{
  toastr.options.progressBar = true;
  toastr.warning(response.message, response.title);
}
    req.fail(function(){
      toastr.options.progressBar = true;
      toastr.warning('Please check your internet connection', 'Failed');
    })
    
  });
})

$('.clear-cart').click(function(){
  let res = confirm("Do you want to clear all bets in cart?");
  if(res)
  {
    $('.cart-items').empty();
    $('#cart-submit').hide();
    $('.clear-cart').hide();
    cart = [];
  }
})

game.$('div.bet-info').hide();


function echo(...data)
{
  console.log(...data);
}

}

$(document).on('click','.del', function(){

  // let deleteThisRow = $(this).closest("tr");
  // deleteThisRow.remove();


  let id = $(this).attr('id');
  game.removeRow(id);
})

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
  if(oldClass != className){
  oldClass = className;
  ready(className);
  let hideAll = '.all5';
  let except  = `#${pointsTo}`;
  hideAllExcept(hideAll, except);
  }
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


















$().ready(function(){
    // let url = '../generateRandom.php';
    let url = '../receiver.php?action=getdrawnumber';
    let data = {
      'last_id':lastId
    }
data = JSON.stringify(data);
    let req = $.post(url, data, function(response){
      response = JSON.parse(response);
       lastId = response.id;
      console.log(response);
      $('.wining_num').each(function(index){
        $(this).html(response.numbers[index]);
     })
  })
  req.fail(function(){console.log('failed')})
  })

 



  function drawNum()
  {
    // let url = '../generateRandom.php';
    let url =  '../receiver.php?action=getdrawnumber';
    let data = {
      'last_id':lastId
    }
    data = JSON.stringify(data);
    let req = $.post(url, data, function(response){
      response = JSON.parse(response);
      if(response.numbers){
        console.log(response);
        lastId = response.id;
      $('.wining_num').each(function(index){
        $(this).html(response.numbers[index]);
      })}
  })
  req.fail(function(){console.log('failed')})
  }
  

setInterval(drawNum, 30000);