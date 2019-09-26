## 請說明雜湊跟加密的差別在哪裡，為什麼密碼要雜湊過後才存入資料庫
雜湊的算法是接收一段輸入資料（訊息），並把他們轉化為位數固定的序列資料（也稱為訊息摘要），概念上雜湊是一種單向函式，是以無限輸入對應有限輸出（例如：輸出內容為輸入數字的乘積），因為單一輸出有多種來源可能（126得到12、34也得到12），因此即使外人取得輸出內容，除非取得預先算好的[彩虹表](https://ithelp.ithome.com.tw/articles/10193762)，否則無法暴力破解，雜湊可避免資料庫外洩後敏感資料直接以明碼流出。

雜湊雖然也被用在資安防護，但不同於加密的輸入與輸出間可以算式回推，雜湊無法回推，常被用在數位簽章、訊息鑑別。

## 請舉出三種不同的雜湊函數
- MD5（Message-Digest-Algorithm 5）是早期使用的雜湊函數，輸出固定長度為128-bits，不過MD5目前可以人為生成碰撞，已經不再用於加密驗證程序。

- SHA 家族的全名是安全雜湊演算法（Secure Hash Algorithm），能將數位訊息對應於長度固定的字串，有SHA-1, SHA-2系列數種。
	- 其中[SHA-1計算](https://programmermagazine.github.io/201401/htm/message2.html)後的結果會以40個十六進位的數字呈現，是git用於檢測檔案[前後版本是否相同](https://gitbook.tw/chapters/using-git/how-to-calculate-the-sha1-value.html)的技術，不過 2017 年已有密碼學者聯手 Google，成功讓兩個不同檔案取得一致的雜湊值。
	- 屬於 SHA-2 的 SHA-256 算法則被用在金融交易，如比特幣。
- 因為查不到什麼更深入的雜湊函數相關資訊，因此最後一個就用雜湊方法來抵，在簡易雜湊方法( aka 直接進行雜湊運算)外，也可以先在訊息內任意位置處加入特定字串（ aka 鹽），再進行雜湊運算。或進一步把鹽值定為亂定數，並使用兩種以上的加鹽雜湊。



## 請去查什麼是 Session，以及 Session 跟 Cookie 的差別
- 雖然《[淺談 Session 與 Cookie：一起來讀 RFC](https://github.com/aszx87410/blog/issues/45)》裡寫了 Session以機制來理解有點奇怪。但我還是暫時把 Session 理解為一種狀態傳遞機制，它可以透過資料傳輸讓網站記錄使用者身份與行為，紀錄的資料可以存在伺服器端或使用者端，使用者端會以 Cookie 方式存放在使用者瀏覽器，伺服器端的資料則可以存放在網址列、設定為 hidden 的 form、檔案、資料庫中。所以實際上 Cookie 算是幫助 Session 機制成形的資料存放方式，簡化了 Session 機制中驗證資料的流程。


##  `include`、`require`、`include_once`、`require_once` 的差別

- `include`和`require`兩個指令都能在 PHP 文件中引入其他文件，但[兩者的差別](https://www.w3schools.com/php/php_includes.asp)在於`include`在引入檔案不存在或出錯時會發出「E_WARNING」警告，但程式會繼續往下運行，反之`require`發出「E_ERROR」警告後會終止程式往下運作。
- `include_once`設定只會引入資料庫一次，避免重複引入時出現的錯誤訊息，同理`require_once`也是，總結以上性質，引入資料庫的首選乃`require_once`。

