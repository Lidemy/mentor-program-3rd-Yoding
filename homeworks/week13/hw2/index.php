<?php
  require_once('./conn.php');
  include_once('./add_on.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="content-type" content="text/html">
  <title>Keep Going</title>
  <!--css reference: https://collectui.com/designers/goutham-aj/to-do-list-->
  <link href="./todo.css" rel="stylesheet"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $("#desc").hide();
      $("#show").click(function(){
        $("#desc").toggle();
      });
    });
  </script>
</head>
<body>
  <div class="float__board">
    <div class="date__info">
    <div class="date">
      <div class="day">15</div>
      <div class="month">OCt.</div>
    </div>
    </div>
    <div class="item__list">
    <?php
      getUndoItem(2, $conn);
    ?>
    </div>
    <button class="add__btn circle" id = "show">+</button>
  </div>
   <div class="input__area">
        <input type="text" id="desc" name="item_desc" placeholder="add..."/>
      <!--<form class="add__item">
        <button class="submit__btn circle" id="submit__btn">SET</button>
      </form>-->
    </div>
  <script type="text/javascript">
    function printItem($desc, $id) {
      return `<div class='item'>
      <button class='del__btn circle opt'>X</button>
      <div class='item__desc'>` + $desc + `</div>
      <input type='hidden' name='id' value="` + $id + `"/>
      <button class='check__btn circle opt'> O </button>
      </div>`;
    }

    function addItem($item) {
      $(".item__list").append(printItem($item, 0));
      $("#desc").val('');
    }
  // 標記已完成事項，還得調整事件觸發後的文字部分特效
    $(document).ready(function(){

      $(".check__btn").click(function(event){
        $(event.target).css("color", "red");
        $(event.target).html("<div>V</div>");
      });

    // 新增item
      $("#desc").keydown(function(e){
        if(e.key === 'Enter'){
          // 這裡的 id 待補
          addItem(e.target.value);
        }
      });

      $('.item__list').click(function(e) {
        //console.log(e.target);
        const element = $(e.target);
        if(element.hasClass('del__btn')) {
           element.parent().remove();
         }
        }
      );


    });
  </script>
</body>
</html>
