function reverse(str) {
  let i = str.length;
  let print = '';
  while (i >= 0) {
    print += str[i];
    i -= 1;
  }
  return print;
}
/* 其實我得到的輸出前面都會加上「undefined」，
但我測不出undefined出現在哪，請指點 */
console.log(reverse('hello'));
console.log(reverse('Asd'));
