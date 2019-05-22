function isPalindromes(str) {
  let re = '';
  for (let i = str.length - 1; i >= 0; i -= 1) {
    re += str[i];
  } return (str === re);
}
module.exports = isPalindromes;
