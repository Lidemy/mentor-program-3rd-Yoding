<?PHP
  require_once('./conn.php');
  $session = $_COOKIE['session_id'];
  $sql_kill_session ="DELETE FROM yoding_user_certificate 
                      WHERE id =" ."'$session'";
  $result = $conn->query($sql_kill_session);
  if ($result) {
    setcookie("session_id", " ", time()+1);
    header('Location: ./login.php');
  } else {
    die('Failed to log out. Please try again.'. $conn->error);
  }
?>