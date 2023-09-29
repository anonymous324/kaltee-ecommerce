<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaltee</title>
</head>

<!-- ----------------------------------GOOGLE FONT FOR SITE------------------------------------------------------- -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ysabeau+SC:wght@1000&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Ubuntu:wght@700&display=swap" rel="stylesheet">

<!-- -------------------------------------GOOGLE FONT FOR SITE END ------------------------------------------------------ -->

<!-- ----------------------------------------------------- START FONT AWESOME FOR ICON ------------------------------------------------  -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<!-- ----------------------------------------------------- END FONT AWESOME FOR ICON ------------------------------------------------  -->

<!-- ---------------------------------------BOOTSTRAP START VERSION 5.0.2------------------------------------------------------------ -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- ------------------------------------------------- BOOTSTRAP END VERSION 5.0.2 ------------------------------------------------------------ -->




<!-- -----------------------------------------jquery 3.7.0 start ---------------------------------------- -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script     src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- -------------------------------------------- jquery 3.7.0 end -------------------------------------------- -->
<style>
    * {
        box-sizing: border-box;
        padding: 0px;
        /* margin: 0px; */
        
    }
    html, body { overflow-x: hidden;}
    #logo {
        width: 150px;
    }
    .dropdown-toggle::after {
        content: none;
    }
    hr {
        background-color: white;
        border: none;
    }
    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }
    .my-float {
        margin-top: 16px;
    }
    .float2 {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        left: 40px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }
    #MENU {
        background: rgba(0,0,0,0.9);
    }
    #MENU .menucolor {
        color: white;
        font-size: 18px;
    }
    #MENU .active{
        color: red;
        font-weight: 700;
    }
    .fa-user-circle,
    .fa-shopping-cart {
        font-size: 30px;
        /* padding: 4px; */
    }
    #header {
        color: #ffffff;
        font-size: 35px;
        font-weight: 700;
    }
    #artist {
        text-align: left;
        color: red;
        font-family: 'Ysabeau SC', sans-serif;
    }

    .submenu {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: 300;
        font-size: 18px;
        text-decoration: none;
        color: white;
        text-align: left;
    }


    @media screen and (max-width: 770px) {
        #MENU .menucolor{
            font-size: 13px;
        }
        #header {
            font-size: 25px;
            font-weight: 800;
        }
    }
    @media screen and (max-width:425px) {
        #logo {
            width: 100px;
        }
        
    }
.ofoot{
    color:white;
}



    
</style>

<body background="#000000">
    <div class="floating">
        <a href="whatsapp:contact=+918208601720@s.whatsapp.com&message='I would like to chat with you'" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float" style="color: black"></i>
        </a>
        <a href="https:api.whatsapp.com/send?phone=8208601720&text=Hello%21%20Quisiera%20m%C3" class="float2" target="_blank">
            <button type="button" class="btn btn-danger" style="font-weight: 500; font-size: 15px; padding: 10px 30px; letter-spacing: 1px;">REQUEST CALLBACK</button>
        </a>
    </div>
    <header id="headerTop" class="py-1" style="background-color:red; font-size: 16px; font-weight: 600; color: white;">
        <marquee>
            <div>FREE SHIPPING ON ALL PREPAID ORDERS</div>
        </marquee>
    </header>
    <div class="row justify-content-center align-items-center py-3" style="background-image: -webkit-linear-gradient(rgba(0,0,0, 0.8) 0%,rgba(0,0,0, .8) 100%), url('images/background/navbackground.jpg') ;background-size: cover; background-position: center center; --bs-gutter-x:0;">
        <div class="col-lg-4 col-md-4 col-4">
            <svg fill="#ffffff" width="64px" height="64px" viewBox="-16 -16 64.00 64.00" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" stroke-width="0.00032" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.256"></g><g id="SVGRepo_iconCarrier"> <title>bulb</title> <path d="M5.344 10.688q0 2.912 1.44 5.344t3.936 3.84q0.512 0.736 1.056 1.344 0 0-0.032 0.064t0 0.064v4.256q0 0.896 0.608 1.536t1.504 0.608h4.288q0.864 0 1.504-0.608t0.608-1.536v-4.256q0-0.032 0-0.064t-0.032-0.064q0.544-0.608 1.088-1.344 2.432-1.376 3.904-3.84t1.472-5.344-1.44-5.344-3.904-3.904-5.344-1.44-5.344 1.44-3.904 3.904-1.408 5.344zM13.856 30.944q0 0.448 0.32 0.768t0.768 0.288h2.112q0.448 0 0.768-0.288t0.32-0.768-0.32-0.768-0.768-0.32h-2.112q-0.448 0-0.768 0.32t-0.32 0.768z"></path> </g></svg>
        </div>
        <div class="col-lg-4 col-md-4 col-4 text-center" style="background-color: ;">
            <img src="images/finelogo.png" alt="" id="logo" class="py-3">
        </div>
        <div class="col-lg-4 col-md-4 col-4 d-flex justify-content-end">
            <nav class="navbar" style="margin-right: 19px;">
                <div>
                    <button class="btn" id="show">
                        <img src="./images/icon/menu.png">
                    </button>
                </div>
            </nav>
            
        </div>
    </div>
    <div class="collapse" id="menu" style="background-color: black">
        <div class="row d-flex justify-content-center align-items-center p-2">
            <div class="col-12 col-lg-2 pt-4">
                <img src="./images/icon/coupon.png" style="background: white; padding: 4px; border-radius: 50%;" width="40px">
            </div>
            <div class="col-lg-9 col-12 pt-4">
                <div class="row menu">
                    <div class="col-lg-2 col-12 text-center"><a href="index.php" class="submenu">Home</a></div>
                    <div class="col-lg-2 col-12 text-center"><a href="" class="submenu">Featured</a></div>
                    <div class="col-lg-2 col-12 text-center"><a href="" class="submenu">Categories</a></div>
                    <div class="col-lg-2 col-12 text-center"><a href="" class="submenu">Archives</a></div>
                    <div class="col-lg-2 col-12 text-center"><a href="" class="submenu">Customize</a></div>
                </div>
            </div>
            <div class="col-lg-1 col-12 text-center pt-4">
                <a class="text-align-center"><img src="./images/icon/user.png" style="margin-right: 10px; width: 25px;"></a>
                <a><img src="./images/icon/shopping-cart.png" style="width: 30px;"></a>                
            </div>
        </div>
    </div>


    
    

