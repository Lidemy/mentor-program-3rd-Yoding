const request = require('request');
const process = require('process');

const input = process.argv[2];
const index = process.argv[3];
const bookname = process.argv[4];
const wrong = 'Something was wrong, please check again.';

switch (input) {
  case 'list':
    request(
      'https://lidemy-book-store.herokuapp.com/books?_limit=20',
      (error, response, body) => {
        const json = JSON.parse(body);
        json.forEach((book) => {
          console.log(book.id + ' ' + book.name);
        });
      },
    );
    break;// 這是自己想到的純樸印出方式


  case 'read':
    request(`https://lidemy-book-store.herokuapp.com/books/${index}`,
      (error, response, body) => {
        const json = JSON.parse(body);
        (response.statusCode === 200) ? console.log(`${json.id} ${json.name}`) : console.log(wrong);
      });
    break;


  case 'delete':
    request.delete(`https://lidemy-book-store.herokuapp.com/books/${index}`,
      (error, response, body) => (response.statusCode === 200) ? console.log('Done') : console.log(wrong),
    );
    break;


  case 'create':
    request.post({
      url: 'https://lidemy-book-store.herokuapp.com/books/',
      form: {
        'name': `${process.argv[3]}`,
      },
    }, (err, response) => {
      (response.statusCode === 201) ? console.log('新增了名為：' + process.argv[3] + '的書') : console.log(wrong);
    });
    break;


  case 'update':
    request.patch({
      url: `https://lidemy-book-store.herokuapp.com/books/${index}`,
      form: {
        'name': `${bookname}`,
      },
    }, (err, response) => {
      (response.statusCode === 200) ? console.log('更新了名為：' + bookname + '的書') : console.log(wrong);
    });
    break;

  default:
    console.log('無法執行，請重新確認指令內容');
    break;
} /* 此份作業參考了部分ChihYang41同學的code，在此誌謝。 */
