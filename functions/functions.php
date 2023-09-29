<?php

$db = mysqli_connect("localhost","root","","ecom_store");

/// IP address code starts /////
function getRealUserIp(){
    switch(true){
      case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
      case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
      case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
      default : return $_SERVER['REMOTE_ADDR'];
    }
 }
/// IP address code Ends /////


// items function Starts ///

function items(){

global $db;

$ip_add = getRealUserIp();

$get_items = "select * from cart where ip_add='$ip_add'";

$run_items = mysqli_query($db,$get_items);

$count_items = mysqli_num_rows($run_items);

echo "<p class='shopping_cart' class='ml-3'>".$count_items." </p>";

}


// items function Ends ///

// total_price function Starts //

function total_price(){

global $db;

$ip_add = getRealUserIp();

$total = 0;

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($db,$select_cart);

while($record=mysqli_fetch_array($run_cart)){

$pro_id = $record['p_id'];

$pro_qty = $record['qty'];


$sub_total = $record['p_price']*$pro_qty;

$total += $sub_total;






}

echo "$" . $total;



}



// total_price function Ends //

// getPro function Starts //

function getPro(){

	global $db;

	$get_products = "select * from products order by 1 DESC LIMIT 0,8";

	$run_products = mysqli_query($db,$get_products);

	while($row_products=mysqli_fetch_array($run_products)){

		$pro_id = $row_products['product_id'];

		$pro_title = $row_products['product_title'];

		$pro_price = $row_products['product_price'];

		$pro_img1 = $row_products['product_img1'];

		$pro_label = $row_products['product_label'];

		$manufacturer_id = $row_products['manufacturer_id'];

		$get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";

		$run_manufacturer = mysqli_query($db,$get_manufacturer);

		$row_manufacturer = mysqli_fetch_array($run_manufacturer);

		$manufacturer_name = $row_manufacturer['manufacturer_title'];

		$pro_psp_price = $row_products['product_psp_price'];

		$pro_url = $row_products['product_url'];

		if($pro_label == "Sale"){

			$product_price = "<p style='color:red; ' class=' del_price col-12'><del>Rs.$pro_price</del></p>";

			$discount ="Rs.$pro_psp_price";

		}
		else{

			$discount = "";

			$product_price = "<p style='color:white;' class='prices col-md-12 mx-auto'>Rs.$pro_price</p>";

		}


		if($pro_label == ""){
		}
		else{

			$product_label = "

			<a class='label sale' href='#' style=''>

			<div class='thelabel'>$pro_label</div>

			<div class='label-background'> </div>

			</a>

			";

		}


		echo "

			<div class='col-md-6 col-lg-3 mb-2 py-3'>
				<div class='card h-100' style='margin: auto; position: relative; background-color:#000;'>
					<a href='display.php?id=$pro_id'>
						<img src='admin_area/product_images/$pro_img1' class='img-responsive' style='width:100%;' >
					</a>
					<a style='position: absolute; top: 20px; right: 20px;'>
						<svg class='icon' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
							<path d='M12.39 20.87a.696.696 0 0 1-.78 0C9.764 19.637 2 14.15 2 8.973c0-6.68 7.85-7.75 10-3.25 2.15-4.5 10-3.43 10 3.25 0 5.178-7.764 10.664-9.61 11.895z' fill='none'/>
						</svg> 
					</a>
					<div class='card-body' style='position: relative;'>
						<div class='details h-100'>
							<h4 class='card-title'>
								<p id='artist_name'>
									<a href='#artist_name' class='artist' style='color:#e4e8f3;'>
										by $manufacturer_name
									</a>
								</p>
								<a href='display.php?id=$pro_id' class='pro_title' style='text-decoration:none; color: #91a0cd;'>
									$pro_title
								</a>
							</h4>
								<div class='row mx-auto'>
								<p style='color:white; font-size: 1.5rem' class='col-12' > $discount </p>
								$product_price
								</div>
							<div class='buttons' background-color='white'>
								<a type='submit' style='position: absolute; color:white; border-radius: 50%; background-color: black; padding: 5px; top: -20px; left: 42%;' href='display.php?id=$pro_id'>
									<img src='images/icon/shopping-cart.png' width='40px' style='background-color: red; padding: 5px; border-radius: 50%'>
								</a>
							</div>
						</div>
					</div>		
				</div>
			</div>

		";

	}

}

// getPro function Ends //


/// getProducts Function Starts ///

