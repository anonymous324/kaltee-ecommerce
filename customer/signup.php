<?php

session_start();
include("../functions/functions.php");
// include("../include/security.php");
require_once "../controllerUserData.php";
?>
<!DOCTYPE html>
<html lang="en">
  <html>
    <head>
      <title>Sign Up</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta charset="utf-8" />
      <link rel="stylesheet" type="text/css" href="../css/signup.css" />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      />
      <link
        href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600"
        rel="stylesheet"
        type="text/css"
      />
      
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
      <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.body{
  background-image: linear-gradient(rgba(0,0,0, 0.4),
              rgba(0,0,0, 0.4)),url(../images/background/bg4.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.logo {
  
}
.logo img {
  width: 210px;
  padding: 2rem 0rem;
  display: block;
  margin: 0px auto;
}


.login-page {
  width: 460px;
  padding: 8% 0 0;
  margin: auto;

}
.form {
  position: relative;
  z-index: 1;
/*  background: black;*/
  max-width: 1000px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
/*  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);*/
  
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

.form button:hover,.form button:focus {
  background: red;
   box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  transform: translateY(-4px);
}
.form button:active {
  transform: translateY(2px);
  box-shadow: 0 2.5px 5px rgba(0, 0, 0, 0.2);
}

.form .message {
  
  margin: 6px 6px;
  color: #808080;
  font-size: 11px;
  text-align: center;
  font-weight: bold;
  font-style: normal;

  

}
.form .message a {
  color: #FFFFFF;
  text-decoration: none;
  font-size: 13px;
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
body {
  background: #76b852; 
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;    
}
      </style>
    </head>

    <body class="body">


      <div class="login-page">
        <div class="form">
            <form METHOD="POST" class="login-form">
            <div class="logo">
              <img src="../images/finelogo.png" width="200px" />
            </div>
            <?php
              if(count($errors) == 1){
            ?>
            <div class="alert alert-danger text-center">
              <?php
                foreach($errors as $showerror){
                  echo $showerror;
                }
              ?>
            </div>
            <?php
              }elseif(count($errors) > 1){
            ?>
            <div class="alert alert-danger">
              <?php
                foreach($errors as $showerror){
              ?>
                <li><?php echo $showerror; ?></li>
                <?php
                  }
                ?>
            </div>
            <?php
              }
            ?>
            <input type="file" name="profile" placeholder="Choose Profile">
            <input type="text" placeholder="Full Name" name="fullname" />
            <!-- <input type="address" placeholder="Address" name="address" required/> -->
            <input type="text" placeholder="Email Address" name="email"/>
            <input type="text" name="contact" placeholder="Mobile Number" />
            <input type="date" placeholder="Date Of Birth" name="dob"/>
            <input type="password" id="password" placeholder="Set A Password" name="password"/>
            <img src="../images/icon/show.png" onclick="show()">
            <br>
            <br>
            <div class="terms&conditions">
              <p style="color: white; font-weight: bolder;"></p>
            </div>
            <input class="form-control button" type="submit" name="signup" value="Signup" style="background-image: linear-gradient(rgba(0,0,0, 0.1),
              rgba(0,0,0, 0.1)),url('../images/background/naruto.gif');width: 200px; color: #FFFFFF; -webkit-transition: all 0.3 ease; transition: all 0.3 ease; cursor: pointer; transition: all 0.2s; background-size: cover; background-position: center; border: 2px solid white; border-radius:50px; margin: 0px 0px 8px; padding: 15px;">
          </form>
        </div>
      </div>
      <footer>
        <center><p style="color: white; letter-spacing: 3px;font-size: 12px;">Made with &#x2764; in India</br>&#169; Kaltee-2023</p></center>
      </footer>
    </body>
    <script>
      function show() {
        var password = document.getElementById("password");
        var icon = document.querySelector(".fas");

        // ========== Checking type of password ===========
        if (password.type === "password") {
          password.type = "text";
        } else {
          password.type = "password";
        }
      }


    </script>

</html>
