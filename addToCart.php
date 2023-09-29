<?php
    session_start();
    include('adminPanel/includes/db.php');
    include("include/header.php");
    include("mainjacket.php");
?>










<div class="container">
		<!--  Shopping cart table wrapper  -->
		<div id="shopping-cart">
			<div class="txt-heading">
				<h1>Shopping cart</h1>
			</div>
			<a onClick="emptyCart()" id="btnEmpty">Empty Cart</a>
			<table class="tbl-cart" cellpadding="10" cellspacing="1">
				<thead>
					<tr>
						<th>Name</th>
						<th class='text-right' width="10%">Unit Price</th>
						<th class='text-right' width="5%">Quantity</th>
						<th class='text-right' width="10%">Sub Total</th>
					</tr>
				</thead>
				<!--  Cart table to load data on "add to cart" action -->
				<tbody id="cartTableBody">
				</tbody>
				<tfoot>
					<tr>
						<td class="text-right">Total:</td>
						<td id="itemCount" class="text-right" colspan="2"></td>
						<td id="totalAmount" class="text-right"></td>
					</tr>
				</tfoot>
			</table>
		</div>
		<!-- Product gallery shell to load HTML from JavaScript code -->
		<div id="product-grid">
			<div class="txt-heading">
				<h1>Products</h1>
			</div>
			<div id="product-item-container"></div>
		</div>
	</div>



    <!-- <div id="product-grid">
        <div class="txt-heading">
            <div class="txt-heading-label">Products</div>
        </div>
        <?php
        $query = "SELECT * FROM products";
        $product_array = $shoppingCart->getAllProduct($query);
        if (! empty($product_array)) {
            ?>
            <form method="post" action="index.php?action=add">
            <div>
                <?php
            foreach ($product_array as $key => $value) {
                ?>
            <div class="product-item"
                    id="product-item-<?php echo $product_array[$key]["id"]; ?>">


                    <div class="product-image">
                        <img
                            src="<?php echo $product_array[$key]["image"]; ?>"
                            onclick="selectImage(<?php echo $product_array[$key]["id"] ?>);" />
                        <div class="product-title">
                            <input type="checkbox" class="checkstatus"
                                name="chk_product[]"
                                data-id="<?php echo $product_array[$key]["id"]; ?>"
                                data-code="<?php echo $product_array[$key]["code"]; ?>"><?php echo $product_array[$key]["name"]; ?></br>
                <?php echo "$".$product_array[$key]["price"]; ?></br>
                        </div>
                    </div>


                    <input type="hidden" name="selected_product[]"
                        id="product-<?php echo $product_array[$key]["id"]?>"
                        value="" />


                </div>
        <?php
            }
            ?>
            </div>
            <div>
                <input type="submit" name="add_to_cart" value="Add to Cart"
                    class="btn-submit" />
            </div>
        </form>
            <?php
        }
        ?>
    </div> -->