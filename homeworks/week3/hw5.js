function add(a, b) {
  let aStr = a.toString();
  let bStr = b.toString();
  let aAry = [];
  let bAry = [];
  const newarr = [];
  if (aStr.length < bStr.length) {
    aStr = '0'.repeat(bStr.length - aStr.length) + a;
  } else {
    bStr = '0'.repeat(aStr.length - bStr.length) + b;
  }
  aAry = aStr.split('').reverse();
  bAry = bStr.split('').reverse();
  // 陣列、反轉
  for (let i = 0; i < aAry.length; i += 1) {
    const result = 0;
    newarr[i] = ((Number(aAry[i]) + Number(bAry[i])));
    if (newarr[i] > 9) {
      newarr[i] -= 10;
      newarr[i - 1] += 1;
    }
  }
  return newarr.reverse().join('');
}
// 輸出數字不穩定
// 無法解決科學記號問題
module.exports = add;
