## 什麼是 DOM？
瀏覽器渲染網頁時，會將HTML文件內的各個標籤定義為物件，並依照他的層級順序構成樹狀結構，如下圖。
![](https://i.imgur.com/gftbYsM.gif)

這種構型被稱為文件物件模型（ DOM , Document Object Model）。 在前面的樹狀圖中，每一個方塊都是一個**節點(node)**，所有節點則能夠分成：Document、Element、Text、Attribute 四類。

- 其中 Element 是組成 DOM 的核心成分，從圖中可以發現`<div>`、`<body>`等 HTML 標籤都屬於這一類。
- Text 一類則是被標籤包裹的文字。
- Attribute 一類包含了 Element 所擁有的`<style>`、`<href>`、`<class>`等屬性。
- 總和這些節點形成的 Document，其實也就是 HTML 文件本身。

知道了這些 DOM 的構造到底能做什麼？坦白說，這我還不敢說自己了解的很透徹，但我知道不同節點設定如果互相衝突時，DOM 有自己的優先順序，如同影像軟體裡的圖層概念， DOM 的構成決定了 CSS 設定能影響的範圍，當中的節點更是 Javascript 運作的基礎。 

## 事件傳遞機制的順序是什麼；什麼是冒泡，什麼又是捕獲？


## 什麼是 event delegation，為什麼我們需要它？


## event.preventDefault() 跟 event.stopPropagation() 差在哪裡，可以舉個範例嗎？
