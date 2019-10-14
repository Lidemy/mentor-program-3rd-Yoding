<?php
  require_once('./conn.php');
  include_once('add_on.php');
  $content = $_POST['content'];
  $user_id = $_POST['user_id'];
// 簡易空白檢查，防injection功能待補
  if (empty($content)) {
    die('您有欄位空白，請填寫內容');
  }
// 建置留言
  $sql_add= "INSERT INTO yoding_comments (user_id, content, hidden) VALUES('$user_id', '$content', '0')";
  sendMsgQuery($conn, $sql_add);
?>