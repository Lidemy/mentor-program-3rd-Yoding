function join(str, concatStr) {
  let total = str[0];
  let i = 1;
  while (i < str.length) {
    total += concatStr + str[i];
    i += 1;
  }
  return total;
}


function repeat(str, times) {
  let print = '';
  for (let i = 1; i <= times; i += 1) {
    print += str;
  }
  return print;
}
/*
  寫這題和hw3時，只想到怎麼使用迴圈印出字，
  沒想到怎麼把字串連起來，卡了好久以後偷偷參考了別人的Code。
  */

console.log(join('a', '!'));
console.log(join(['a', 'b', 'c'], '!!!'));
console.log(join(['a', 'b', 'c'], '!'));
console.log(repeat('a', 5));
console.log(repeat('232', 1));
