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
      $(rowNums).addClass(effects);
    });
  }

  selectBig(triggeredBy, target, effects) {
    this.$(triggeredBy).click(() => {
      $(target).removeClass(effects);
      $(`${target}:nth-child(n+6)`).addClass(effects);
    });
  }

  selectSmall(triggeredBy, target, effects) {
    this.$(triggeredBy).click(() => {
      $(target).removeClass(effects);
      $(`${target}:nth-child(-n+5)`).addClass(effects);
    });
  }

  selectEven(triggeredBy, target, effects) {
    this.$(triggeredBy).click(() => {
      $(target).removeClass(effects);
      $(`${target}:nth-child(odd)`).addClass(effects);
      nums = [0, 2, 4, 6, 8];
      totalBets();
    });
  }

  selectOdd(triggeredBy, target, effects) {
    //odd
    this.$(triggeredBy).click(() => {
      $(target).removeClass(effects);
      $(`${target}:nth-child(even)`).addClass(effects);
      nums = [1, 3, 5, 7, 9];
      totalBets();
    });
  }

  clear(triggeredBy, target, effects) {
    //clear
    this.$(triggeredBy).click(() => {
      $(target).removeClass(effects);
    });
  }

  selectAmount(triggeredBy, target, effects)
  {
    this.$(triggeredBy).click(()=>{
        $(target).removeClass(effects);
        $(target).addClass(effects);
    })
  }

  selectMultiplier(triggeredBy, target, effects)
  {
    this.$(triggeredBy).click(()=>{
        $(target).removeClass(effects);
        $(target).addClass(effects);
    })
  }

  validateMoney() {}

  ready() {}
}
