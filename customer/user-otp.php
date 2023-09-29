<?php 
require_once "../controllerUserData.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Code Verification</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <form action="" METHOD="POST" class="verification-form">
                <h1>Verification</h1>
                <p>Please enter the verification code sent to your email</p>
                <input type="text" id="verification-code" name="otp" placeholder="Enter verification code" required>
                <input id="button" class="form-control button" type="submit" name="check">
            </form>
        </div>
    </body>
</html>

