<?php
  require_once('./conn.php');
  include_once('add_on.php');
  $id = $_GET['id'];
  $sql = "SELECT * FROM yoding_comments where message_id =" . $id;
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Message</title>
  <link href="./css/style.css" rel="stylesheet"/>
</head>
<body>
  <div class="container">
    <div class="message__board" style="background:">
      <div class="board__title">編輯留言</div>
      <form class="reply__section" method="POST" action="./handle_update_message.php">
        <textarea name="content" class="reply__input">
          <?php echo escape($row['content']);?>
        </textarea>
      <input name="id" type="hidden" value="<?php echo escape($row['message_id']);?>"/>
      <input type="submit" class="submit__btn"> 
      </form>
    </div>
  </div>
</body>
</html>