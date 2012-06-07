$(document).ready(function(){
	
	// Slide Up Main Cateogry Navigation
	$('.nav-main-cat li ul:first-child').delay('800').slideUp('slow');
	//$('.nav-main-cat li ul:first-child').slideDown('fast');
	
	$('.nav-main-cat-container').mouseenter(function(){
		$('.nav-main-cat li ul:first-child').slideDown('slow');
	});
	$('.nav-main-cat-container').mouseleave(function(){
		$('.nav-main-cat li ul:first-child').slideUp('slow');
	});
	
	// Highlight banner
	$('.hightlight-banner-container .thumbnail').delay('800').slideUp('slow');
	
	$('.hightlight-banner-container').mouseenter(function(){
		$('.hightlight-banner-container .thumbnail').slideToggle('fast');
		clearInterval(home_banner)
	});
	
	$('.hightlight-banner-container').mouseleave(function(){
		$('.hightlight-banner-container .thumbnail').slideUp('fast');
		home_banner = setInterval('loopBanner(5)',8000);
	});
	
});

// Slide Banner
var current_banner = 1;
var all_banner_num = 5;
var delay_time_loop = 8000;
var delay_time_click = 15000;
var delay_time_current = 8000;

function changeBanner(numBanner) {
	clearInterval(home_banner);
	
	$('.hightlight-banner-container .thumbnail li').removeClass('selected');
	$('.hightlight-banner-container .thumbnail li:nth-child('+numBanner+')').addClass('selected');
	
	var moveBanner = (numBanner-1) * -980;
	
	$('.hightlight-banner-container .banner').animate({'left':moveBanner+'px'}, 1000);
	
	current_banner = numBanner;
	
	home_banner = setInterval('loopBanner(numBanner)', delay_time_current);
	
	if(delay_time_current == delay_time_click) { delay_time_current = delay_time_loop }
}

function loopBanner(max_banner) {
	numBanner = max_banner;
	current_banner = current_banner + 1;
	
	if(current_banner > numBanner) {
		current_banner = 1;
	}
	
	changeBanner(current_banner);
}

function setDelayTimeClick() {
	delay_time_current = delay_time_click;
}
// End Slide Banner

// Showcase Box Tab
function changeShowcaseTab(showcase_id, numTab) {
	$('#'+showcase_id+' .nav-showcase-box ul li a.selected').removeClass('selected');
	$('#'+showcase_id+' .nav-showcase-box ul li a#'+numTab).addClass('selected');
}

function changeFivePicSlide(numSlide) {
	var moveSlide = (numSlide-1) * -785;

	$('.showcase-box ul.nav-slide-dot li a.selected').removeClass('selected');
	$('.showcase-box ul.nav-slide-dot li a.btn-slide-'+numSlide).addClass('selected');
	
	$('.five-pic-slide-container .each-slide').animate({'left':moveSlide+'px'}, 1000);
}
// End Showcase Box Tab

// Merchant Section
function changeMerchantTab(tabType) {
	//================================//
	$('.merchant-type-container').addClass('hide');
	$('#'+tabType).removeClass('hide');
	
	$('.nav-top-merchant a').removeClass('tab-selected'); // This 2 lines need to be under above 2 lines
	$('.nav-top-merchant a#'+tabType).addClass('tab-selected'); // This 2 lines need to be under above 2 lines
	//================================//
	
	$('.shop-top-merchant-list').animate({'left':'0px'}, 1000);
}

function changeShop(numShop) {
	
	var moveShop = (numShop-1) * -710;

	$('.shop-top-merchant-list').animate({'left':moveShop+'px'}, 1000);
	
}
// End Merchant Section