function getProducts(){

/// getProducts function Code Starts ///

global $db;

$aWhere = array();

/// Manufacturers Code Starts ///

if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

foreach($_REQUEST['man'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'manufacturer_id='.(int)$sVal;

}

}

}

/// Manufacturers Code Ends ///

/// Products Categories Code Starts ///

if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){

foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'p_cat_id='.(int)$sVal;

}

}

}

/// Products Categories Code Ends ///

/// Categories Code Starts ///

if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

foreach($_REQUEST['cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'cat_id='.(int)$sVal;

}

}

}

/// Categories Code Ends ///

$per_page=6;

if(isset($_GET['page'])){

$page = $_GET['page'];

}else {

$page=1;

}

$start_from = ($page-1) * $per_page ;

$sLimit = " order by 1 DESC LIMIT $start_from,$per_page";

$sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'').$sLimit;

$get_products = "select * from products  ".$sWhere;

$run_products = mysqli_query($db,$get_products);

while($row_products=mysqli_fetch_array($run_products)){

$pro_id = $row_products['product_id'];

$pro_title = $row_products['product_title'];

$pro_price = $row_products['product_price'];

$pro_img1 = $row_products['product_img1'];

$pro_label = $row_products['product_label'];

$manufacturer_id = $row_products['manufacturer_id'];

$get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";

$run_manufacturer = mysqli_query($db,$get_manufacturer);

$row_manufacturer = mysqli_fetch_array($run_manufacturer);

$manufacturer_name = $row_manufacturer['manufacturer_title'];

$pro_psp_price = $row_products['product_psp_price'];

$pro_url = $row_products['product_url'];


if($pro_label == "Sale" or $pro_label == "Gift"){

	$product_price = "<del> $$pro_price </del>";
	$product_psp_price = "| $$pro_psp_price";
}
else{

$product_psp_price = "";

$product_price = "$$pro_price";

}


if($pro_label == ""){


}
else{
	$product_label = "
	<a class='label sale' href='#' style='color:black;'>
	<div class='thelabel'>$pro_label</div>
	<div class='label-background'> </div>
	</a>
	";
}
echo "

<div class='col-md-4 col-sm-6 center-responsive' >

<div class='product' >

<a href='$pro_url' >

<img src='admin_area/product_images/$pro_img1' class='img-responsive' >

</a>

<div class='text' >

<center>

<p class='btn btn-warning'> $manufacturer_name </p>

</center>

<hr>

<h3><a href='$pro_url' >$pro_title</a></h3>

<p class='price' > $product_price $product_psp_price </p>

<p class='buttons' >



<a href='$pro_url' class='btn btn-danger'>

<i class='fa fa-shopping-cart' data-price=$pro_price></i> Add To Cart
</a>


</p>

</div>

$product_label


</div>

</div>

";

}
///Products function Code Ends ///



}


/// getProducts Function Ends ///


/// getPaginator Function Starts ///

function getPaginator(){

/// getPaginator Function Code Starts ///

$per_page = 6;

global $db;

$aWhere = array();

$aPath = '';

/// Manufacturers Code Starts ///

if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

foreach($_REQUEST['man'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'manufacturer_id='.(int)$sVal;

$aPath .= 'man[]='.(int)$sVal.'&';

}

}

}

/// Manufacturers Code Ends ///

/// Products Categories Code Starts ///

if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){

foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'p_cat_id='.(int)$sVal;

$aPath .= 'p_cat[]='.(int)$sVal.'&';

}

}

}

/// Products Categories Code Ends ///

/// Categories Code Starts ///

if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

foreach($_REQUEST['cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'cat_id='.(int)$sVal;

$aPath .= 'cat[]='.(int)$sVal.'&';

}

}

}

/// Categories Code Ends ///

$sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'');

$query = "select * from products ".$sWhere;

$result = mysqli_query($db,$query);

$total_records = mysqli_num_rows($result);

$total_pages = ceil($total_records / $per_page);

echo "<li><a href='shop.php?page=1";

if(!empty($aPath)){ echo "&".$aPath; }

echo "' >".'First Page'."</a></li>";

for ($i=1; $i<=$total_pages; $i++){

echo "<li><a href='shop.php?page=".$i.(!empty($aPath)?'&'.$aPath:'')."' >".$i."</a></li>";

};

echo "<li><a href='shop.php?page=$total_pages";

if(!empty($aPath)){ echo "&".$aPath; }

echo "' >".'Last Page'."</a></li>";

/// getPaginator Function Code Ends ///

}

/// getPaginator Function Ends ///



?>
