function join(str, concatStr) {
  if (str.length === 0) {
    return '';
  }

  let total = str[0];
  for (let i = 1; i < str.length; i += 1) {
    total += concatStr + str[i];
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
