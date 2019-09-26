<?php
  require_once('./conn.php');
  $id = $_GET['id'];
  $sql_del= "DELETE FROM yoding_comments where message_id = " . $id;
  if ($result=$conn->query($sql_del)) {
    header('Location: ./message_board.php?page=1');
  } else {
    die("Failed." . $conn->error);
  }
?>