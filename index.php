<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<title>Shopping.co.th Delta Version</title>

<link href="css/screen.css" rel="stylesheet" type="text/css">

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/global.js" type="text/javascript"></script>

<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]--> <!-- http://html5shiv.googlecode.com/svn/trunk/html5.js -->

<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="js/selectivizr-min.js"></script>
  <noscript><link rel="stylesheet" href="css/selectivizr-fallback.css"></noscript>
<![endif]-->

<!--[if IE 8]><link type="text/css" rel="stylesheet" href="css/ie8.css"><![endif]-->
<!--[if IE 7]><link type="text/css" rel="stylesheet" href="css/ie7.css"><![endif]-->
<!--[if IE 6]><link type="text/css" rel="stylesheet" href="css/ie6.css"><![endif]-->
<!--[if IE]><script type="text/javascript" src="js/modernizr.min.js"></script><![endif]-->

</head>

<body>

<!-- Facebook Like Button -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=355552771163551";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- End Facebook Like Button -->

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

<!-- Highlight Banner -->
<section class="hightlight-banner-container wrapper-global">
	<div class="wrapper">
		<!-- <h1>ช้อปปิ้ง มีทุกสิ่งให้เลือกสรร จัดเต็ม</h1> -->
		<ul class="banner">
			<li id="banner-1"><a href="#"><img src="images/fashion-week-2012.jpg"></a></li>
			<li id="banner-2"><a href="#"><img src="images/gadget-2012.jpg"></a></li>
			<li id="banner-3"><a href="#"><img src="images/default-woman-cloth.jpg"></a></li>
			<li id="banner-4"><a href="#"><img src="images/top-10-shops.jpg"></a></li>
			<li id="banner-5"><a href="#"><img src="images/best-sellers.jpg"></a></li>
		</ul>
	</div>
	<ul class="thumbnail">
		<li id="thumbnail-1" class="selected">
			<a href="javascript:void();" onclick="setDelayTimeClick(); changeBanner(1);"><img src="images/fashion-week-2012.jpg" width="98" height="40"></a>
		</li>
		<li id="thumbnail-2">
			<a href="javascript:void();" onclick="setDelayTimeClick(); changeBanner(2);"><img src="images/gadget-2012.jpg" width="98" height="40"></a>
		</li>
		<li id="thumbnail-3">
			<a href="javascript:void();" onclick="setDelayTimeClick(); changeBanner(3);"><img src="images/default-woman-cloth.jpg" width="98" height="40"></a>
		</li>
		<li id="thumbnail-4">
			<a href="javascript:void();" onclick="setDelayTimeClick(); changeBanner(4);"><img src="images/top-10-shops.jpg" width="98" height="40"></a>
		</li>
		<li id="thumbnail-5">
			<a href="javascript:void();" onclick="setDelayTimeClick(); changeBanner(5);"><img src="images/best-sellers.jpg" width="98" height="40"></a>
		</li>
	</ul>
</section>
<!-- End Highlight Banner -->

