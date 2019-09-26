<?php
  require_once('./conn.php');
  $id = $_POST['id'];
  $content = $_POST['content'];

  $sql= "UPDATE yoding_comments SET content = '$content' where message_id =" . $id;
  echo $sql;
  if ($result = $conn->query($sql)) {
    header('Location: ./message_board.php?page=1');
  } else {
    die('Failed. ' . $conn->error);
  }
?>