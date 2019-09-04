<?php
  require_once('./conn.php');
  $login__username = $_POST['login__username'];
  $login__password = $_POST['login__password'];
//欄位填寫檢查
  if (empty($login__username) || empty($login__password)) {
    die('請確認各欄位均已填入');
  }
  //設定session
  session_start();
  $_SESSION['value'] = 123;
  $_SESSION['username'] = $login__username;
  setcookie("login_word", "001", time()+3600*24);
//db連線
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("connection failed:" . "$conn->connect_error");
  }
//查找用戶
  $sql = "SELECT * FROM `users` WHERE `user_name` = '$login__username' AND `password` = '$login__password'";
  $result = $conn->query($sql);
  if($result -> num_rows > 0){
    while($row = $result->fetch_assoc()){
      header('Location: ./message_board.php');}
  } else {
    echo "failed" . $conn->error;
    header('Location: ./login.php');
  }
?>
