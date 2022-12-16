class Royal5Utils {

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
    eachBetShow:'.each-bet',
    totalBetShow:'.total-bet',
    totalBetAmtShow:'.totalAmt',
    cartBtn:'.cart-btn',
    betNowBtn:'.betNow-btn'
  };

  savePoint = {

  }
  constructor() {
    this.page = $(this.pageId);
  }

  
  $(element = "") {
    return element ? $(this.page).find(element) : this.$(this.pageId);
  }

  selectAll(rowNum=this.classNames.row1Nums, effects='default') {
      this.$(rowNum).addClass(effects);
  }

  selectBig(rowNum=this.classNames.row1Nums, effects='default') {
      this.$(rowNum).removeClass(effects);
      this.$(`${rowNum}:nth-child(n+6)`).addClass(effects);
  }

  selectSmall(rowNum=this.classNames.row1Nums, effects='default') {
      this.$(rowNum).removeClass(effects);
      this.$(`${rowNum}:nth-child(-n+6)`).addClass(effects);
  }

  selectEven(rowNum=this.classNames.row1Nums, effects='default') {
      this.$(rowNum).removeClass(effects);
      this.$(`${rowNum}:nth-child(odd)`).addClass(effects);

  }

  selectOdd(rowNum, effects='default') {
      this.$(rowNum).removeClass(effects);
      this.$(`${rowNum}:nth-child(even)`).addClass(effects);
  }

  clear(rowNum, effects='default') {
      this.$(rowNum).removeClass(effects);
  }

  selectAmount(rowNum, effects='default')
  {
        this.$(rowNum).removeClass(effects);
        this.$(rowNum).addClass(effects);
  }

  selectMultiplier(target=this.classNames.multiplierBox, effects='default')
  {
        this.$(target).removeClass(effects);
        $(this).addClass(effects);
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

  increaseMultiplier(sMultiVal)
  {
    let multiValue = parseInt(this.getValue(sMultiVal));
    ++multiValue;
    this.$(sMultiVal).val(multiValue);
  }

  getValue(selector, parseInteger=true)
  {
    let value = this.$(selector).val();
    return parseInteger ? parseInt(value):value;
  }

  decreaseMultiplier(sMultiVal)
  {
    let multiValue = parseInt(this.getValue(sMultiVal));
    --multiValue;
    this.$(sMultiVal).val(multiValue);
  }


  activateButtons(disabled, ...btnSelectors)
  {
    btnSelectors.forEach(selector=>{
      this.$(selector).attr('disabled', disabled);
    })
  }

  /****validations */
  validateMoney() {}

  ready(){
    let self = this;

   self.$(self.classNames.allBtn).click(function(){
      let rowNum = $(this).parent().attr('data-points-to');
      console.log(rowNum);
      self.selectAll(`.${rowNum}`);
    });


   self.$(self.classNames.bigBtn).click(function(){
      let rowNum = $(this).parent().attr('data-points-to');
      self.selectBig(`.${rowNum}`);
    });


   self.$(self.classNames.smallBtn).click(function(){
      let rowNum = $(this).parent().attr('data-points-to');
      self.selectSmall(`.${rowNum}`);
    });


   self.$(self.classNames.oddBtn).click(function(){
      let rowNum = $(this).parent().attr('data-points-to');
      self.selectOdd(`.${rowNum}`);
    });

   self.$(self.classNames.evenBtn).click(function(){
      let rowNum = $(this).parent().attr('data-points-to');
      self.selectEven(`.${rowNum}`);
    });

   self.$(self.classNames.clearBtn).click(function(){
      let rowNum = $(this).parent().attr('data-points-to');
      self.clear(`.${rowNum}`);
    });

    
    self.$(self.classNames.multiplier).click(function(){
      console.log(self.$(self.classNames.multiplier));
      self.$(self.classNames.multiplier).removeClass('default');
      $(this).addClass('default');
   })

  }
}

let tryClass = new Royal5Utils();
tryClass.ready();
