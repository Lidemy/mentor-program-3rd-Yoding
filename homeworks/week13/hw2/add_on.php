<?php
require_once('./conn.php');
function escape($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'utf-8');
  }

function addItemSql() {
  $item_desc = $_POST['item_desc'];
  $sql_add = "INSERT INTO yoding_todo (item_desc) VALUES('$item_desc')";
  //append new item behind the last
  if($conn->query($sql_add)){
    appendItem($item__desc);
  } else {
    echo "Failed." . $conn->error;
  }
}


function printItem($desc, $id) {
  echo "<div class='item'>";
  echo "<button class='del__btn circle opt'>X</button>";
  echo "<div class='item__desc'>".$desc."</div>";
  echo "<input type='hidden' name='id' value='" . $id . "'/>";
  echo "<button class='check__btn circle opt'> O </button>";
  echo "</div>";
}

function getUndoItem($limit, $conn){
  $temp = 'LIMIT' . $limit;
  $sql ='SELECT * FROM yoding_todo WHERE done = 0 ORDER BY item_id';
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    //echo "get";
    while ($row = $result->fetch_assoc()) {
      printItem($row['item_name'], $row['item_id']);
    }
  } else { echo "No result.";}
}



?>