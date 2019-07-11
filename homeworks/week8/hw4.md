## 什麼是 Ajax？
Ajax 的全名是 「Asynchronous JavaScript and XML」，開頭的「Asynchronous」寫明了這是個非同步的機制。

非同步機制可以延後發送 request 後等待回傳資料的動作，先執行下一行程式碼，等到資料取得後，再利用 Callback Function 調出資料。

## 用 Ajax 與我們用表單送出資料的差別在哪？
表單送出的 Http Request 會由瀏覽器接收，瀏覽器解析回覆時會渲染出新的頁面，除了會出現換頁情形，也無法達成頁面局部更新。不過表單僅倚靠 HTML 標籤的功能，不需要會 Javascript 也可以用。

相較之下，使用 Ajax 發送請求、接收時，伺服器回傳的資料是由 Javascript 處理，不需刷新網頁就能動態更新資訊。


## JSONP 是什麼？
當我們向伺服器請求資料卻遇上同源政策阻擋時，可以利用 `script` 等標籤不受同源限制的特性，以 src 向伺服器取得資料後，再透過 Callback Function 解析資料，有時伺服器會提供 Callback Function 的函數給使用者。但這樣的參數「只能以 Query String 的方式帶到 Server（GET），無法使用 POST 方法」，而且想使用 JSONP 方法，也得要 server 提供 Callback Function。

## 要如何存取跨網域的 API？
當網頁送出 request 時，瀏覽器會在請求的 Header 中塞入 Origin 這個資料，Origin 說明本次請求的來源與可用的請求方式，如果請求來源不在指定範圍內（同源政策），伺服器傳回的 response 資料中就不會附上 `Access-Control-Allow-Origin`，瀏覽器拿到這份資料後會擋下並顯示錯誤。

因此如果要存取跨網域的 API，必須確保伺服器端有加上 `Access-Control-Allow-Origin`/或使用上面的 JSONP 方法。遇上 Server 端需要驗證請求來源時，可用附帶 Header 的方式傳送驗證資料。


## 為什麼我們在第四週時沒碰到跨網域的問題，這週卻碰到了？

有兩種可能。

可能性一：API Server端的設定為萬用字元`*`，接受來自任何來源的請求。

可能性二：因為我們用 Node JS 送 Request，這種方式不會被瀏覽器的同源政策擋下，繞開瀏覽器這個限制，就不容易感受到跨網域問題。
