<?php
header('Content-type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD']=="POST"){
  @$item_desc = $_POST["item_desc"];
  // send add sql
  if($item_desc != null) {
    echo json_encode(array(
      'item_desc' => $item_desc
    ));
  } else {
    echo json_encode(array('errorMsg' => 'Failed to send data.'));
  }  
} else {
    echo json_encode(array('errorMsg' => 'Method not allowed.'));
}

?>
