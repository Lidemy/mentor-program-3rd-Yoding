<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>W9H2__loginpage__yoding</title>

</head>
<style>
/*參考版型：https://theinitium.com/auth/register/?next=%2Fuser%2Faccount%2F*/
  body {
    margin: 0px;
    background-color: #DDDDDD;
    font-family: 
  }

  .signup__page {
    height: ;
    width: ;
  }

  .signup__box {
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

  .signup__input > form > *{
    margin: 15px 15px;
  }

  .sign__up {
    color: #696969;
    border-bottom: 2px solid gray;
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

</style>
<body>
  <div class="signup__page">
    <div class="signup__box">
      <div class="box__option">
        <div class="signup opt">登入</div>
        <div class="sign__up opt">註冊</div>
      </div>
      <div class="signup__input">
        <form method="POST" action="./add_user.php">
          <input type="text" placeholder="使用者名稱" name='username'>
          <input type="text" placeholder="暱稱" name='nickname'>
          <input type="text" placeholder="密碼" name='password'>
          <input type="text" placeholder="確認密碼" name='password2'>
          <input type='submit' value="送出" class="submit__btn"/>
        <form/>
      <div class="signup__input">
        <form >
      </div>
    </div>
  </div>

</body>
</html>