function capitalize(str) {
  const upp = str.slice(0, 1);
  return upp.toUpperCase() + str.slice(1);
}

console.log(capitalize('hello'));
console.log(capitalize('nick'));
console.log(capitalize('Nick'));
console.log(capitalize('#Nick'));
console.log(capitalize('#123Nick'));
console.log(capitalize(''));
