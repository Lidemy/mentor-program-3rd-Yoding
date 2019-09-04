<?php
  require_once('./conn.php');
  $set_user = $_POST['username'];
  $nickname = $_POST['nickname'];
  $set_password = $_POST['password'];
  $password2 = $_POST['password2'];
// 欄位空白檢查
if (empty($set_user) || empty($nickname) || empty($set_password) || empty($password2)) {
  die('您有欄位未完成，請檢查資料');
}
// 密碼設定檢查
if ($set_password !== $password2) {
  echo "<script>alert('請確認兩次密碼輸入均相同')</script>";
  die('請返回上一頁');
}
// 帳號重複檢查
$sql = "SELECT * form users WHERE user = '$set_user'";
if($conn->query($sql)->num_rows > 0) {
  header('Location: ./login.php');
  echo "<script>alert('此帳號已註冊')</script>";
  die('請返回上一頁');
}
// DB連線（似乎可刪除連線資料），或是需要重新設定連線至公用資料庫
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'W9HW';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("connection failed:" . $conn->connect_error);
}
// 正式建置會員資料
$sql = "INSERT INTO users(user_name, password) VALUES('$set_user', '$set_password')";
//"INSERT INTO nickname(nickname) VALUES('$nickname')"
$result = $conn->query($sql);
if($result) {
  header('Location: ./login.php');
} else {
  echo "failed, " . $conn->error;
}
?>