<!-- Showcase Section -->
<section class="showcase-container wrapper-global">
	<!-- Showcase Box -->
	<div id="woman-cloth" class="showcase-box">
		<!--Showcase Navigation-->
		<div class="nav-showcase-box">
			<ul><h3>เสื้อผ้าสำหรับผู้หญิง</h3>
				<li><a id="woman-cloth-1" href="javascript:void();" onclick="changeShowcaseTab('woman-cloth','woman-cloth-1');" class="selected">เครื่องแต่งกาย</a></li>
				<li><a id="woman-cloth-2" href="javascript:void();" onclick="changeShowcaseTab('woman-cloth','woman-cloth-2');">ร้องเท้า / ถุงเท้า</a></li>
				<li><a id="woman-cloth-3" href="javascript:void();" onclick="changeShowcaseTab('woman-cloth','woman-cloth-3');">เดรส / แซก</a></li>
				<li><a id="woman-cloth-4" href="javascript:void();" onclick="changeShowcaseTab('woman-cloth','woman-cloth-4');">กระโปรง / กางเกง</a></li>
				<li><a id="woman-cloth-5" href="javascript:void();" onclick="changeShowcaseTab('woman-cloth','woman-cloth-5');">ชุดนอน</a></li>
			</ul>
		</div>
		<!--End Showcase Navigation-->
		<div class="four-pic-container">
			<ul>
				<li><a href="#"><img src="images/showcase-4-pic-1.jpg" alt="showcase-pic-1"></a></li>
				<li><a href="#"><img src="images/showcase-4-pic-2.jpg" alt="showcase-pic-2"></a></li>
				<li><a href="#"><img src="images/showcase-4-pic-3.jpg" alt="showcase-pic-3"></a></li>
				<li><a href="#"><img src="images/showcase-4-pic-4.jpg" alt="showcase-pic-4"></a></li>
			</ul>
		</div>
	</div>
	<!-- End Showcase Box -->
	
	<!-- Showcase Box -->
	<section id="man-cloth" class="showcase-box">
		<!--Showcase Navigation-->
		<div class="nav-showcase-box">
			<ul><h3>เสื้อผ้าสำหรับผู้ชาย</h3>
				<li><a id="man-cloth-1" href="javascript:void();" onclick="changeShowcaseTab('man-cloth','man-cloth-1');" class="selected">เครื่องแต่งกาย</a></li>
				<li><a id="man-cloth-2" href="javascript:void();" onclick="changeShowcaseTab('man-cloth','man-cloth-2');">ร้องเท้า / ถุงเท้า</a></li>
				<li><a id="man-cloth-3" href="javascript:void();" onclick="changeShowcaseTab('man-cloth','man-cloth-3');">เสื้อ / เสื้อเชิ้ต</a></li>
				<li><a id="man-cloth-4" href="javascript:void();" onclick="changeShowcaseTab('man-cloth','man-cloth-4');">กางเกง</a></li>
				<li><a id="man-cloth-5" href="javascript:void();" onclick="changeShowcaseTab('man-cloth','man-cloth-5');">ชุดนอน</a></li>
			</ul>
		</div>
		<!--End Showcase Navigation-->
		<div class="half-banner-container">
			<div class="half-banner"></div>
			<ul>
				<li>
					<ul class="each-item">
						<li><a href="#" target="_blank"><img src="images/sample_ad_pd/52x52-1.jpg" width="52" height="52"></a></li>
						<li><a href="#" target="_blank">Jacomo For Men ขนาด 50 ml. by MIST</a></li>
					</ul>
				</li>
				<li>
					<ul class="each-item">
						<li><a href="#" target="_blank"><img src="images/sample_ad_pd/52x52-1.jpg" width="52" height="52"></a></li>
						<li><a href="#" target="_blank">Jacomo For Men ขนาด 50 ml. by MIST</a></li>
					</ul>
				</li>
				<li>
					<ul class="each-item">
						<li><a href="#" target="_blank"><img src="images/sample_ad_pd/52x52-1.jpg" width="52" height="52"></a></li>
						<li><a href="#" target="_blank">Jacomo For Men ขนาด 50 ml. by MIST</a></li>
					</ul>
				</li>
				<li>
					<ul class="each-item">
						<li><a href="#" target="_blank"><img src="images/sample_ad_pd/52x52-1.jpg" width="52" height="52"></a></li>
						<li><a href="#" target="_blank">Jacomo For Men ขนาด 50 ml. by MIST</a></li>
					</ul>
				</li>
				<li>
					<ul class="each-item">
						<li><a href="#" target="_blank"><img src="images/sample_ad_pd/52x52-1.jpg" width="52" height="52"></a></li>
						<li><a href="#" target="_blank">Jacomo For Men ขนาด 50 ml. by MIST</a></li>
					</ul>
				</li>
				<li>
					<ul class="each-item">
						<li><a href="#" target="_blank"><img src="images/sample_ad_pd/52x52-1.jpg" width="52" height="52"></a></li>
						<li><a href="#" target="_blank">Jacomo For Men ขนาด 50 ml. by MIST</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</section>
	<!-- End Showcase Box -->
	
	<!-- Showcase Box -->
	<section id="other-cat" class="showcase-box">
		<!--Showcase Navigation-->
		<div class="nav-showcase-box">
			<ul><h3>สิ้นค้าอื่นๆ</h3>
				<li><a id="other-cat-1" href="javascript:void();" onclick="changeShowcaseTab('other-cat','other-cat-1');" class="selected" >เครื่องแต่งกายผู้หญิง</a></li>
				<li><a id="other-cat-2" href="javascript:void();" onclick="changeShowcaseTab('other-cat','other-cat-2');">ร้องเท้า / ถุงเท้าผู้หญิง</a></li>
				<li><a id="other-cat-3" href="javascript:void();" onclick="changeShowcaseTab('other-cat','other-cat-3');">เดรส / แซก</a></li>
				<li><a id="other-cat-4" href="javascript:void();" onclick="changeShowcaseTab('other-cat','other-cat-4');">กระโปรง / กางเกง</a></li>
				<li><a id="other-cat-5" href="javascript:void();" onclick="changeShowcaseTab('other-cat','other-cat-5');">ชุดนอน</a></li>
			</ul>
		</div>
		<!--End Showcase Navigation-->
		<div class="five-pic-slide-container">
			<ul>
				<li>
					<ul class="each-slide">
						<li>
							<figure>
								<a href="#"><img src="images/product/product-1.jpg" alt="showcase-pic-1"></a>
								<figcaption><a href="#">กล้องโลโม่ Diana F+ >> Diana Mini Enrose ใช้...</a></figcaption>
							</figure>
							<div class="price"><a href="#">500 บาท</a></div>
						</li>
						<li>
							<figure>
								<a href="#"><img src="images/product/product-2.jpg" alt="showcase-pic-2"></a>
								<figcaption><a href="#">กล้องโลโม่ Diana F+ >> Diana Mini Enrose ใช้...</a></figcaption>
							</figure>
							<div class="price"><a href="#">500 บาท</a></div>
						</li>
						<li>
							<figure>
								<a href="#"><img src="images/product/product-3.jpg" alt="showcase-pic-3"></a>
								<figcaption><a href="#">กล้องโลโม่ Diana F+ >> Diana Mini Enrose ใช้...</a></figcaption>
							</figure>
							<div class="price"><a href="#">500 บาท</a></div>
						</li>
						<li>
							<figure>
								<a href="#"><img src="images/product/product-4.jpg" alt="showcase-pic-4"></a>
								<figcaption><a href="#">กล้องโลโม่ Diana F+ >> Diana Mini Enrose ใช้...</a></figcaption>
							</figure>
							<div class="price"><a href="#">500 บาท</a></div>
						</li>
						<li>
							<figure>
								<a href="#"><img src="images/product/product-5.jpg" alt="showcase-pic-5"></a>
								<figcaption><a href="#">กล้องโลโม่ Diana F+ >> Diana Mini Enrose ใช้...</a></figcaption>
							</figure>
							<div class="price"><a href="#">500 บาท</a></div>
						</li>
					</ul>
				</li>
				<li>
					<ul class="each-slide">
						<li>
							<figure>
								<a href="#"><img src="images/product/product-1.jpg" alt="showcase-pic-1"></a>
								<figcaption><a href="#">กล้องโลโม่ Diana F+ >> Diana Mini Enrose ใช้...</a></figcaption>
							</figure>
							<div class="price"><a href="#">500 บาท</a></div>
						</li>
						<li>
							<figure>
								<a href="#"><img src="images/product/product-2.jpg" alt="showcase-pic-2"></a>
								<figcaption><a href="#">กล้องโลโม่ Diana F+ >> Diana Mini Enrose ใช้...</a></figcaption>
							</figure>
							<div class="price"><a href="#">500 บาท</a></div>
						</li>
						<li>
							<figure>
								<a href="#"><img src="images/product/product-3.jpg" alt="showcase-pic-3"></a>
								<figcaption><a href="#">กล้องโลโม่ Diana F+ >> Diana Mini Enrose ใช้...</a></figcaption>
							</figure>
							<div class="price"><a href="#">500 บาท</a></div>
						</li>
						<li>
							<figure>
								<a href="#"><img src="images/product/product-4.jpg" alt="showcase-pic-4"></a>
								<figcaption><a href="#">กล้องโลโม่ Diana F+ >> Diana Mini Enrose ใช้...</a></figcaption>
							</figure>
							<div class="price"><a href="#">500 บาท</a></div>
						</li>
						<li>
							<figure>
								<a href="#"><img src="images/product/product-5.jpg" alt="showcase-pic-5"></a>
								<figcaption><a href="#">กล้องโลโม่ Diana F+ >> Diana Mini Enrose ใช้...</a></figcaption>
							</figure>
							<div class="price"><a href="#">500 บาท</a></div>
						</li>
					</ul>
				</li>
				<li>
					<ul class="each-slide">
						<li>
							<figure>
								<a href="#"><img src="images/product/product-1.jpg" alt="showcase-pic-1"></a>
								<figcaption><a href="#">กล้องโลโม่ Diana F+ >> Diana Mini Enrose ใช้...</a></figcaption>
							</figure>
							<div class="price"><a href="#">500 บาท</a></div>
						</li>
						<li>
							<figure>
								<a href="#"><img src="images/product/product-2.jpg" alt="showcase-pic-2"></a>
								<figcaption><a href="#">กล้องโลโม่ Diana F+ >> Diana Mini Enrose ใช้...</a></figcaption>
							</figure>
							<div class="price"><a href="#">500 บาท</a></div>
						</li>
						<li>
							<figure>
								<a href="#"><img src="images/product/product-3.jpg" alt="showcase-pic-3"></a>
								<figcaption><a href="#">กล้องโลโม่ Diana F+ >> Diana Mini Enrose ใช้...</a></figcaption>
							</figure>
							<div class="price"><a href="#">500 บาท</a></div>
						</li>
						<li>
							<figure>
								<a href="#"><img src="images/product/product-4.jpg" alt="showcase-pic-4"></a>
								<figcaption><a href="#">กล้องโลโม่ Diana F+ >> Diana Mini Enrose ใช้...</a></figcaption>
							</figure>
							<div class="price"><a href="#">500 บาท</a></div>
						</li>
						<li>
							<figure>
								<a href="#"><img src="images/product/product-5.jpg" alt="showcase-pic-5"></a>
								<figcaption><a href="#">กล้องโลโม่ Diana F+ >> Diana Mini Enrose ใช้...</a></figcaption>
							</figure>
							<div class="price"><a href="#">500 บาท</a></div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<ul class="nav-slide-dot">
			<li><a href="javascript:void();" onClick="changeFivePicSlide('1');" class="btn-slide-1 selected"></a></li>
			<li><a href="javascript:void();" onClick="changeFivePicSlide('2');" class="btn-slide-2"></a></li>
			<li><a href="javascript:void();" onClick="changeFivePicSlide('3');" class="btn-slide-3"></a></li>
		</ul>
	</section>
	<!-- End Showcase Box -->
