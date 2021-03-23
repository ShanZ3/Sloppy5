<!DOCTYPE html>
<html>
<head>
<title>Your Order</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="shopstyle.css" media="screen" type="text/css" />
<link nonce="" rel="stylesheet" href="stylesheet_login.css" data-n-p="">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="order_info.js"></script>
<style>
	@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
</style>
<link rel="stylesheet" href="thankyou.css">
<link rel="icon" href="sloppy5_icon.PNG">
<?php
	$uname = $_GET["email"];
?>	
</head>

<body id="checkout-page">

<div id="site">
	
	<header class="site-header" id="header">
		<h2 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h2>
	</header>
	
	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">An order confirmation email was sent to <?php echo $uname; ?>. Thank you for shopping with us. We really appreciate you giving us a moment of your time today. Thanks for being you.</p><br><br>
		
		<a href="subscribe.html" class="btn">Continue Shopping</a><br><br>
	</div>
	
	
	<div id="content">
		<h1>Your Order</h1>
			<table id="checkout-cart" class="shopping-cart">
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Qty</th>
					<th scope="col">Price</th>
				</tr>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
		 <div id="pricing">
			
			<p id="shipping">
				<strong>Shipping</strong>: <span id="sshipping"></span>
			</p>
			
			<p id="sub-total">
				<strong>Total</strong>: <span id="stotal"></span>
			</p>
		 </div>
		 
		 <div id="user-details">
		 	<h2>Your Data</h2>
		 	<div id="user-details-content"></div>
		 </div>

		 
		 
		 
	</div>

</div>

<?php     
//billing info
$name = $_GET['name'];
$email = $_GET['email'];
$city = $_GET['city'];
$address = $_GET['address'];
$zipcode = $_GET['zip'];
$country = $_GET['country'];

     	
$sname = $_GET['sname'];
$semail = $_GET['semail'];
$scity = $_GET['scity'];
$saddress = $_GET['saddress'];
$szipcode = $_GET['szip'];
$scountry = $_GET['scountry'];

$billingcontent="\nBilling Info:\nName: ".$name.";\nEmail: ".$email.";\nCity: ".$city . ";\nAddress: ".$address.";\nCountry: " .$country.";\nZipcode: ".$zipcode."\n";
	
$shippingcontent="\nShipping Info:\nName: ".$sname.";\nEmail: ".$semail.";\nCity: ".$scity . ";\nAddress: ".$saddress.";\nCountry: " .$scountry.";\nZipcode: ".$szipcode."\n";

$fp=fopen("use_record.txt","a+") or die("Unable to open file!");

fwrite($fp, $billingcontent);
fwrite($fp, $shippingcontent);
fclose($fp);

?>

	
<footer id="site-info">
		Copyright &copy; 
	</footer>

</body>
</html>	

   
