## 資料庫欄位型態 VARCHAR 跟 TEXT 的差別是什麼
- VARCHAR：
	- 在資料庫中設定 VARCHART 欄位時，可以設定 VARCHART(n/max)，括號中的 n 會定義字串大小，值介於1~8000之間。但如果調整為 max ，可儲存的上限是2^31-1個位元組（約2GB）。
	- VARCHART 可設定索引。
- TEXT ：
	- 可存的長度與VARCHAR相同，但預設值為65535，無法調整儲存量大小。儲存時會另開一個硬碟位置儲存，因此如果開啟含有大量文字的資料庫時，會影響程式效能。
	- TEXT 無法設定索引，但也有一說是 TEXT 欄位是英文內容時，可利用 prefix index 搜索首字母。


## Cookie 是什麼？在 HTTP 這一層要怎麼設定 Cookie，瀏覽器又會以什麼形式帶去 Server？
- Cookies 是一小段存於本機端的資料，當瀏覽器收到 Set-Cookie 的 HTTP Response 時，瀏覽器便會將 Cookie 儲存下來，隨後把它放在 Cookies HTTP 的標頭中隨請求送出。
- 它的儲存位置通常是瀏覽器，因此跨瀏覽器的 Cookie 無法通用，Cookies 中也可以設定有效期限，會把 Cookie 設定為為 Secure, HttpOnly, Samesite 等類型，提供不同程度的資安防護。

- **在 HTTP 這一層要怎麼設定 Cookie？**


## 我們本週實作的會員系統，你能夠想到什麼潛在的問題嗎？


