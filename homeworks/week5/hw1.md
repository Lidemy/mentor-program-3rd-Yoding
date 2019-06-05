

## 前四週心得與解題心得

>05/26 10:30

先自首，直到30分鐘前我才發現原來第五週還是有作業的，想了一下作業的心得要寫什麼。這一兩週看到不少同學做的精美筆記，再次發現學程式也得做筆記，不過一方面進度還是在走，所以前面的筆記什麼的就採分期償還，本複習週，想來面對那些做錯的題目或是卡著過不去的關，希望能有所斬獲。


### section 1 ：Week2 作業訂正
- 花了約莫 1 小時看了 W2 的作業題，和 W3 的質數題，發現主要的錯誤都來自對於 return 的不熟悉。
- ##Return

### section 2 : 大數加法
在複習周，重新面對之前解不開的大數加法問題，最早的版本如下：

```js
function non(a, b) {
    if (a < b) {[a, b] = [b, a]}//前大後小
    let bigStr = a.toString().split('').reverse();
    let smallStr = b.toString().split('').reverse();
    let distance = bigStr.length - smallStr.length
    for (let i = 0; i <= distance; i++) { 
        smallStr.push("0") }//補 0
	let arr = [];
	let newarr = [];
    arr[0] =smallStr;
    arr[1] =bigStr;
    for (let i = 0; i < bigStr.length; i++) {
        let result = 0;
        newarr[i] = ((Number(arr[0][i])+ Number(arr[1][i]))* Math.pow(10,i));
        }
    result = newarr.reduce(function(acu, count) {
    return acu +count;})
    console.log(result); 
}
```
但相加的數字一增加，上述程式就因為科學記號問題而輸出 NaN，而且累加的作法讓整個式子像是繞了一大圈遠路。當下我決定擱置這個問題，但其實也是在逃避徒勞無功的挫敗感。

過了兩周，再次來到這個坑前面，我重新搜了一下資料，找到一份寫的相對清楚的 medium 文章，再從 Github 裡隨機抽出 CodingCoke 同學的程式碼，開始對照修改，照了鏡子，才知道自己長得可怕，慢慢整理出這三個醜點。

>1. 在比大小部分發現.math方法比起比大小排序、換順序快得多。
>2. 再讀自己的 code 時，差點讀不懂。與其把所有東西整在一起，不如留下元素的脈絡。
>3. 沒想到進位問題只要用迴圈就可以解決。 

但每次解決一個舊問題，就會出現新問題，我發覺目前找到的兩版其他解答，仍舊無法回應大數變成科學記號的問題（在CodingCode同學解答的部分通過測資了，但我在本地端用 terminal 實測是無法使用的。雖然我是還沒有實地練習過 Jest 的懶生，但這點也很匪夷所思）

**parseint？**

### section 3： HTTP 圖書館闖關
###### Lv.6 以前
上一次連進 HTTP Game 網頁應該是兩週前，那時候稍微試了一下，不太知道怎麼開啟第二關以後的關卡，就暫時逃進第六週課程。今天(06.04)重新下載了 Postman，一路試呀、錯了、修正、再試，來到第六關前，看著前面闖關的人特別提醒「關鍵字真的很關鍵！不搜寫不出來」。我搜了，還是不知道怎麼走，好不容易前五關給人玩遊戲一般的放鬆感跟成就感，一下子又堵在這門前。

作為新手，真的很能體會 twgd 前輩在分享時說的，學習的過程裡常出現「蛤？這是什麼？」的感覺，



### 第1.5個月心得
