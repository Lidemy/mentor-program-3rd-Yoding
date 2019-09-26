<?php

        require_once('./conn.php');
        $session_id = $_COOKIE['session_id'];

        $sql_session_check = "SELECT * 
        FROM yoding_user_certificate 
        INNER JOIN yoding_users
        ON yoding_user_certificate.user_id = yoding_comments.user_id
        WHERE id =" . "'$session_id'";

        echo $sql_session_check;
?>

<?php
require_once('./conn.php');

$sql_session_check = "SELECT * FROM yoding_user_certificate WHERE id = 11";
//echo $sql_session_check;
$result = $conn->query($sql_session_check);
        if ($result) {
          while ($row = $result->fetch_assoc()) {
          echo $row['id'] . '<br>';
          }
        } else { echo 'login failed';}
?>
