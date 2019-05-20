function stars(n) {
  let output = '';
  const ss = [];
  for (let i = 1; i <= n; i += 1) {
    output += '*';
    ss.push(output);
  }
  return ss;
}

module.exports = stars;
