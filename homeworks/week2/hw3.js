function reverse(str) {
  let print = '';
  for (let i = str.length - 1; i >= 0; i -= 1) {
    print += str[i];
  }
  console.log(print);
}

reverse('hello');
reverse('Asd');
