## Bootstrap 是什麼？
- Bootstrap 可以說是集合了許多 css 相關套件與模板的 library，讓開發者透過引用快速帶入 Bootstrap 預寫的外觀設定，也因資料庫內設定好的跨瀏覽器相容設定，不需去煩惱在不同瀏覽器之間的跑版問題。

## 請簡介網格系統以及與 RWD 的關係
- 網格系統讓開發者可以將頁面依預定的長寬分割為大小固定的欄、列，實際開發時只要把新增的元素套入網格的設定，畫面上的元素就會依照網格的排版規則排列。
- 在響應式網頁興起後，網格系統的定位規則也從固定數值（如：12px）轉為以頁面比例（％）為單位，如果再配合media query 設定不同尺寸個別適用的規則，再加上一些 css 裡的 flex 排版，就能讓不同尺寸的裝置各自擁有該版面適用的排版樣式。

## 請找出任何一個與 Bootstrap 類似的 library
網路上可以搜到不少[css前端框架](https://simular.co/resources/type/css-framework.html)的簡介，在實際使用他們以前，這個由 Google 開發的[Materialize](https://materializecss.com)看起來有點熟悉，這是 Google 在「Material Design」（有人翻作卡片式設計）原則下開發出來的框架，原設計強調仿效紙張的陰影感來做出頁面的層級，轉用在網頁上似乎是以轉場特效等提升[使用者體驗](https://medium.com/麥克的半路出家筆記/筆記-從零學習-materialize-打造個人頁面-a5de87c1e8e0)。


## jQuery 是什麼？
- jQuery 是以 Javascript 編寫的函式庫，透過簡化原生 JS 在選擇器與網頁元件的語法，讓使用者撰寫出更簡潔的程式碼，也有不少前端框架直接引用 jQuery 元件來寫成元件。

## jQuery 與 vanilla JS 的關係是什麼？
- Vanilla Js 指的是原生的 Javascript，有一說是因為大家都習慣使用函式庫，所以有人才為原生 JS 刻意取了名字，但實際上 jQuery 能做到的，原生 JS 也都能完成。甚至於當網頁不涉及過於複雜的互動時，使用原生 JS 反而能避免載入 jQuery 龐大的函式庫所造成的程式碼暴肥。

