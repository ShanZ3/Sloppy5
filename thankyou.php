<html lang="en">
<?php
	$uname = $_GET["email"];
?>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thank You</title>
	<style>
	@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="thankyou.css">
	<link rel="stylesheet" href="shopstyle.css">
	<link rel="icon" href="sloppy5_icon.PNG">

</head>
<body>
	<header class="site-header" id="header">
		<h2 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h2>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">An order confirmation email was sent to <?php echo $uname; ?>. Thank you for shopping with us. We really appreciate you giving us a moment of your time today. Thanks for being you.</p><br><br><br>
		
		<a href="subscribe.html" class="btn">Continue Shopping</a>
	</div>

	<footer class="site-footer" id="footer">
		
	</footer>
	

</body>
</html>

