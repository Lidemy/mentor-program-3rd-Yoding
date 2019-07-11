const view = document.querySelector('.view');
let temp = [];
let count = '';
let numFir = 0;
let numSec = 0;
// 歸零設定
function AC() {
  numFir = 0;
  numSec = 0;
  temp = [];
  count = [];
  view.innerText = (temp.join(''));
}
document.querySelector('.ac').addEventListener('click', () => { AC(); });

// count part
function btnClick() {
  document.addEventListener('click', (e) => {
    if (e.target.classList.contains('num')) {
      temp.push(e.target.innerText);
      view.innerText = (temp.join(''));
    }
    if (e.target.classList.contains('count')) {
      numFir = parseInt(temp.join(''), 10);
      temp = [];
      count = e.target.innerText;
    } else if (e.target.classList.contains('equal')) {
      numSec = parseInt(temp.join(''), 10);
      if (count === '+') {
        temp = (numFir + numSec);
      } else if (count === '-') {
        temp = (numFir - numSec);
      }
      view.innerText = temp;
    }
  });
}
btnClick();
