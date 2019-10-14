<?php
  require_once('./conn.php');
  include_once('add_on.php');
  $id = $_GET['id'];
  $sql_del= "DELETE FROM yoding_comments where message_id = " . $id;
  sendMsgQuery($conn, $sql_del);
?>