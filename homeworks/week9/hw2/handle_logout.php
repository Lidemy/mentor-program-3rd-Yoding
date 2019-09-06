<?PHP
  // 清除cookie
  setcookie("userID", " ", time()+1);
  setcookie("nickname", " ", time()+1);
  header('Location: ./login.php');
?>