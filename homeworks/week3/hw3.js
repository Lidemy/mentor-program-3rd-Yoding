function isPrime(n) {
  if (n === 1) {
    return false;
  }
  if (n === 2) {
    return true;
  }
  for (let i = 2; i < n; i += 1) {
    return (n % i === 0);
  }
}
module.exports = isPrime;
