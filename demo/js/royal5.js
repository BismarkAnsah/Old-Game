class Royal5Utils {
  pageId = "#group-10";
  page;

  classNames = {
    
  };

  constructor() {
    this.page = $(this.pageId);
  }

  $(element = "") {
    return element ? $(this.page).find(element) : this.$(this.pageId);
  }

  selectAll(allBtn, rowNums, effects) {
    this.$(allBtn).click(() => {
      this.$(rowNums).addClass(effects);
    });
  }

  selectBig(triggeredBy, target, effects) {
    this.$(triggeredBy).click(() => {
      this.$(target).removeClass(effects);
      this.$(`${target}:nth-child(n+6)`).addClass(effects);
    });
  }

  selectSmall(triggeredBy, target, effects) {
    this.$(triggeredBy).click(() => {
      this.$(target).removeClass(effects);
      this.$(`${target}:nth-child(-n+5)`).addClass(effects);
    });
  }

  selectEven(triggeredBy, target, effects) {
    this.$(triggeredBy).click(() => {
      this.$(target).removeClass(effects);
      this.$(`${target}:nth-child(odd)`).addClass(effects);
    });
  }

  selectOdd(triggeredBy, target, effects) {
    //odd
    this.$(triggeredBy).click(() => {
      this.$(target).removeClass(effects);
      this.$(`${target}:nth-child(even)`).addClass(effects);
    });
  }

  clear(triggeredBy, target, effects) {
    //clear
    this.$(triggeredBy).click(() => {
      this.$(target).removeClass(effects);
    });
  }

  selectAmount(triggeredBy, target, effects)
  {
    this.$(triggeredBy).click(()=>{
        this.$(target).removeClass(effects);
        this.$(target).addClass(effects);
    })
  }

  selectMultiplier(triggeredBy, target, effects)
  {
    this.$(triggeredBy).click(()=>{
        this.$(target).removeClass(effects);
        this.$(target).addClass(effects);
    })
  }

  /******logics */
  totalAmt()
  {

  }

  totalBet()
  {

  }

  increaseMultiplier()
  {

  }

  decreaseMultiplier()
  {
    
  }

  /****validations */
  validateMoney() {}

  ready() {}
}
