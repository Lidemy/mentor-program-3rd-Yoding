## Bootstrap 是什麼？
- Bootstrap 是集合許多 css 套件與模板的函式庫，開發者透過引用預寫的外觀設定減去調整 css 的時間，也因資料庫內預設的跨瀏覽器相容設定，開發者不須煩惱在不同瀏覽器之間的跑版問題。

## 請簡介網格系統以及與 RWD 的關係
- 網格系統讓開發者將頁面依預定長寬分割為大小固定的欄、列，實際開發時只要套入網格設定，畫面上新增的元素就會按網格規則排列。
- 在響應式網頁（a.k.a. RWD）興起後，網格的定位規則從固定數值（如：12px）轉成頁面比例（％），如果再配合 media query 設定與 css 的 flex 排版，就能讓不同尺寸的裝置各自擁有該版面適用的排版樣式。

## 請找出任何一個與 Bootstrap 類似的 library
- 網路上可以搜到不少 [css 前端框架](https://simular.co/resources/type/css-framework.html)的簡介，在實際用過他們以前，這個由 Google 開發的[Materialize](https://materializecss.com)看起來有點熟悉，據說是 Google 在「Material Design」（有人翻作卡片式設計）原則下開發出來的框架，原設計強調仿效紙張陰影做出頁面層級，轉用在網頁上似乎是以轉場特效等提升[使用者體驗](https://medium.com/麥克的半路出家筆記/筆記-從零學習-materialize-打造個人頁面-a5de87c1e8e0)，不過這個體驗暫且留到未來。

## jQuery 是什麼？
- jQuery 是以 Javascript 編寫的函式庫，透過簡化原生 Javascript 選擇器與網頁元件的語法，讓使用者撰寫出更簡潔的程式碼。

## jQuery 與 vanilla JS 的關係是什麼？
- Vanilla Js 指的是原生的 Javascript，一說是有人刻意幫原生 JS 取了名字，諷刺大家過於習慣使用函式庫。但實際上 jQuery 能做到的，原生 JS 也都能完成。甚至於當網頁不涉及過於複雜的互動時，使用原生 JS 反而能避免載入 jQuery 龐大函式庫帶來的負擔。

