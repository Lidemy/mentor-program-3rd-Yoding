<?php require_once('./conn.php');?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="content-type" content="text">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>W9H2__messageborad__yoding</title>
  <link href="./css/style.css" rel="stylesheet"/>
</head>
  <body>
    <div class="container">
    <!--導覽列-->
      <nav>
        <div class="page__title">MESSAGE BOARD</div>
        <div class="alert__info">
          <span>本站為練習用網站，因教學用途刻意忽略資安實作，註冊時請勿使用任何真實帳號或密碼</span>
        </div>
        <div class="account__info">
          <?php
            $session_id = $_COOKIE['session_id'];
            $sql_session_check = "SELECT * FROM yoding_user_certificate 
              INNER JOIN yoding_users
              ON yoding_user_certificate.user_id = yoding_users.user_id
              WHERE id =" . "'$session_id'";
            $result_session = $conn->query($sql_session_check);
            // print user's account info
            if ($result_session->num_rows > 0) {
                $row_session = $result_session->fetch_assoc();
                echo '<span class= "logined__username, nav_btn">';
                echo $row_session['nickname'];
                echo '</span>';
            } else {
                echo 'login failed';
                header('Location: ./login.php');}
          ?>
          <a href="./handle_logout.php" class="nav_btn">登出</a>
        </div>
      </nav>
    <!--留言板-->
      <div class="message__board">
        <?php
          // variable set up
          $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
          $page_now =$_GET['page'];
          $limit = 10;
          $page_start = ($page-1)*$limit+1;
          $limit_cmd ='LIMIT ' . ($page_start-1) . ',' . $limit;
          // SQL command (1)
          $sql='SELECT * FROM yoding_comments ORDER BY created_at DESC ';
          $count_num = ($conn->query($sql))->num_rows;
          $page_num = ceil($count_num / $limit);
          // SQL command (2)
          $sql_join = 'SELECT * FROM yoding_comments 
            INNER JOIN yoding_users 
            ON yoding_comments.user_id = yoding_users.user_id
            ORDER BY created_at DESC ';
          $sql_content= $sql_join . $limit_cmd;
        ?>
        <div class="board__title">留言帖
          <span class="message__number">
            <?php echo $count_num?>
          </span>
        </div>
        <form method="POST" action="./handle_add_message.php" class = "reply__section">
          <textarea type="textarea" class="reply__input" name="content" rows="10"></textarea>
          <input type='hidden' value="<?php echo $row_session['user_id']?>" name="user_id">
          <input type='submit' value="送出" class="submit__btn"/>
        </form>
    <!--現有留言-->
        <div class="message__section">
          <div class="old__message"></div>
          <?php
          // print message pages
          $get_content = $conn->query($sql_content);
          if ($get_content->num_rows > 0) {
          while ($row = $get_content->fetch_assoc()) {
                echo"<div class='message'>";
                echo "<div class='info'>";
                echo "<span class='nickname'>" . $row['nickname'] . "</span>";
                echo " " . "<span class='timeStamp'>" . $row['created_at'] . "</span></div>";
                echo "<div class='content'>" . $row['content'] ;
                if ($row['user_id'] == $row_session['user_id']) {
                  echo '<div class="edit">';
                  echo '<div class="edit__btn">' 
                        . '<a href="./edit_message.php?id=' 
                        . $row['message_id'] . '">編輯</a></div>';
                  echo '<div class="edit__btn">' 
                        . '<a href="./handle_del_message.php?id='
                        . $row['message_id'] .'">刪除</a></div></div>';} 
                        echo "</div></div>";
            }
          }
          ?>
          <div class="pagination">
          <?php
          // print las page
          echo ($page_now > 1) ? 
          "<a href='?page=" .($page_now-1) ."' class='page'>&laquo;</a>" : '';
          // print pages
          for ($i = 1; $i <= $page_num; $i += 1) {
            echo "<a href='?page=";
            echo $i . "' ";
            echo ($i == $page_now) ? "class='page active'>" : "class='page'>";
            echo $i . "</a>";
          }
          // print next page
            echo ($page_now < $page_num) ? 
            "<a href='?page=" .($page_now+1) ."' class='page'>&raquo;</a>" : '';
          ?>
          </div>
        </div>
    <!--資料總數-->
          <?php
            echo "<div class = data_footer>";
            echo 'message ' . $page_start . ' ~ ';
            echo (($page_start+9) < $count_num) ? ($page_start+9) : $count_num;
            echo ' of ' . $count_num;
            echo "</div>";
          ?>
    </div>
</body>
</html>
