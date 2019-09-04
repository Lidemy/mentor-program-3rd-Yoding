<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="content-type" content="text">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>W9H2__messageborad__yoding</title>
  <link href="./style.css" rel="stylesheet"/>
</head>
<body>
  <div class="container">
    <nav>
      <div class="page__title">MESSAGE BOARD</div>
      <div class="alert__info">
        <span>本站為練習用網站，因教學用途刻意忽略資安實作，註冊時請勿使用任何真實帳號或密碼</span>
      </div>
      <div class="accountInfo">
        <?php
          session_start();
        if ($_SESSION['value'] == 123) {
          echo '<span class= "logined__username">' . $_SESSION["username"] . '</span>';
        } else {
          header('Location: ./login.php');
        }
        ?>
        <a href="./handle_logout.php">登出</a>
      </div>
    </nav>
    <div class="message__board">
      <div class="board__title">
        留言板
        <span class="message__number"></span>
      </div>
         <form method="POST" action="./handle_add_message.php" class = "reply__section">
        <input type="text" class="reply__input" placeholder= "" name = "content"/>
        <input type='submit' value="送出" class="submit__btn"/>
      </form>
      <div class="message__section">
        <div class="new__message"></div>
        <div class="old__message"></div>
        <?php
        require_once('./conn.php');
        $sql = 
        'SELECT * from message ORDER BY created_at DESC';
        $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
              echo"<div class='message'>";
              echo "<div class='info'>";
              echo "<span class='nickname'>" . $row['nickname'] . "</span>";
              echo " " . "<span class='timeStamp'>" . $row['created_at'] . "</span></div>";
              echo "<div class='content'>" . $row['content'] . "</div></div>";
            }
          }
        ?>
      </div>
    </div>
  </div>
</body>
</html>
