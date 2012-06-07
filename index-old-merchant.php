<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<title>Shopping.co.th Delta Version</title>

<link href="css/screen.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/shopping_index.css"> <!-- Old CSS file -->
<link rel="stylesheet" type="text/css" href="css/edit-shopping_index.css"> <!-- Edit Old CSS file -->

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/global.js" type="text/javascript"></script>

<script type="text/javascript" src="js/main.js"></script> <!-- Old JS file -->


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

<!-- Highlight Banner -->
<section class="hightlight-banner-container wrapper-global">
	<div class="wrapper">
		<ul class="banner">
			<li id="banner-1"><a href="#"><img src="images/highlight-banner-1.jpg"></a></li>
			<li id="banner-2"><a href="#"><img src="images/highlight-banner-2.jpg"></a></li>
			<li id="banner-3"><a href="#"><img src="images/highlight-banner-3.jpg"></a></li>
			<li id="banner-4"><a href="#"><img src="images/highlight-banner-1.jpg"></a></li>
			<li id="banner-5"><a href="#"><img src="images/highlight-banner-2.jpg"></a></li>
		</ul>
	</div>
	<ul class="thumbnail">
		<li id="thumbnail-1" class="selected"><a href="javascript:void();" onclick="setDelayTimeClick(); changeBanner(1);"><img src="images/test-thumbnail.gif" width="51" height="37"></a></li>
		<li id="thumbnail-2"><a href="javascript:void();" onclick="setDelayTimeClick(); changeBanner(2);"><img src="images/test-thumbnail.gif"></a></li>
		<li id="thumbnail-3"><a href="javascript:void();" onclick="setDelayTimeClick(); changeBanner(3);"><img src="images/test-thumbnail.gif"></a></li>
		<li id="thumbnail-4"><a href="javascript:void();" onclick="setDelayTimeClick(); changeBanner(4);"><img src="images/test-thumbnail.gif"></a></li>
		<li id="thumbnail-5"><a href="javascript:void();" onclick="setDelayTimeClick(); changeBanner(5);"><img src="images/test-thumbnail.gif"></a></li>
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

<!-- Old Merchant Section -->
<div class="wrapRow">
	<div class="leftColumnWrapper">
		<div class="smallAds">
			<div class="smAdTop"><a href="#" target="_blank"><img src="images/sample_ad_pd/160x120-1.jpg" width="160" height="120" /></a></div>
			<div class="smAdBottom"><a href="#" target="_blank"><img src="images/sample_ad_pd/160x120-2.jpg" width="160" height="120" /></a></div>
		</div>
	</div>
	<div class="rightColumnWrapper">
		<div class="shopSection">
			<div class="ssTab">
				<ul>
					<li class="ssHeader"></li>
					<li class="ssChoose"><a href="#">ร้านค้าขายดี</a></li>
					<li class="ssSelected"><a href="#">ร้านค้ามาใหม่</a></li>
					<li class="ssChoose"><a href="#">ร้านค้า Partner</a></li>
				</ul>
			</div>
			<div class="ssShopHolder">
				<div class="ssShopList">
					<div class="ssShopName">
						<p><a class="hover" href="#">1. Morningly<span>&gt;</span></a></p>
						<p><a href="#">2. TV Direct<span>&gt;</span></a></p>
						<p><a href="#">3. Dressytrend<span>&gt;</span></a></p>
						<p><a href="#">4. Tao Toyw<span>&gt;</span></a></p>
						<p><a href="#">5. Longchong<span>&gt;</span></a></p>
						<p><a href="#">6. Bonitomall<span>&gt;</span></a></p>
						<p><a href="#">7. 072222222<span>&gt;</span></a></p>
						<p><a href="#">8. abcdefg<span>&gt;</span></a></p>
						<p><a href="#">9. Adlfrglv<span>&gt;</span></a></p>
						<p><a href="#">10. Zoom Camera<span>&gt;</span></a></p>
					</div>
					<div class="ssShopPreview">
						<div class="shopLogo"><a href="#" target="_blank"><img src="images/sample_ad_pd/shoplogo.jpg" width="190" height="90" /></a></div>
						<div class="shopDetail"><a href="#" target="_blank">ร้าน LongChong ! พรีออร์เดอร์ เสื้อผ้า กระเป๋า รองเท้า แฟชั่นเกาหลีแท้ 100% สินค้าคุณภาพสั่งตรงจากประเทศเกาหลี สินค้าทุกชิ้น งานคุณภาพเกาหลีแท้ 100% (ไม่ใช่งานตัดเลียนแบบหรืองานก็อปปี้ค่ะ)...</a></div>
					</div>
				</div>
				<div class="ssRightCat">
					<div class="ssRightRow">
						<ul>
							<li>
								<div>
									<table width="54" height="54" align="center" cellspacing="0">
										<tr>
											<td><a href="#" target="_blank"><img src="images/sample_ad_pd/52x52-3.jpg" width="52" height="52" /></a></td>
										</tr>
									</table>
								</div>
								<p class="ssTitle"><a href="#" target="_blank">รองเท้าแฟชั่นนำเข้า Lussy Cool Style สีแดง...</a></p>
							</li>
							<li>
								<div>
									<table width="54" height="54" align="center" cellspacing="0">
										<tr>
											<td><a href="#" target="_blank"><img src="images/sample_ad_pd/52x52-3.jpg" width="52" height="52" /></a></td>
										</tr>
									</table>
								</div>
								<p class="ssTitle"><a href="#" target="_blank">รองเท้าแฟชั่นนำเข้า Lussy Cool Style สีแดง...</a></p>
							</li>
							<li>
								<div>
									<table width="54" height="54" align="center" cellspacing="0">
										<tr>
											<td><a href="#" target="_blank"><img src="images/sample_ad_pd/52x52-3.jpg" width="52" height="52" /></a></td>
										</tr>
									</table>
								</div>
								<p class="ssTitle"><a href="#" target="_blank">รองเท้าแฟชั่นนำเข้า Lussy Cool Style สีแดง...</a></p>
							</li>
						</ul>
					</div>
					<div class="ssRightRow">
						<ul>
							<li>
								<div>
									<table width="54" height="54" align="center" cellspacing="0">
										<tr>
											<td><a href="#" target="_blank"><img src="images/sample_ad_pd/52x52-3.jpg" width="52" height="52" /></a></td>
										</tr>
									</table>
								</div>
								<p class="ssTitle"><a href="#" target="_blank">รองเท้าแฟชั่นนำเข้า Lussy Cool Style สีแดง...</a></p>
							</li>
							<li>
								<div>
									<table width="54" height="54" align="center" cellspacing="0">
										<tr>
											<td><a href="#" target="_blank"><img src="images/sample_ad_pd/52x52-3.jpg" width="52" height="52" /></a></td>
										</tr>
									</table>
								</div>
								<p class="ssTitle"><a href="#" target="_blank">รองเท้าแฟชั่นนำเข้า Lussy Cool Style สีแดง...</a></p>
							</li>
							<li>
								<div>
									<table width="54" height="54" align="center" cellspacing="0">
										<tr>
											<td><a href="#" target="_blank"><img src="images/sample_ad_pd/52x52-3.jpg" width="52" height="52" /></a></td>
										</tr>
									</table>
								</div>
								<p class="ssTitle"><a href="#" target="_blank">รองเท้าแฟชั่นนำเข้า Lussy Cool Style สีแดง...</a></p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="clear: both;"></div>
</div>
<!-- End Old Merchant Section -->

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
	home_banner = setInterval('loopBanner(5)',5000);
</script>

</body>
</html>