</section>
<!-- End Showcase Section -->

<!-- Merchant Section -->
<section class="top-merchant-container wrapper-global">
	<nav class="nav-top-merchant-container">
		<label class="title">หมวดร้านค้า</label>
		<ul class="nav-top-merchant nav-tab">
			<li><a id="newest" href="javascript:void();" onclick="changeMerchantTab('merchant-newest');">ร้านค้ามาใหม่</a></li>					
			<li><a id="recommended" href="javascript:void();" onclick="changeMerchantTab('merchant-recommended');">ร้านค้าแนะนำ</a></li>
			<li><a id="most-sold" href="javascript:void();" onclick="changeMerchantTab('merchant-most-sold');">ร้านค้าขายดี</a></li>
			<li><a id="most-visited" href="javascript:void();" onclick="changeMerchantTab('merchant-most-visited');">ร้านค้ายอดนิยม</a></li>
			<li><a id="hottest" href="javascript:void();" onclick="changeMerchantTab('merchant-hottest');" class="tab-selected">ร้านค้าสุดพิเศษ</a></li>
		</ul>
	</nav>
	
	<section class="show-top-merchant-container">
		
		<?php include_once('component/merchant-newest.php'); ?>
		
		<?php include_once('component/merchant-recommended.php'); ?>
		
		<?php include_once('component/merchant-most-sold.php'); ?>
		
		<?php include_once('component/merchant-most-visited.php'); ?>
		
		<?php include_once('component/merchant-hottest.php'); ?>
		
	</section>
</section>
<!-- End Merchant Section -->

<section class="fb-like-button wrapper-global">
	<div class="fb-like" data-href="http://www.facebook.com/shopping.co.th" data-send="false" data-width="980" data-show-faces="true"></div>
</section>

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
	home_banner = setInterval('loopBanner(5)',8000);
</script>

</body>
</html>
