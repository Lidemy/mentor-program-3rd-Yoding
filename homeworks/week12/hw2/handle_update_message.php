<?php
  require_once('./conn.php');
  include_once('add_on.php');
  $id = $_POST['id'];
  $content = $_POST['content'];
  $sql_edit= "UPDATE yoding_comments 
        SET content = '$content' 
        where message_id =" . $id;
  sendMsgQuery($conn, $sql_edit);
?>