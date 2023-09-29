<?php
    session_start();
    include('adminPanel/includes/db.php');
    include("include/header.php");
    include("mainjacket.php");
?>
<style>
* {
    box-sizing: border-box;
}

body {
    background-color: black;
}

a {
    text-decoration: none;
}

.cards {
    width: 300px;
    position: relative;
    /* box-shadow: 0 2px 7px #dfdfdf; */
    margin: 10px;
    padding: 15px;
    display: block;
    background: #000000;
    border-radius: 15px;
}

.badge {
    position: absolute;
    left: 0;
    top: 20px;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 700;
    background: red;
    color: #fff;
    padding: 3px 10px;
}

.product-tumb {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 300px;
    padding: 3px;
    background: #000000;
}

.product-tumb img {
    max-width: 300px;
    max-height: 90%;
}

.product-details {
    padding: 10px;
}

.product-catagory {
    display: block;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    color: #ccc;
    margin-bottom: 18px;
}

.product-details h4 a {
    font-weight: 500;
    display: block;
    margin-bottom: 18px;
    text-transform: uppercase;
    color: white;
    text-decoration: none;
    transition: 0.3s;
}

.product-details h4 a:hover {
    color: #fbb72c;
}

.product-details p {
    font-size: 15px;
    line-height: 22px;
    margin-bottom: 18px;
    color: #999;
}

.product-bottom-details {
    overflow: hidden;
    border-top: 1px solid #e1ddd2;
    padding-top: 20px;
}

.product-bottom-details div {
    float: left;
    width: 50%;
}

.product-price {
    font-size: 18px;
    color: #ff0000;
    font-weight: 600;
}

.product-price small {
    font-size: 80%;
    font-weight: 400;
    text-decoration: line-through;
    display: inline-block;
    margin-right: 5px;
}

.product-links {
    text-align: right;
}

.product-links a {
    display: inline-block;
    margin-left: 5px;
    color: #e1e1e1;
    transition: 0.3s;
    font-size: 17px;
}

.product-links a:hover {
    color: #ff0000;
}
</style>
<div class="col-11 mx-auto my-5">
    <div class="d-flex justify-content-center align-items-center my-5">
        <h3 style="color:white;">Kool Jackets</h3>
        <?php
                $products_result = mysqli_query($conn,"SELECT * FROM products order by id asc");
                $number_of_jacket=mysqli_num_rows($products_result);    
            ?>
        <br>
        <p style="color: white"><?php echo $number_of_jacket; ?></p>
    </div>


    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mx-1">
        <?php
                    $products_result = mysqli_query($conn,"SELECT * FROM products");
                ?>
        <?php
                    if(mysqli_num_rows($products_result) > 0) {
                        $i=0;
                        while($row = mysqli_fetch_array($products_result)) {
                ?>
        <div class="col cards mx-auto">
            <div class="badge">Hot</div>
            <?php echo "<a href='product_details.php?product_title=".$row['product_title']."'>" ?>
            <div class="product">
                <img style="width:100%;" src="adminPanel/img/<?php echo $row['product_img']; ?>" alt="" />
            </div>
            <?php "</a> ";    ?>
            <div class="product-details">
                <h6><?php echo $row["artist"] ?></h6></small>
                <span class="product-catagory"><?php echo $row["product_title"];?></span>
                <div class="product-bottom-details">
                    <div style="font-family: Georgia,serif; font-size: 20px;" class="product-price"><small style="font-family: Georgia, serif;">$96.00</small>$<?php echo $row["product_price"];?></div>
                    <div class="product-links">
                        <a href="javascript:void(0)" onclick="getProduct('<?php echo $row['id']; ?>')"><i
                                class="fa fa-heart"></i></a>
                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <?php
                    $i++;
                        }
                    }
                ?>

    </div>
    <?php
    include("include/footer.php");
?>