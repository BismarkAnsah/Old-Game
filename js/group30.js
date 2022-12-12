import * as $C from "../libs/combinatorics.js";
import Royal5 from "./utils.js";

(function () {
  class Group30 extends Royal5 {
    row1Sample = 2;
    row2Sample = 1;
    gameId = 4;
    numsClicked = {
      row1: [],
      row2: [],
    };

    getGameId() {
      return this.gameId;
    }
    totalBets() {
      let row1 = this.numsClicked.row1;
      let row2 = this.numsClicked.row2;
      let repeatedNums = row2.filter((element) => row1.includes(element));
      let repeat = repeatedNums.length;
      return (
        ((row1.length * (row1.length - 1)) / 2) * (row2.length - repeat) +
        (repeat * (row1.length - 1) * (row1.length - 2)) / 2
      );
    }
    getBetSelections() {
      let row1 = this.numsClicked.row1.join(",");
      let row2 = this.numsClicked.row2.join(",");
      return `${row1}|${row2}`;
    }
    generateSelections() {
      return super.generateSelections(
        false,
        this.numsClicked.row1,
        this.numsClicked.row2,
        this.row1Sample,
        this.row2Sample
      );
    }

    getSelectedNums() {
      return [this.numsClicked.row1, this.numsClicked.row2];
    }
  }

  /******  BEGIN  ******/
  //all these are html elements
  let group30 = new Group30();
  let allNums = [
    ...group30.getElements(".button.row1"),
    ...group30.getElements(".button.row2"),
  ];
  let submitBtn = group30.getElement(".submitBtn");
  let clearBtn1 = group30.getElement(".clearBtn.row1");
  let selectAllBtn1 = group30.getElement(".selectAllBtn.row1");
  let selectBigBtn1 = group30.getElement(".selectBigBtn.row1");
  let selectSmallBtn1 = group30.getElement(".selectSmallBtn.row1");
  let selectEvenBtn1 = group30.getElement(".selectEvenBtn.row1");
  let selectOddBtn1 = group30.getElement(".selectOddBtn.row1");

  let clearBtn2 = group30.getElement(".clearBtn.row2");
  let selectAllBtn2 = group30.getElement(".selectAllBtn.row2");
  let selectBigBtn2 = group30.getElement(".selectBigBtn.row2");
  let selectSmallBtn2 = group30.getElement(".selectSmallBtn.row2");
  let selectEvenBtn2 = group30.getElement(".selectEvenBtn.row2");
  let selectOddBtn2 = group30.getElement(".selectOddBtn.row2");

  /******  End  ******/

  allNums.forEach((num) => {
    num.addEventListener("click", () => {
      group30.changeBtnColor(num);
      group30.toggleSaveNumber(num);
      group30.showTotalBets();
    });
  });

  clearBtn1.addEventListener("click", () => {
    group30.clear(clearBtn1);
  });

  clearBtn2.addEventListener("click", () => {
    group30.clear(clearBtn2);
  });

  selectBigBtn1.addEventListener("click", () => {
    group30.selectBig(selectBigBtn1);
  });

  selectBigBtn2.addEventListener("click", () => {
    group30.selectBig(selectBigBtn2);
  });

  selectSmallBtn1.addEventListener("click", () => {
    group30.selectSmall(selectSmallBtn1);
  });

  selectSmallBtn2.addEventListener("click", () => {
    group30.selectSmall(selectSmallBtn2);
  });

  selectEvenBtn1.addEventListener("click", () => {
    group30.selectEven(selectEvenBtn1);
  });

  selectEvenBtn2.addEventListener("click", () => {
    group30.selectEven(selectEvenBtn2);
  });

  selectOddBtn1.addEventListener("click", () => {
    group30.selectOdd(selectOddBtn1);
  });

  selectOddBtn2.addEventListener("click", () => {
    group30.selectOdd(selectOddBtn2);
  });

  selectAllBtn1.addEventListener("click", () => {
    group30.selectAll(selectAllBtn1);
  });

  selectAllBtn2.addEventListener("click", () => {
    group30.selectAll(selectAllBtn2);
  });

  submitBtn.addEventListener("click", () => {
    let allSelections = group30.generateSelections();
    let url = "";
    let headers = "";
    let betSelections = group30.getBetSelections();
    let gameId = group30.getGameId();
    let data = {
      betSelection: betSelections,
      game_id: gameId,
      data: allSelections,
    };
    console.log(data);
    let options = {
      url: url,
      method: "POST",
      headers: headers,
      data: data,
    };
    axios(options).then((response) => {
      console.log(response);
    });
  });
})();
