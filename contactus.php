<?php
    session_start();
    include('adminPanel/includes/db.php');
    include("include/header.php");
?>
<style>

    body {
        background-color: black;
    }
    input:focus, textarea:focus, keygen:focus, select:focus {
        outline: none;
    }
    ::-moz-placeholder {
        color: #666;
        font-weight: 300;
        opacity: 1;
    }

    ::-webkit-input-placeholder {
        color: #666;
        font-weight: 300;
    }

    /* contact from design */
    .container {
        padding: 20px 50px 70px;
    }
    .sec1title {
        text-align: center;
    }
    .sec1title h1 {
            font-size: 40px;
        margin: 25px;
        text-transform: uppercase;
        color: #16F1D4;
        font-weight: 400;
    }
    .section2 {
        position: relative;
        overflow: hidden;
    }
    .section2 .contactform {
        position: absolute;
        top: 0;
        right: 10%;
        z-index: 99;
        background: #393939;
        padding: 30px 40px 70px;
        box-sizing: border-box;
    }
    .section2 .contactform input.form-fields,
    .section2 .contactform button.form-fields,
    .section2 .contactform textarea.form-fields {
        padding: 0 0 0 40px;
        display: block;
        box-sizing: border-box;
        width: 350px;
        font-size: 16px;
        background: #323232;
        margin: 7px 0;
        border: 1px solid #00C1A8;
        color: #6BECDB;
        opacity: 0.5;
        min-height: 45px;
        text-shadow: none;
        position: relative;
    }
    .section2 .contactform textarea.form-fields {
        padding: 8px 40px;
        resize: none;
    }
    .section2 .contactform button.form-fields.button {
        color: #16F1D4;
        font-size: 14px;
        padding: 0;
        text-transform: uppercase;

    }
    .section2 .contactform button.form-fields.button:hover {
        background: #00C1A8;
        color: #fff;
        cursor: pointer;
        opacity: 1;
    }

    .section2 .contactform button.form-fields.button i {
        margin-left:10px;
    }

    .section2 .contactform h5 {
        color: #16F1D4;
        font-size: 16px;
        margin-bottom: 15px;
    }
    .section2 .contactform label .cntfrmicn {
        color: #00C1A8;
        padding: 14px;
        position: absolute;
        z-index: 99;
    }

    @media only screen and (max-width: 660px) {
        .container {
            padding: 10px 20px 30px;
        }
        .contmap {
            height: 475px !important;
        }
        .sec1title h1 {
            font-size: 28px;
        }
        .section2 .contactform { padding: 10px; right: 0; width: 100%; }
        .section2 .contactform input.form-fields, .section2 .contactform button.form-fields, .section2 .contactform textarea.form-fields {
            width: 100%;
        }
    }
</style>
<div class="container">
    <div class="row d-flex m-auto py-5">
        <div class="col-5">
            <div class="images">
                <img src="images/prodcts/t-shirts.webp" alt="" style="width: 510px;"/>
            </div>
        </div>
        <div class="col-5" style="background-color: #0f0f0f;">
            <div class="contact">
                <h1 style="color: white;" class="text-center py-3">Get in Touch</h1><br/>
                <div class="text-center">
                    <input placeholder="Name" style="color: #fefefe; background-color: transparent; border: 1px solid white; border-radius: 50px; width: 350px; padding: 5px 10px;" class="my-2"/>
                    <input placeholder="Email" rows="4" cols="50" style="background-color: transparent; border: 1px solid white; border-radius: 50px; width: 350px; padding: 5px 10px;" class="my-2"/>
                    <textarea placeholder="Message" style="background-color: transparent; border: 1px solid white; border-radius: 10px; width: 350px; padding: 5px 10px; height: 150px" class="my-2"></textarea>
                    </br>
                    <button style="background: red; width: 350px; border: none; padding: 5px 10px; border-radius: 15px; color: white; font-size: 18px;"><b>Send</b></button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include('include/footer.php');
?>