<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<title>Shopping.co.th Delta Version</title>

<link href="css/screen.css" rel="stylesheet" type="text/css">
<link type="text/css" href="js/chosen/chosen.css" rel="stylesheet"> <!--Chosen CSS-->

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/global.js" type="text/javascript"></script>
<script src="js/chosen/chosen.jquery.js" type="text/javascript"></script> <!--Chosen Script-->

	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script type="text/javascript" src="js/selectivizr-min.js"></script>
	<!--[if (gte IE 6)&(lte IE 8)]>
	  <script type="text/javascript" src="selectivizr.js"></script>
	  <noscript><link rel="stylesheet" href="css/selectivizr-fallback.css"></noscript>
	<![endif]-->
	
	<!--[if IE 8]><link type="text/css" rel="stylesheet" href="css/ie8.css"><![endif]-->
	<!--[if IE 7]><link type="text/css" rel="stylesheet" href="css/ie7.css"><![endif]-->
	<!--[if IE 6]><link type="text/css" rel="stylesheet" href="css/ie6.css"><![endif]-->
	<!--[if IE]><script type="text/javascript" src="/js/modernizr.min.js"></script><![endif]-->

</head>

<body>

<header class="shoppingHeader wrapper-global">
	<!--Red Tab-->
	<div class="redTab"><img src="images/sample_ad_pd/redTab.jpg"></div>
	<!--End Red Tab-->
	
	<div class="shopping-logo"><a href="#"></a></div>
	
	<!--Top Menu-->
	<?php include_once('component/nav-top-menu.php'); ?>
	<!--End Top Menu-->
	
	<!--Search Tab-->
	<section class="search-tab">
		<?php include_once('component/nav-main-cat.php'); ?>
		
		<?php include_once('component/search-box.php'); ?>
		
		<div class="cartCounter"><a href="http://shopping.sanook.com/sites/shoppingcart/">สินค้าในตะกร้า <span class="blue" id="basket_amount_header">0</span> ชิ้น</a></div>
	</section>
	<!--End Search Tab-->
</header>

<!--Breadcrump Section-->
<nav class="nav-breadcrumb-container wrapper-global">
	<ul class="nav-breadcrumb">
		<li><a href="#">Shopping.co.th</a></li>
		<li><a href="#">ต้องการซื้อ</a></li>
		<li><a href="#">กล้อง / อุปกรณ์กล้อง</a></li>
		<li><a href="#" class="current">กล้องดิจิตอล</a></li>
	</ul>
</nav>
<!--End Breadcrump Section-->

<!--Body Section-->
<section class="body-container wrapper-global">
	<?php include_once('component/category-side-navigation.php'); ?>
	
	<section class="all-product-container">
		<nav class="nav-sell-type-container font-shp-lighter">
			<label class="title">สินค้าจำนวน 65 รายการในหมวดหมู่ <a href="">"กล้องดิจิตอล"</a></label>
			<ul class="nav-tab">
				<li><a id="all-buy" href="javascript:void();" class="tab-selected" onclick="changeProductTab('all-buy');">สินค้าทั้งหมด</a></li>
				<li><a id="auction" href="javascript:void();" onclick="changeProductTab('auction');">ประมูล</a></li>
				<li><a id="buy-now" href="javascript:void();" onclick="changeProductTab('buy-now');">ซื้อทันที</a></li>
			</ul>
		</nav>
		
		<?php include_once('component/nav-show-product-type.php'); ?>
		
		<section class="show-all-product-container">
			<?php include_once('component/table-top-product.php'); ?>
		</section>

	</section>
</section>
<!--End Body Section-->

<footer class="shopping-footer-container wrapper-global">
	<?php include_once('component/footer-sitemap.php'); ?>
	
	<div class="payment-security">
		<div class="payment"></div>
		<div class="security"> <a href="javascript:dbd_popup()" style="display: block; height: 38px; width: 80px; position: absolute; right: 10px; top: 15px; text-indent: -999999px;">DBD Registered</a> </div>
	</div>
	
	<ul class="trademark-footer">
		<li class="legal-link"><a href="#">เกี่ยวกับกฎหมาย / Legal note</a></li>
		<li class="trademark"><span>© 2007 Sanook Shopping Limited.</span></li>
	</ul>
</footer>

<script type="text/javascript">
	$(".chzn-select").chosen();
</script>

</body>
</html>
