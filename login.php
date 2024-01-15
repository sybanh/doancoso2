<?php
session_start();
if(isset($_GET['submit'])){
  switch($_GET['submit']){
    case 'out':
      if(isset($_SESSION['userName'])){
        unset($_SESSION['userName']);
      }
    break;
  }
  unset($_SESSION['userName']);
}
include('connect.php');
if(isset($_POST['btn_Signup'])){
        $user1 = $_POST['name'];
        $pass1= $_POST['pass'];
    $sql1 = "INSERT INTO user (name_user,password) 
    VALUES ('$user1','$pass1')";
    $result1 = mysqli_query($conn, $sql1);
    header('location:login.php');
}
if(isset($_POST['btn_Login'])){
    $name = $_POST['name'];
    $pass = $_POST['pass'];
$sql = "SELECT * FROM user WHERE name_user = '$name' AND password ='$pass'";
$result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==1 && $name == "admin"){
        $_SESSION['adminName'] = $name;
        header('location:admin.php');
    }else if(mysqli_num_rows($result)>0){
        $_SESSION["userName"] = $name;
        header("location:index.php");
    }
    else{
        echo 'Tên đăng nhập hoặc mật khẩu sai!';
    }
}
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Login and Registration Form in HTML | CodingNepal</title>
    <link rel="stylesheet" href="./css/login.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked />
          <input type="radio" name="slide" id="signup" />
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="login.php" class="login" method="POST">
            <div class="field">
              <input type="text" placeholder="Enter UserName" name="name" required />
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name="pass" required />
            </div>
            <div class="pass-link">
              <a href="#">Forgot password?</a>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login" name="btn_Login"/>
            </div>
            <div class="signup-link">
              Not a member? <a href="">Signup now</a>
            </div>
          </form>
          <form action="login.php" class="signup" method="POST">
            <div class="field">
              <input type="text" placeholder="Enter UserName" name="name" required />
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name="pass" required />
            </div>
            <div class="field">
              <input type="password" placeholder="Confirm password" required />
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Signup" name="btn_Signup" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = () => {
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      };
      loginBtn.onclick = () => {
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      };
      signupLink.onclick = () => {
        signupBtn.click();
        return false;
      };
    </script>
  </body>
</html>
