## 請說明 SQL Injection 的攻擊原理以及防範方法
透過輸入特定的程式碼，讓使用者輸入的內容被解析為 Query 的一部分，藉此越過 SQL 驗證機制。

#### 防範方法：
- 以正規式過濾輸入字串
- 在發出 SQL Query 的部分套用 Prepare statement，讓 Query 執行命令與資料內容分離。

## 請說明 XSS 的攻擊原理以及防範方法

XSS 是攻擊者利用使用者輸入片段植入拼接特殊格式的字串，讓它們混入原始碼中執行，導致使用者被引導至釣魚網站或觸發使資訊外洩的事件，攻擊類型可以參考[此文](https://www.jishuwen.com/d/2WFh/zh-tw)。

#### 防範方法：
- 利用escapeHTML()等方法轉譯可能被解析的特殊字元。
- 在 DOM 文件中插入新物件時，以原生 JS取代 jQuery 方法。

## 請說明 CSRF 的攻擊原理以及防範方法

CSRF 的全稱是「Cross-site request forgery」，是指攻擊者將使用者誘導至第三方網站，在使用者造訪該網站期間向其他網站發出未造成使用者發出的請求，在被攻擊網站確認使用者身份並發還憑證後，攻擊者便可以持憑證冒充使用者身份進行操作。

#### 防範方法：
- 利用 [Samesite 設定](https://tech.meituan.com/2018/10/11/fe-security-csrf.html)，限制 cookie 來源在同一個域名底下
- 以攻擊者無法取得的資訊（例如：Token）作為身份驗證機制。


