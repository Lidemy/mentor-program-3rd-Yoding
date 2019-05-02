function reverse(str) {
  let i = str.length - 1;
  let print = '';
  while (i >= 0) {
    print += str[i];
    i -= 1;
  }
  return print;
}

console.log(reverse('hello'));
console.log(reverse('Asd'));
