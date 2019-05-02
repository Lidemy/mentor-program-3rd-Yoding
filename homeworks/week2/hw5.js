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

console.log(join('a', '!'));
console.log(join(['a', 'b', 'c'], '!!!'));
console.log(join(['a', 'b', 'c'], '!'));
console.log(repeat('a', 5));
console.log(repeat('232', 1));
