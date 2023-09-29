<?php
    include('adminPanel/includes/db.php');
?>
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700');
    *
    {
        -webkit-box-sizing: border-box;
                box-sizing: border-box;
        margin: 0;
        padding: 0;
    }


    body
    {
        font-family: 'Roboto', sans-serif;
    }
    a
    {
        text-decoration: none;
    }
    .cards {
        width: 300px;
        position: relative;
        /* box-shadow: 0 2px 7px #dfdfdf; */
        margin: 10px auto;
        /* background: #000000; */
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
        border-top: 1px solid #eee;
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

    <div class="col-11 mx-auto " style="background-color: #000000">
        <div class="col-12 m-auto">
            <div class="d-flex justify-content-center m-auto py-5">
                <p id="header">GRAPHIC TEES</p>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <?php
                    $products_result = mysqli_query($conn,"SELECT * FROM products");
                ?>
                <?php
                    if(mysqli_num_rows($products_result) > 0) {
                        $i=0;
                        while($row = mysqli_fetch_array($products_result)) {
                ?>
                <div class="col cards">
                    <div class="badge">Hot</div>
                    <div class="product">
                        <img style="width: 100%" src="adminPanel/img/<?php echo $row['product_img']; ?>" alt="" />
                    </div>
                    <div class="product-details">
                        <h6><a href=""><?php echo $row["artist"] ?></a></h6></small>
                        <span class="product-catagory" ><?php echo $row["product_title"];?></span>
                        <div class="product-bottom-details">
                            <div class="product-price" style="font-family: Georgia, serif; font-size: 20px;"><small style="color: #fff; font-family: Georgia, serif;">$96.00</small>$<?php echo $row["product_price"];?></div>
                            <div class="product-links">
                                <a href=""><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php
                    $i++;
                    if($i==4) {
                        ?>
                            <div class="d-flex justify-content-center m-auto py-5" id="loadMoreprodDiv">
                                <button type="button" class="btn btn-danger" style="font-weight: 500; font-size: 17px; padding: 10px 30px; letter-spacing: 3px; display: inline-block;"><a href="https://localhost/kalteeNew/jackets">VIEW ALL</a></button>
                            </div>
                        <?php
                        break;
                            }
                        }
                    }
                        ?>
                    
            </div>
            
        </div>
    </div>