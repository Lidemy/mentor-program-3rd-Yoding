const request = new XMLHttpRequest();
const submit = document.querySelector('.btn');
const oldMessage = document.querySelector('.old__message');
const input = document.querySelector('input');
let finalId;

function renderMessage(data) {
  oldMessage.innerHTML = '';
  for (let i = 0; i < data.length; i += 1) {
    const userID = data[i].id;
    const content = data[i].content;
    const div = document.createElement('div');
    oldMessage.appendChild(div);
    div.classList.add('message');
    div.innerHTML = `<div class = "userID">${userID} :</div></div>`
                  + `<div class = "text">${content}</div>`;
  }
}
// 顯示現有留言
function getMessage() {
  const limit = '_limit=20';
  const sort = '&_sort=id&_order=desc';
  request.open('GET', `https://lidemy-book-store.herokuapp.com/posts?${limit}${sort}`, true);
  request.onload = () => {
    if (request.status >= 200 && request.status < 400) {
      const data = JSON.parse(request.responseText);
      oldMessage.innerHTML = '';
      renderMessage(data);
      finalId = data.length + 1;
    } else {
      alert('error', request.status);
    }
  };
  request.send();
}
getMessage();
// 新增留言
submit.onclick = () => {
  const inputValueTemp = input.value;
  input.value = '';
  request.open('POST', 'https://lidemy-book-store.herokuapp.com/posts', true);
  request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  request.send(`content=${inputValueTemp}`);
  request.onload = () => {
    if (request.status >= 200 && request.status < 400) {
      console.log('sucessed!');
      const newMessage = document.createElement('div');
      newMessage.classList.add('message');
      newMessage.innerHTML = `<div class="userID">${finalId} : </div>`
                            + `<div class="text">${inputValueTemp}</div>`;
      document.querySelector('.new__message').prepend(newMessage);
      finalId += 1;
    } else {
      alert(`error: ${request.status}`);
    }
  };
};
