<?php
  require_once('./conn.php');
  $content = $_POST['content'];
  $user_id = $_POST['user_id'];
// 簡易空白檢查，防injection功能待補
  if (empty($content)) {
    die('您有欄位空白，請填寫內容');
  }
// 建置留言
  $sql = "INSERT INTO yoding_comments (user_id, content, hidden) VALUES('$user_id', '$content', '0')";
// 跳轉頁面
  if($conn->query($sql)) {
    header('Location: ./message_board.php?page=1');
  } else {
    echo "Failed, " . $conn->error;
  }
?>