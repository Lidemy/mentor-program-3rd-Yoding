## 什麼是 DNS？Google 有提供的公開的 DNS，對 Google 的好處以及對一般大眾的好處是什麼？
DNS 全名「Domain Name System」，用於提供網路用戶登錄網域域名-IP位址雙向轉換、郵件目的查閱等，通常由[樹狀結構](https://blog.twnic.net.tw/2019/02/22/2673/)般的層層伺服器組成，上層伺服器會轉介資訊到下層伺服器，在目標網站的伺服器位置後再傳回使用者端，但因為需要存放的資訊量體龐大，所以會由幾台伺服器串連，個別存入部分內容。

參考資料：一份頁面古樸但說明詳細的[網頁書](http://www.tsnien.idv.tw/Internet_WebBook/chap13/13-1%20DNS%20系統簡介.html)，與 Google 提供的[DNS 基本資訊](https://support.google.com/a/answer/48090?hl=zh-Hant)。

#### 用戶端
依據[2010年的一篇文章](https://blog.xuite.net/maycoco62/990622/35360944-Google+Public+DNS服務+)，Google Public DNS 所用的快取機制，會在TTL（存留時間）到期前自動抓取快取，省去 DNS 查詢時間。且他們的 DNS 主機位於 DNS root server的下一層，查詢送出時，只要往上一層就可以取得資料， 這兩個都將「**加快 DNS 查詢速度**」。

再者，Google Public DNS 也會嚴格控管 DNS 資料的網路安全與更新速度，可以提昇使用者的瀏覽體驗。

* DNS整體架構可參考[域名系統（DNS）101—網址的小旅行](https://medium.com/後端新手村/域名系統-dns-101-7c9fc6a1b8e6)
* Google Public DNS 資安機制參考：[DNS-over-TLS服務](https://www.techbang.com/posts/63983-google-provides-dns-over-tls-services-to-enhance-internet-privacy-protection)

#### 供應端
Google 透過中介域名轉換，可收集大量用戶資料，往好處想能優化搜尋機制、使用者體驗，但從公司產品的角度來看，這些資料描繪了整體網路使用行為的樣貌，有助於公司調整服務、構思產品，甚至於用作Google 個人廣告投放內容的參考。

---
## 什麼是資料庫的 lock？為什麼我們需要 lock？
當單一資料庫同時被多個使用者存取時，必須藉由控制使用者的操作來避免資料存取產生衝突。[並行控制方式](https://docs.microsoft.com/zh-tw/sql/2014-toc/sql-server-transaction-locking-and-row-versioning-guide?view=sql-server-2014可以分為封閉型與開放型，在使用者執行特定行為後就套用鎖定（Lock），防止他人執行與鎖定衝突的動作，直到使用者解除鎖定為止；而開放型則不強制鎖定資料，等到使用者更新資料時，系統會查看是否有其他使用者更新資料，如果有，則產生錯誤，收到操作錯誤地使用者交易會被回復，需要重新開始。

SQL 的鎖定分為[「共享式、獨佔式、更新」](https://jackyshih.pixnet.net/blog/post/6154337)三類，如更新不慎可能造成死鎖（存取無法繼續）。

## NoSQL 跟 SQL 的差別在哪裡？
SQL 和 NoSQL 都是查詢資料庫的方式，但全名為「Structured Query Language」的 SQL 系統，指令規定清楚、層級分明，單筆資料的異動(交易)間遵循「ACID原則」。

NoSQL 指的是「Not Only SQL」，主要遵循「CAP原則」，它降低資料關聯性，讓資料可以任意分割、調整，也便於分散至不同伺服器中建立副本，並以 Key-Value 方式儲存。不過因為資料被分散到不同節點上，因此節點間需要彼此同步，但同步過程存在時間落差，開發者必須自行解決時間差內資料遺失或衝突問題。

* 「CAP」定理：C 是一致性（Consistency），指同一時間下不同節點的資料必須相同；A 是可用性（Availability），指部分節點故障時，其他節點仍可使用；P 為部分容忍性（Partition Tolerance），當資料庫執行運作時，發現部分資料遺失或不一致，並不會影響資料庫整體運作。

## 資料庫的 ACID 是什麼？
前面說到單一資料需要避免衝突，ACID 是並行控制方式 4 個原則的縮寫，主要用於 SQL：
>A（Atomicity，原子性）<br>
>C（Consistency，一致性）<br>
>I（Isolation，隔離性）<br>
>D（Durability，持久性）

白話來說，每筆交易必須如完整的原子（Atomicity）般不可切割，不論過程有多少個動作，交易如果不是全部成功，就是一起失敗，不存在交易部分完成的情形；再來是資料在交易前後仍保持完整一致（Consistency），符合預設規定、觸發或偵錯機制；另外交易在執行中不會被其他交易影響（Isolation）；且指令成功後永久有效（Durability），不會不會突然消失。


