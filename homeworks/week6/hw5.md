## 請找出三個課程裡面沒提到的 HTML 標籤並一一說明作用。

1. ```<noscript>```<br>當瀏覽器無法識別 javascript時，可以顯示出警告訊息，避免javascript程式碼以字串顯示，這個標籤放在script腳本前後的可以，如果瀏覽器能解析出腳本，這段程式碼會被省略。（目前所有的瀏覽器都支持這個語法。）
2. ```<canvas>``` <br>這個標籤結合 javascript 後，可以在 HTML 上繪製圖形或動畫，比如有網友就用它畫了一顆[神奇寶貝球](https://ithelp.ithome.com.tw/articles/10198687)，或用來製作[刮刮樂功能](http://www.ucamc.com/e-learning/javascript/329-如何使用html5-canvas-實現刮刮樂遊戲效果.html)。
3. ```<nav>``` 和````<footer>````,```<main>```等同屬語意型標籤，標示某些能將使用者導向其他頁面的元素，常見的元素有：連結、表格、Ｍenu。

## 請問什麼是盒模型（box model）
根據 MDN 的說法，瀏覽器在渲染文件時，是根據 CSS 文件 將各個元素當作一個個區塊來處理，HTML 裡被標籤包裹著的文字決定網頁的文字內容， CSS 文件則決定各個區塊的背景、顏色、大小等屬性，這個區塊就被稱為 Box Model，比過我比較喜歡區塊模型這個說法XD，所以以下都暫稱它為區塊模型。

在 Google Chrome 的檢查功能中，我們可以把區塊看的更清楚。【 ! 】（圖片！！！！！！！！！！！！）

區塊從內而外可以分成 內容（content）、留白/內距（padding）、邊框（border）、邊界/邊框（margin）四部分。前面提到的後三者和 width, height 可以作為 Box Model 的基本元素。

（補邊界對盒子大小的影響。） 

綜合前面提到的外圍元素對區塊大小的影響，不得不提一下 box-size 的兩種設定： content-size 與 box-size。 前者是區塊的預設值，當我們把區塊內容的值設定好了以後，外圍性質是後續添加上去的，因此整個區塊的大小會更大一些，過去常使得製作者必須預先算好應扣除的留白、邊框數值，同樣的情形換作設定了 box-size 後，整個區塊最終大小也就固定了，電腦會自己調配區塊內元素的比例。



## 請問 display: inline, block 跟 inline-block 的差別是什麼？
- block (預設標籤是<dix>，會自動讓一個盒子佔滿一整行)
- inline （預設標籤是```<spam>和<a>```，只能調整 margin 的左右行距，但在不影響其他元素位置下，padding能撐大元素尺寸）
- inline-block ：一行可排多個元素


## 請問 position: static, relative, absolute 跟 fixed 的差別是什麼？

