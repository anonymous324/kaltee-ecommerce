<?php 
include("../adminPanel/includes/db.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$errors = array();
// session_start();

if(isset($_POST['email'])){
    $fullName = $_POST['fullname'];
    $email = $_POST['email'];
    $mobile = $_POST['contact'];
    $passwordHash = $_POST['password'];
    $dob = $_POST['dob'];
    $email_check = "SELECT * FROM user WHERE email = '$email'";
    $res = mysqli_query($conn, $email_check);
    if(mysqli_num_rows($res) > 0){
        echo "<script>alert('Email that you have entered is already exist!')</script>";
        // header('location: customer_login.php');
    }
    else {
        // header('location: user-otp.php');
    }
    if(mysqli_num_rows($res) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $insert_data = "INSERT INTO user (fullName, email, mobile, passwordHash, registeredAt, dob, otp)
                        values('$fullName', '$email', '$mobile','$passwordHash', now(), '$dob', '$code')";
        $data_check = mysqli_query($conn, $insert_data);
        if($data_check){

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);
            
            try {
                //Server settings
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP(); 
                $mail->Mailer = "smtp";                                           //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'vrai3245@gmail.com';                     //SMTP username
                $mail->Password   = 'zargbptxeuvpazyp';                               //SMTP password
                $mail->SMTPSecure = "ssl";
                // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('vrai3245@gmail.com', 'Kaltee');
                $mail->addAddress($email);
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Email Verification Code For Kaltee Clothing';
                $mail->Body    = "Your verification code is <b>".$code."</b>";
                $mail->send();
                header('location: user-otp.php');
                return true;
                echo 'Message has been sent';
                ?>
                
                <?php
                exit();
            }

            catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                return false;
            }
            
            
        }
    }
}




?>