<?php
          session_start();
require_once('./conn.php');
$content = $_POST['content'];
$name = $_SESSION['username'];
// 簡易空白檢查，防injection功能待補
if (empty($content)) {
  die('您有欄位空白，請填寫內容');
}
// DB連線
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->query('SET NAMES UTF8');
if ($conn->connect_error) {
  die("connection failed:" . $conn->connect_error);
}

$sql = "INSERT INTO message(content, nickname, hidden) VALUES('$content', '$name', '0')";
$result = $conn->query($sql);

if($result) {
  header("Content-Type:text/html; charset=utf-8");
  header('Location: ./message_board.php');
} else {
  echo "failed, " . $conn->error;
}

?>

