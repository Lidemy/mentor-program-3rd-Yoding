## 請以自己的話解釋 API 是什麼
- API 的全名是 Application Programming Interface（API），應用程式介面，是用以處理資料交換的一種窗口，也可說是資料提供、取用兩端彼此的溝通方式。目前看過最生動的比喻是自動販賣機，使用者不需要知道機器背後的原理，只需要提供必要的元素（零錢、手動按鈕）最終就能拿到自己想要的東西。。
- API 的種類？  
看了一下維基百科，發現上頭把 API 分為系統級與非系統級，當程式需要電腦的作業系統支援時，就會透過系統 API 呼叫作業系統，是電腦內在的溝通，而網路上的 Web API 則是使用者透過發送 Http Request 來存取在另一台主機上的資料。


## 請找出三個課程沒教的 HTTP status code 並簡單介紹
#### 401 Unauthorized 未認證
>指用戶端未通過請求資源的權限要求，通常這樣的Response給出的回應會顯示以 www-Authenticate 為 Header 的錯誤訊息，說明用戶端為何認證失敗。

#### 408 Request Timeout
>用戶端未在伺服器預設的等待時間中送出請求，伺服器強制斷線，但用戶端隨時可重新送出請求。屆時伺服器會送出以「Close」為標頭的訊息。

#### 502 Bad Gateway 閘道錯誤
>通常是伺服器的某個服務並未正確執行，可能的原因如下：要求處理時間過長、應用程式的內存使用率高、應用程式異常，但也會發生在伺服器過載時。



## 假設你現在是個餐廳平台，需要提供 API 給別人串接並提供基本的 CRUD 功能，包括：回傳所有餐廳資料、回傳單一餐廳資料、刪除餐廳、新增餐廳、更改餐廳，你的 API 會長什麼樣子？請提供一份 API 文件。

### Restaurant API Reference

- 這份 API文件 適用於：http://api.restaurant.taipei.com/
- 本 API 在串接前需要到此頁面進行[驗證]（請按我），驗證後您將取得個人開發者 ID 。
<br>
<br>

#### 取得資料 API Method

>此 API 支援以下 Http Method

|說明    |Method  |path    |參數    | 
|-------|---------|-------|--------|
|回傳所有餐廳資料|GET  | /resaurants_limit:限制回傳數量|no
|回傳單一餐廳資料|GET|/restaurants/:id|none|
|新增餐廳|POST  |/restaurants/ |name:書名|
|刪除餐廳|DELETE| /restaurants/:id |none|
|更改餐廳|PATCH| /restaurants/:id | name:書名|
<br>
> 呼叫範例 Example Request

`curl 'http://api.restaurant.intaipei.com/item/{id}?key={yourKey}&token={yourToken}'`

> 回傳範例 Example Response

當你呼叫 API 後，會得到以下的JSON資料：

```JSON
{
  "id": "55411859be21b8ad7dcd4c78",
  "data": {
    "board": {
      "shortLink": "nC8QJJoZ",
      "name": "Taipei food holic",
      "id": "4d5ea62fd76aa1136000000c"
      "tag": "3stars"
    },
    "location": {
      "number": "12345",
      "idShort": 1211,
    },
  }
}
```
<br>
#### 呼叫限制 Call Limits
- 目前此 API 僅提供開發者每分鐘 10 次呼叫，且每次呼叫所得資料限定於 10 筆。

<br>
#### 更多資訊 More Information
- 更多 API 操作範例，請參考以下[網頁]（請按我）


### 參考來源
- Hw 5 - 5 主要參考 Trello API [文件](https://developers.trello.com/docs/api-introduction) 
