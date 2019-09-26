<?php
  require_once('./conn.php');
  $login__username = $_POST['login__username'];
  $login__password = $_POST['login__password'];
//欄位填寫檢查
  if (empty($login__username) || empty($login__password)) {
    die('請確認各欄位均已填入');
  }
//查找用戶
  $sql = "SELECT * FROM `yoding_users` WHERE username = '$login__username' AND `password` = '$login__password'";
  $result = $conn->query($sql);
//處理資料
  if($result -> num_rows > 0){
    $row = $result->fetch_assoc();
    setcookie("userID", $row['userID'], time()+3600*24);
    setcookie("nickname", $row['nickname'], time()+3600*24);
    header('Location: ./message_board.php');
  } else {
    echo "failed" . $conn->error;
  }
?>
