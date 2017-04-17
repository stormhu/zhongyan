<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:31:"../template/default/peixun.html";i:1492432694;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<script type="text/javascript" src="/template/default/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/template/default/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/template/default/js/myjs.js"></script>

	<link rel="stylesheet" type="text/css" href="/template/default/css/animate.min.css">
	<link rel="stylesheet" href="/template/default/css/bootstrap.min.css">
	<link rel="stylesheet" href="/template/default/css/style.css">

	<title>电商培训-</title>
</head>
<body style="overflow-x:hidden;">
<!-- header区 -->
<?php include "../template/default/header.html" ?>

<!-- <div class="container-fluid" style="background:url(/template/default/image/bg1.jpg) no-repeat top center; height:200px;">
	
</div> -->
<div class="jumbotron" style="background:url(/template/default/image/bg6.jpg) no-repeat top center; height:220px;">
	<div class="container">
		<!-- <h1 class="text-center animated fadeInLeft">电商培训<br><small>让您在互联网上的业绩倍增!!</small></h1> -->
		<!-- <p class="text-center animated fadeInUp">策略致胜，教您规划企业网络营销顶层设计, 为传统企业转型保驾护航,超过7年网络营销培训经验，服务过420多个细分行业，受训学员高达35894家企业！</p> -->
	</div>
</div>
<div class="container" style="min-height:300px;">
	<div class="row">
		<div class="col-md-12" style="margin-bottom:50px;">
			<h1 class="text-center animated fadeInLeft" style="">电商培训</h1>
			<p class="text-center animated fadeInUp">策略致胜，教您规划企业网络营销顶层设计, 为传统企业转型保驾护航,超过7年网络营销培训经验，服务过420多个细分行业，受训学员高达35894家企业！</p>
		</div>
		<div class="col-md-6 box1" style="min-height:300px; padding-bottom:50px;">
			<img class="hidden center-block" src="/template/default/image/peixun/icon1.png">
			<h4 class="hidden text-center">7年网络营销培训经验</h4>
		</div>
		<div class="col-md-6 box2" style="min-height:300px; padding-bottom:50px;">
			<img class="hidden center-block" src="/template/default/image/peixun/icon2.png">
			<h4 class="hidden text-center">超过20名自身网络营销专家</h4>
		</div>
		<div class="col-md-6 box3" style="min-height:300px; padding-bottom:50px;">
			<img class="hidden center-block" src="/template/default/image/peixun/icon3.png">
			<h4 class="hidden text-center">服务过420多个细分行业</h4>
		</div>
		<div class="col-md-6 box4" style="min-height:300px; padding-bottom:50px;">
			<img class="hidden center-block" src="/template/default/image/peixun/icon4.png">
			<h4 class="hidden text-center">陆续培训超过千家企业，为传统企业转型保驾护航！</h4>
		</div>
	</div>
</div>

<!-- footer -->
<?php include "../template/default/footer.html"; ?>

</body>
<script type="text/javascript">
	var $win = $(window);
	var temp = 300;
	var box1OffsetTop = $(".box1").offset().top;
	var box2OffsetTop = $(".box2").offset().top;
	var box3OffsetTop = $(".box3").offset().top;
	var box4OffsetTop = $(".box4").offset().top;
	// var box5OffsetTop = $(".box5").offset().top;
	var box1OffsetHeight = $("box1").outerHeight();
	var box2OffsetHeight = $("box2").outerHeight();
	var box3OffsetHeight = $("box3").outerHeight();
	var box4OffsetHeight = $("box4").outerHeight();
	// var box5OffsetHeight = $("box5").outerHeight();
	var winHeight = $win.height();
	$win.scroll(function(){
		var winScrollTop = $win.scrollTop();
		// box1
		if(!(winScrollTop+200 > box1OffsetTop+box1OffsetHeight) && !(winScrollTop-temp<box1OffsetTop-winHeight) && !($(".box1").hasClass("done"))){
			console.log("box1出现");
			$(".box1").children("img").removeClass("hidden");
			$(".box1").children("h4").removeClass("hidden");
			$(".box1").children("img").addClass("animated fadeInLeft done");
			$(".box1").children("h4").addClass("animated fadeInLeft done");
		}
		// box2
		if(!(winScrollTop > box2OffsetTop+box2OffsetHeight) && !(winScrollTop-temp<box2OffsetTop-winHeight) && !($(".box2").hasClass("done"))){
			console.log("box2出现");
			$(".box2").children("img").removeClass("hidden");
			$(".box2").children("h4").removeClass("hidden");
			$(".box2").children("img").addClass("animated fadeInRight done");
			$(".box2").children("h4").addClass("animated fadeInRight done");
		}
		// box2
		if(!(winScrollTop > box3OffsetTop+box3OffsetHeight) && !(winScrollTop-temp<box3OffsetTop-winHeight) && !($(".box3").hasClass("done"))){
			console.log("box3出现");
			$(".box3").children("img").removeClass("hidden");
			$(".box3").children("h4").removeClass("hidden");
			$(".box3").children("img").addClass("animated fadeInLeft done");
			$(".box3").children("h4").addClass("animated fadeInLeft done");
		}
		// box2
		if(!(winScrollTop > box4OffsetTop+box4OffsetHeight) && !(winScrollTop-temp<box4OffsetTop-winHeight) && !($(".box4").hasClass("done"))){
			console.log("box4出现");
			$(".box4").children("img").removeClass("hidden");
			$(".box4").children("h4").removeClass("hidden");
			$(".box4").children("img").addClass("animated fadeInRight done");
			$(".box4").children("h4").addClass("animated fadeInRight done");
		}
	});
</script>

</html>



