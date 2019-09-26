<?php
  require_once('./conn.php');
  $login__username = $_POST['login__username'];
  $login__password = $_POST['login__password'];
//欄位填寫檢查
  if (empty($login__username) || empty($login__password)) {
    die('請確認各欄位均已填入');
  }
// W11- hash-verify
  $sql = "SELECT * FROM yoding_users WHERE username = '$login__username'";
  $result = $conn->query($sql);
  if($result -> num_rows > 0){
    $row = $result->fetch_assoc();
    if (password_verify($login__password, $row['password'])) {
      $session_id = time() . bin2hex(random_bytes(8));
      $sql_set_session = "INSERT INTO yoding_user_certificate(id, user_id) VALUES ('$session_id', '$row[user_id]')";

      if ($conn->query($sql_set_session)) {
        setcookie("session_id", $session_id, time()+3600*24);
        header('Location: ./message_board.php?page=1');
      } else { echo 'Failed to write in data.';}
    } else { echo 'Invalid password.';}
  } else { echo "Failed" . $conn->error;}
?>
