<?php
  require_once('./conn.php');
  $content = $_POST['content'];
  $userID = $_COOKIE["userID"];
// 簡易空白檢查，防injection功能待補
  if (empty($content)) {
    die('您有欄位空白，請填寫內容');
  }
// 建置留言
  $sql = "INSERT INTO yoding_comments (userID, content, hidden) VALUES('$userID', '$content', '0')";
  $result = $conn->query($sql);
// 跳轉頁面
  if($result) {
    header('Location: ./message_board.php');
  } else {
    echo "failed, " . $conn->error;
  }
?>