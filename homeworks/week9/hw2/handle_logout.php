<?PHP
  setcookie(name, "", time()-3600);
  $_SESSION['value'] = '';
  header('Location: ./login.php');
  //清除cookie
?>