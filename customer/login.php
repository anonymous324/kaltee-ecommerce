<?php 
	session_start();
	include("../adminPanel/includes/db.php");
	include("../functions/functions.php");
?>
<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

body{
  background: url('../images/background/bg2.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}

.logo {
    /* background: black; */
  }
  .logo img {
    width: 80%;
    padding: 2rem 0rem;
    display: block;
    margin: 0px auto;
  }

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;

}
.form {
  position: relative;
  z-index: 1;
  background: black;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  
}
.form input {
  font-family: FontAwesome, "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  border-radius:10px;
}
.form button {
  font-family: "Titillium Web", sans-serif;
  font-size: 14px;
  font-weight: bold;
  letter-spacing: .1em;
  outline: 0;
  background: #d21404;
  width: 100%;
  border: 0;
border-radius:30px;
  margin: 0px 0px 8px;
  padding: 15px;
  color: #FFFFFF;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  transition: all 0.2s;


}
.form button:hover,.form button:focus {
  background: #ff00000;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  transform: translateY(-4px);
}
.form button:active {
  transform: translateY(2px);
  box-shadow: 0 2.5px 5px rgba(0, 0, 0, 0.2);
}

.form .message {
  
  margin: 14px 6px;
  color: #c7c2c2;
  font-size: 14px;
  text-align: center;
  font-weight: bold;
  font-style: normal;

  

}
.form .message a {
  color: #FFFFFF;
  text-decoration: none;
  font-size: 12px;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}

  </style>
  <title>Kaltee - Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="body">

<div class="login-page">
  <div class="form">
 
    <form class="login-form" method="POST"> 
      <div>
        
      </div>
      <div class="logo">
        <a href="../index.php">
          <img src="../images/finelogo.png"/>
        </a>
      </div>
      <input type="text" name="c_email" placeholder="&#xf007;  username" required/>
      <input type="password" id="password" name="c_pass" placeholder="&#xf023;  password" />
      <img src="../images/icon/show.png" onclick="show()"> 
      <br>
      <p class="message"><a href="#">Forgot password?</a></p>
      <button name="login" value="Login">LOGIN</button>
      <hr/>
      <p class="message">Don't have an account?</p>
      <button type="button" onclick="window.location.href='signup.php'">SIGN UP</button>
    </form>

  </div>
</div>

  <script>
    function show(){
      var password = document.getElementById("password");
      var icon = document.querySelector(".fas")

      // ========== Checking type of password ===========
      if(password.type === "password"){
        password.type = "text";
      }
      else {
        password.type = "password";
      }
    };
  </script>
</body>
</html>


<?php
    if(isset($_POST['login'])){

      $customer_email = $_POST['c_email'];

      $customer_pass = $_POST['c_pass'];

      $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

      $run_customer = mysqli_query($con,$select_customer);

      $check_customer = mysqli_num_rows($run_customer);

      if($check_customer==0){

        echo "<script>alert('password or email is wrong')</script>";

        exit();

      }

      if($check_customer==1 AND $status==0){

        $_SESSION['customer_email']=$customer_email;

        echo "<script>alert('You are Logged In')</script>";
        header("Location: ../index.php");
        // echo "<script>window.open('my_account.php?my_orders','_self')</script>";
      }
      else {

        $_SESSION['customer_email']=$customer_email;

        echo "<script>alert('You are Logged In')</script>";

        echo "<script>window.open('../index.php')</script>";

      } 


    }

?>