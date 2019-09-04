<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="content-type" content="text/html;
charset=utf-8">
  <title>W9H2__loginpage__yoding</title>
</head>
<style>
/*參考版型：https://theinitium.com/auth/register/?next=%2Fuser%2Faccount%2F*/
  body {
    margin: 0px;
    background-color: #DDDDDD;
    font-family: 
  }

  .login__page {
    height: ;
    width: ;
  }

  .login__box {
    width: 200px;
    height: 300px;
    padding:10px;
    margin: 100px auto;
    background-color: #F8F8FF;  
  }

  .box__option {
    border-bottom: 2px solid white;
    margin-bottom: 20px;
    display: flex;
  }

  .opt {
    width: 50px;
    color: #DDDDDD;
    text-align: center;
    margin: 0 auto;
  }

  .login{
    color: #696969;
    border-bottom: 2px solid gray;
  }

  .login__input > form > *{
    margin: 15px 15px;
  }

input {
  width: 80%;
  background-color: #F8F8FF;
  border: none;
  border-bottom: 2px solid #DDDDDD;
  padding:0px;
  margin: 0 auto;
}

button {
  width: 80%;
  background-color: #DDDDDD;
  margin: 0 auto;
}

.hide {
  display: none;
}

#clicked{
    border-bottom: 2px solid black;
    color: black;
}

.submit__btn {
  height: 30px;
  background-color: #DDDDDD;
  color: #F8F8FF;
}

a {
  text-decoration: none;
  color: #DDDDDD;
}
</style>
<body>
  <div class="login__page">
    <div class="login__box">
      <div class="box__option">
        <div class="login opt">登入</div>
        <div class="signup opt"><a href="./signup.php">註冊</a></div>
      </div>
      <div class="login__input">
        <form method="POST" action="./handle_login.php">
          <input type="text" placeholder="使用者名稱" name='login__username'>
          <input type="text" placeholder="密碼" name='login__password'>
          <input type='submit' value="送出" class="submit__btn"/>
        <form/>
      </div>
    </div>
  </div>
</body>
</html>