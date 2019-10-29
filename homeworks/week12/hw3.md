## 請說明 SQL Injection 的攻擊原理以及防範方法

### 攻擊原理：在與SQL資料庫連動的欄位輸入恆真句（例如：1=1），越過SQL制成的驗證機制。

#### 防範方法：
- 以正規式過濾輸入字串
- 

## 請說明 XSS 的攻擊原理以及防範方法

### 攻擊原理：利用<script>指令植入的惡意程式碼，被混入原始碼中執行，導致使用者被引導至釣魚網站或觸發使資訊外洩的事件，[攻擊類型參考](https://forum.gamer.com.tw/Co.php?bsn=60292&sn=11267)

#### 防範方法：


## 請說明 CSRF 的攻擊原理以及防範方法

### 攻擊原理：在不同 domain 下偽造使用者本人發出的 request，趁使用者不意間操作。

#### 防範方法：
- 阻止不同域名的外站訪問
- 提交訊息時必須附上該域名限定的認證

參考來源：
- 美團技術文章：https://tech.meituan.com/2018/10/11/fe-security-csrf.html
- huli文章：https://blog.techbridge.cc/2017/02/25/csrf-introduction/
- 

