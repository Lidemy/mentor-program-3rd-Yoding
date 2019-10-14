<?php
  require_once('./conn.php');


  function escape($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'utf-8');
  }

  function sendMsgQuery($conn, $sql){
    if ($conn->query($sql)){
      //可以進化成回到原本所在頁面
      header('Location: ./message_board.php?page=1');
    } else {
      echo "Failed. " . $conn->error;
    }
  }

  function renderEditOpt($id) {
  echo '<div class="edit">
        <button class="edit_btn"><a href="./edit_message.php?id=$id">編輯</a></button>
        <button class="edit_btn"><a href="./handle_del_message.php?id=$id">刪除</a></button>
        </div>';
}

function getComments($conn, $id) {
  $sql = "SELECT * FROM yoding_comments WHERE message_id = ? ORDER BY created_at DESC";
  $stmt = $conn->prepare($sql);
  $stmt ->bind_param("i", $id);
  $stmt->execute();

  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  return $result;
  //重想要return什麼 $result or $row 
  //要同時可以計數，又可以讀取row
}


?>