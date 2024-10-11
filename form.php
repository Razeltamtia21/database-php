<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login and Registration Form in HTML & CSS | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="https://i.pinimg.com/enabled/564x/c0/5c/51/c05c51e89fc24443b3e3deaa5ca63a3b.jpg" alt="">
        <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="https://i.pinimg.com/enabled/564x/c0/5c/51/c05c51e89fc24443b3e3deaa5ca63a3b.jpg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="form.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Sumbit" name="submit-login">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="form.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Sumbit" name="submit-register">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>

<?php 

$connect = mysqli_connect("localhost", "root", "", "latihan");

if(isset($_POST["submit-login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "INSERT INTO login VALUES('', '$email', '$password')";

    mysqli_query($connect, $query);

    if($connect){
        echo "<script>alert('Connect Sukses')</script>";
    }else {
        echo "<script>alert('Connect not Sukses')</script>";
    }

    echo "<script>window.location.href = '';</script>";
}

?>

<?php 

$connect = mysqli_connect("localhost", "root", "", "latihan");

if(isset($_POST["submit-register"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "INSERT INTO register VALUES('', '$username','$email', '$password')";

    mysqli_query($connect, $query);

    if($connect){
        echo "<script>alert('Connect Sukses')</script>";
    }else {
        echo "<script>alert('Connect not Sukses')</script>";
    }

    echo "<script>window.location.href = '';</script>";
}

?>