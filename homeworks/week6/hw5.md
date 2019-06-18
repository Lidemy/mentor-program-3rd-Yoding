## 請找出三個課程裡面沒提到的 HTML 標籤並一一說明作用。

1. ```<noscript>```<br>當瀏覽器無法識別 javascript時，可以顯示出警告訊息，避免javascript程式碼以字串顯示，這個標籤放在script腳本前後的可以，如果瀏覽器能解析出腳本，這段程式碼會被省略。（目前所有的瀏覽器都支持這個語法。）
2. ```<canvas>``` <br>這個標籤結合 javascript 後，可以在 HTML 上繪製圖形或動畫，比如有網友就用它畫了一顆[神奇寶貝球](https://ithelp.ithome.com.tw/articles/10198687)，或用來製作[刮刮樂功能](http://www.ucamc.com/e-learning/javascript/329-如何使用html5-canvas-實現刮刮樂遊戲效果.html)。
3. ```<nav>``` 和````<footer>````,```<main>```等同屬語意型標籤，標示某些能將使用者導向其他頁面的元素，常見的元素有：連結、表格、Ｍenu。

## 請問什麼是盒模型（box model）
根據 MDN 的說法，瀏覽器在渲染文件時，是根據 CSS 文件 將各個元素當作一個個區塊來處理，HTML 裡被標籤包裹著的文字決定網頁的文字內容， CSS 文件則決定各個區塊的背景、顏色、大小等屬性，這個區塊就被稱為 Box Model，比過我比較喜歡區塊模型這個說法XD，所以以下都暫稱它為區塊模型。

區塊從內而外可以分成 內容（content）、留白/內距（padding）、邊框（border）、邊界/邊框（margin）四部分。前面提到的後三者和 width, height 可以作為 Box Model 的基本元素。

不得不提一下 box-size 的兩種設定： content-size 與 box-size。 前者是區塊的預設值，當我們把區塊內容的值設定好了以後，外圍性質是後續添加上去的，因此整個區塊的大小會更大一些，過去常使得製作者必須預先算好應扣除的留白、邊框數值，同樣的情形換作設定了 box-size 後，整個區塊最終大小也就固定了，電腦會自己調配區塊內元素的比例。



## 請問 display: inline, block 跟 inline-block 的差別是什麼？
三者最主要的差別在於換行與否，以及調整元素邊距的限制。

- block：預設每個元素佔滿一整行。
- inline：預設讓元素列在同一橫排，但元素內任何會影響位置的上下間距設定會失效，只能調整左右的，（但在不影響其他元素位置下，padding 還是可以將元素撐大）。
- inline-block ：元素內的性質如同 block，所以可以調整 margin、 padding，但對外如同 inline，因此元素不會換行。


## 請問 position: static, relative, absolute 跟 fixed 的差別是什麼？

- static <br>是 CSS 位置屬性的預設值，會讓元素按瀏覽器配備的自動排版順排下去，也有[資料](https://doggy8088.github.io/csslayoutsite/position.html)表示設定為 static 的元素並不是被定位在頁面上，其餘定位方式則否之。
- relative <br> 是一種相對性的定位方式，會以原始位置為基準點，再依據上下左右的設定偏移，原本區塊在的位置會被保留，**設定為 relative 的元素不會影響其他元素的位置**。
- fixed <br>設定後，會固定在視窗的某個位置，不會因為卷軸滾動改變位置，因此常被用在網頁的彈出廣告。某一個元素被設定為 fixed 之後，它原先存在的位置會被遞補，但它也不會干擾版面上的其他元素。
- absolute <br>會以對應的父層元素為基準點，**需要注意的是父層元素必須設定為 relative，否則會一直往上層尋找直到找到最上層的`<body>`，這會讓被定位的元素釘在視窗的某一角落**，且被設定為 `absolute`的元素原先存在的位置，會被其他元素取代。