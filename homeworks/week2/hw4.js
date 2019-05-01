function printFactor(n) {
  let i = 0;
  while (i <= n) {
    if (n % i === 0) {
      console.log(i);
    }
    i += 1;
  }
  return n;
}

printFactor(10);
