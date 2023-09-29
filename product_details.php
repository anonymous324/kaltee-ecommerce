<?php
    // include('adminPanel/includes/db.php');
    include("include/header.php");
    // include("mainjacket.php");
?>
<style>
    body {
        background: black;
    }
</style>
<?php
    include('adminPanel/includes/db.php');
    // session_start();?>
<?php
    // Create a database connection
    
    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
         
    }
    // $url = explode("/",$_SERVER["QUERY_STRING"]);
    $product_title = 'select * from products where product_title="'.$_GET['product_title'].'"';
    $products_result = mysqli_query($conn,$product_title);
    if(mysqli_num_rows($products_result) > 0) {
        while($row = mysqli_fetch_array($products_result)) {
?>

<div id="productDetails">
    <div class="navigation my-3 d-flex justify-content-center"><span style="font-family: Fantasy; letter-spacing: 2px; color: white; font-size: 12px;"><a href="index.php"><img src="images/icon/home.png" width="16px;"></a> / <?php echo $_GET['product_title']?></span></div>
    <div class="products row col-12 d-flex justify-content-center bg-dark py-3">
        <div class="row col-5">
            <div class="col-2 my-auto">
                <img src="images/prodcts/t-shirts.webp" width="100%" class="m-2">
                <img src="images/prodcts/t-shirts.webp" width="100%" class="m-2">
                <img src="images/prodcts/t-shirts.webp" width="100%" class="m-2">
                <img src="images/prodcts/t-shirts.webp" width="100%" class="m-2">
            </div>
            <div class="col-10">
                <img src="images/prodcts/t-shirts.webp"width="100%" class="">
            </div>
            <div class="col-12" style="border-top: 1px solid white; padding: margin: 0px 5px;">
                <div class="row pt-5">
                    <div class="col-4">
                        <img src="images/icon/fastshipping.png" width="100%" alt="" srcset="">
                    </div>
                    <div class="col-4">
                        <img src="images/icon/returns.png" width="100%" alt="" srcset="">
                    </div>
                    <div class="col-4">
                        <img src="images/icon/guarentee.png" width="100%" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 mx-3 px-3" style="border-left: 1px solid white;">
            <h3 style="color: white;"><?php echo $row['product_title']?></h3>
            <div class="stocks py-3">
                <p style="color: white">> Stock: <span style="color: green">In Stock</span></p>
                <p style="color: white">> Artist: <span style="color: green"><?php echo $row['artist']; ?></span></p>
            </div>
            <div class="price py-3 d-flex">
                <h1 class="text-danger" style="font-family: Georgia, serif; letter-spacing: 1px;">$<?php echo $row['product_price'];?>.00</h1>
                <h3 style="padding-top: .7rem; padding-left: 2rem; color: #ababab; font-family: Georgia, serif;"><del>$2000.00</del></h3>
            </div>
            <div class="py-5 size">
                <p style="color: white">Size<span style="color: red">*</span></p>
                
            </div>
        </div>
    </div>
</div>
<?php
        }
    }

// include('adminPanel/includes/db.php');
    include("include/footer.php");
    // include("mainjacket.php");
?>