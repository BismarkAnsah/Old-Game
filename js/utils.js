import * as $C from "../libs/combinatorics.js";
export default class Royal5Utils {
  numberBtns = {
    
  };

  classNames = {
    
  };

  getBtnValue(btn) {
    return btn.firstChild.innerHTML;
  }

  changeBtnColor(btn) {
    btn.classList.toggle("on");
  }

  showTotalBets() {
    let betValueElement = this.getElement(".totalBets");
    betValueElement.innerHTML = this.totalBets();
  }

  toggleSaveNumber(element) {
    let location = element.classList.contains("row1")
      ? this.numsClicked.row1
      : this.numsClicked.row2;
    let btnValue = parseInt(this.getBtnValue(element));
    let numIndex = location.indexOf(btnValue);
    if (numIndex != -1) location.splice(numIndex, 1);
    else location.push(btnValue);
  }

  getRowClassByElement(element) {
    return element.classList.contains("row1") ? "row1" : "row2";
  }
  getRowNumberByElement(element) {
    return element.classList.contains("row1") ? 1 : 2;
  }

  clear(clearBtn) {
    let rowClass = this.getRowClassByElement(clearBtn);
    let elements = this.getElements(`.${rowClass}.on`);
    elements.forEach((element) => element.click());
  }

  numberClickedClass = "on";

  selectSmall(selectSmallBtn) {
    let rowClass = this.getRowClassByElement(selectSmallBtn);
    let elements = this.getElements(`.${rowClass}.small`);
    this.clear(selectSmallBtn);
    elements.forEach((element) => element.click());
  }

  selectBig(selectBigBtn) {
    let rowClass = this.getRowClassByElement(selectBigBtn);
    let elements = this.getElements(`.${rowClass}.big`);
    this.clear(selectBigBtn);
    elements.forEach((element) => element.click());
  }

  selectOdd(selectOddBtn) {
    let rowClass = this.getRowClassByElement(selectOddBtn);
    let elements = this.getElements(`.${rowClass}.odd`);
    this.clear(selectOddBtn);
    elements.forEach((element) => element.click());
  }
  selectEven(selectEvenBtn) {
    let rowClass = this.getRowClassByElement(selectEvenBtn);
    let elements = this.getElements(`.${rowClass}.even`);
    this.clear(selectEvenBtn);
    elements.forEach((element) => element.click());
  }

  selectAll(selectAllBtn) {
    let rowClass = this.getRowClassByElement(selectAllBtn);
    let elements = this.getElements(`.${rowClass}.button`);
    this.clear(selectAllBtn);
    elements.forEach((element) => element.click());
  }

  getElements(className) {
    return document.querySelectorAll(className);
  }

  getElement(idName) {
    return document.querySelector(idName);
  }

  addClickToElements(elements, callback) {
    elements.forEach((element) => {
      element.addEventListener("click", (element) => {
        callback(element);
      });
    });
  }

  sendData(url, data, headers = "") {
    let options = {
      url: url,
      method: "POST",
      headers: headers,
      data: data,
    };
    axios(options).then((response) => {
      return response;
    });
  }

  getData(url) {
    axios.get(url).then((response) => console.log(response.data));
  }

  generateSelections(allowRepeat = false, ...rowsAndSamples) {
    let rows = [],
      samples = [],
      perms = [],
      results = [];

    //dividing rows and samples
    rowsAndSamples.forEach((element) => {
      Array.isArray(element) ? rows.push(element) : samples.push(element);
    });

    if (rows.length != samples.length) return -1;

    //perming rows
    let comb, val;
    rows.forEach((element, index) => {
      comb = new $C.Combination(element, samples[index]);
      for (val of comb) perms.push(val);
    });
    // getting non-repeating lists
    let startCheck = this.getCombination(rows[0].length, samples[0]);
    let i, j, permsSize;
    permsSize = perms.length;
    if (!allowRepeat) {
      for (i = 0; i < startCheck; i++) {
        for (j = startCheck; j < permsSize; j++) {
          if (
            this.everyInArray(perms[j], perms[i]) ||
            this.everyInArray(perms[i], perms[j])
          ) {
            continue;
          }
          results.push([...perms[i], ...perms[j]]);
        }
      }
    } else {
      for (i = 0; i < startCheck; i++) {
        for (j = startCheck; j < permsSize; j++) {
          results.push([...perms[i], ...perms[j]]);
        }
      }
    }
    return results.length == 0 ? perms : results;
  }

  someInArray(array1, array2) {
    return array1.some((element) => {
      return array2.includes(element);
    });
  }

  everyInArray(array1, array2) {
    return array1.every((element) => {
      return array2.includes(element);
    });
  }

  sumArray(arr) {
    return arr.reduce((total, currentValue) => {
      return (total += currentValue);
    });
  }
  getCombination(n, r) {
    if (!(r >= 0 && n >= r)) return -1;
    return this.factorial(n) / (this.factorial(r) * this.factorial(n - r));
  }

  factorial(num) {
    if (num == 0) return 1;
    if (num < 0) return -1;
    let result = num;
    for (let i = num - 1; i > 1; i--) result *= i;
    return result;
  }
}
