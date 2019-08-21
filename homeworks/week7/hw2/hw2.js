const level = document.getElementsByClassName('level');
const btn = document.querySelector('.btn');
const ans = [...document.querySelectorAll('.ans')];
const alert = [...document.querySelectorAll('.alert')];
let reply = {};
let blank = false;

// Eslint 阻擋了對參數再賦值，暫時為易讀性犧牲一下
function showRed(element) {
  element.style.backgroundColor = '#E8CCFF';
  element.style.borderBottom = '2px solid red';
  blank = true;
}

function normal(element) {
  element.style.backgroundColor = '#CCEEFF';
}

function printReply() {
  reply = `已收到
    email: ${document.querySelector('.email').value}
    nickname: ${document.querySelector('.nickname').value}
    level: ${document.querySelector('.level').value}
    background: ${document.querySelector('.background').value}
    others: ${document.querySelector('.others').value}`;
  window.alert('已收到您提交的回覆');
  console.log(reply);
}

function chk() {
  btn.addEventListener('click', () => {
    // 檢查文字題
    for (let i = 0; i < 3; i += 1) {
      if (ans[i].value.length < 1) {
        // console.log(alert[i].style)
        showRed(ans[i]);
        showRed(alert[i]);
      } else {
        normal(alert[i]);
        normal(ans[i]);
      }
    }  
      // 檢查單選題
      if (level[0].checked === false && level[1].checked === false) {
        showRed(document.querySelector('.level_box'));
      } else {
        normal(document.querySelector('.level_box'));
      }
    if (level[0].checked) {
      document.querySelector('.level').value = 1;
    } else if (level[1].checked) {
      document.querySelector('.level').value = 2;
    }
    // 警告或送出表單
    if (blank === true) {
      window.alert('請檢查填寫內容');
      blank = false;
    } else {
      printReply();
      // 暫時放下會清除刷新頁面的...document.querySelector('form').reset();
    }
  });
} chk();
