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
// 連線設定
  $conn = new mysqli($servername, $username, $password, $dbname);
  $conn->query('SET NAMES UTF8');
  if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
  }
// 帳號重複檢查
  $sql_account_check = "SELECT * FROM yoding_users 
                      WHERE username = '$set_user'";
  if($conn->query($sql_account_check)->num_rows > 0) {
    echo "<script>alert('此帳號已註冊')</script>";
    die('請返回上一頁');
  } else {
    $hashed_password = password_hash($set_password, PASSWORD_DEFAULT);
  }
// 正式建置會員資料
  $sql = "INSERT INTO yoding_users(username, nickname, password) 
          VALUES('$set_user', '$nickname', '$hashed_password')";
  if($conn->query($sql)) {
    header('Location: ./login.php');
  } else {
    echo "failed, " . $conn->error;
  }
?>
