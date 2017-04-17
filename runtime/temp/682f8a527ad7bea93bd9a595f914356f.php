<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:30:"../template/default/index.html";i:1492419046;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	
	<script type="text/javascript" src="/template/default/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/template/default/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/template/default/js/particleground.min.js"></script>
	<script src="http://api.map.baidu.com/api?v=2.0&ak=67jMQ5DmYTe1TLMBKFUTcZAR"></script>
	<script type="text/javascript" src="/template/default/js/myjs.js"></script>
	
	<link rel="stylesheet" type="text/css" href="/template/default/css/animate.min.css">
	<link rel="stylesheet" href="/template/default/css/bootstrap.min.css">
	<link rel="stylesheet" href="/template/default/css/style.css">
	<title>首页</title>
	
</head>
<body style="overflow-x:hidden;">
<script type="text/javascript">
$(document).ready(function() {
	// 粒子背景
	$("#box1").children(".row").height($("#box1").children(".row").children(".container").height());
	$("#box1").children(".row").children(".container").css("left",($("#box1").width()-$("#box1").children(".row").children(".container").width())/2);
	$('#box1').children(".row").particleground({
		dotColor: '#ddd',
		lineColor: '#ddd',
		parallax: false,
	});

	// $("#box3").children(".row").height($("#box3").children(".row").children(".container").height());
	// $("#box3").children(".row").children(".container").css("left",($("#box3").width()-$("#box3").children(".row").children(".container").width())/2);
	// $('#box3').children(".row").particleground({
	// 	dotColor: '#ddd',
	// 	lineColor: '#ddd',
	// 	parallax: false,
	// });

	$(".box2-com").hover(function(){
		$(".box2-c-com",this).stop().animate({'top': '0px'}, 300);
	}, function(){
		$(".box2-c-com",this).stop().animate({'top': '-250px'}, 300);
	});

	// box4地图信息
	ShowMap('116.331481,37.458439', '众焱信息咨询有限公司', '山东省德州市三八东路唐人中心写字楼27层', '400-997-9921', '13305340360', '17');
});
</script>

<!-- nav区 -->
<?php include "../template/default/header.html"; ?>

<!-- banner区 -->
<div class="container-fluid banner">
	<div class="row">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
				  <img src="http://www.zhongyan.so/skin/images/banner3.jpg" alt="...">
				  <div class="carousel-caption">
				    ...
				  </div>
				</div>
				<div class="item">
				  <img src="http://www.zhongyan.so/skin/images/banner2.jpg" alt="...">
				  <div class="carousel-caption">
				    ...
				  </div>
				</div>
				<div class="item">
				  <img src="http://www.zhongyan.so/skin/images/banner1.jpg" alt="...">
				  <div class="carousel-caption">
				    ...
				  </div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>

<!--  -->
<div id="box1" class="container-fluid box1" style="" >
	<div class="row" style="position:relative; margin:50px auto;">
		<div class="container" style="position:absolute; top:0px;">
			<div class="col-md-12" >
				<h2 class="text-center">众焱业务</h2>
				<h2 class="text-center" style="color:#C30;">Service</h2>
				<!-- <h2 class="text-center" style="color:#999">service</h2> -->
				<h4 class="text-center" style="color:#C30;">—— 让您的企业在互联网上蓬勃向上 ——</h4>
			</div>
			<div class="col-md-4 col-xs-12" style="margin-top:2.0em;">
				<div class="box1-com center-block">
					<div class="center-block" style="width:80%; padding:20px 0px;">
						<img class="center-block img-circle" style="background:#09C; max-width:80px;" src="/template/default/image/m2.png">
						<h3 class="text-center">网站建设</h3>
						<span class="label-radius">SEO优化</span>
						<span class="label-radius">网络推广</span>
						<p>根据您的需求，我们提供多种网站建设服务，涵盖PC端、手机、平板等。我们专业提供一站式服务，从网站品牌规划、交互设计、视觉设计、动效创意，到程序开发，运营维护。</p>
						<a class="btn btn-default" style="border-radius:20px;">点击咨询 <span class="glyphicon glyphicon-arrow-right"></span></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-xs-12" style="margin-top:2.0em;">
				<div class="box1-com center-block">
					<div class="center-block" style="width:80%; padding:20px 0px;">
						<img class="center-block img-circle" style="background:#09C; max-width:80px;" src="/template/default/image/m4.png">
						<h3 class="text-center">店铺托管</h3>
						<span class="label-radius">提升宝贝排名</span>
						<span class="label-radius">提升转化</span>
						<span class="label-radius">店铺全方位体检分析</span>
						<p>根据用户的需求、市场状况、企业情况提供专业化的店铺运营策划、店铺装修和营销解决方案。</p>
						<a class="btn btn-default" style="border-radius:20px;">点击咨询 <span class="glyphicon glyphicon-arrow-right"></span></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-xs-12" style="margin-top:2.0em;">
				<div class="box1-com center-block">
					<div class="center-block" style="width:80%; padding:20px 0px;">
						<img class="center-block img-circle" style="background:#09C; max-width:80px;" src="/template/default/image/m6.png">
						<h3 class="text-center">电商培训</h3>
						<span class="label-radius">7年经验</span>
						<span class="label-radius">20名专家</span>
						<p>7年网络营销培训经验，20名资深网络营销专家，培训企业超过5000家，涵盖3000多个细节行业。</p>
						<a class="btn btn-default" style="border-radius:20px;" href="/public/index/peixun">点击咨询 <span class="glyphicon glyphicon-arrow-right"></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- box2 -->
<div id="box2" class="container-fluid box2" style="padding:30px 0px; background:url(/template/default/image/bg2.png) no-repeat top center;">
	<div class="container">
		<div class="row" style="margin:20px 0px;">
			<div class="col-md-12">
				<h2 class="text-center" style="color:#fff;">案例展示</h2>
				<h2 class="text-center" style="color:#C30;">Case</h2>
				<h4 class="text-center" style="color:#fff;">—— 合作伙伴展示，经典案例 ——</h4>
			</div>
			<div class="col-md-3" >
				<div class="box2-com" style="background:url(/template/default/image/anli/001.jpg) no-repeat top center;">
					<div class="box2-c-com" >
						<h4 class="text-center" style="color:#fff">---</h4>
						<h3 class="text-center" style="color:#fff">德州金利来</h3>
						<img class="center-block" src="/template/default/image/logo_s.png">
						<h4 class="text-center" style="color:#fff">技术支持</h4>
					</div>
				</div>
				<h4 class="text-center" style="color:#fff;">德州金利来机械设备有限公司</h4>
				<p style="color:#fff;">公司主营机械设备等</p>
			</div>
			<div class="col-md-3">
				<div class="box2-com" style="background:url(/template/default/image/anli/002.jpg) no-repeat top center;">
					<div class="box2-c-com" >
						<h4 class="text-center" style="color:#fff">---</h4>
						<h3 class="text-center" style="color:#fff">德州华翔</h3>
						<img class="center-block" src="/template/default/image/logo_s.png">
						<h4 class="text-center" style="color:#fff">技术支持</h4>
					</div>
				</div>
				<h4 class="text-center" style="color:#fff;">德州华翔新材料有限公司</h4>
				<p style="color:#fff;">公司主营机械设备等</p>
			</div>
			<div class="col-md-3 hidden-xs">
				<div class="box2-com" style="background:url(/template/default/image/anli/003.jpg) no-repeat top center;">
					<div class="box2-c-com" >
						<h4 class="text-center" style="color:#fff">---</h4>
						<h3 class="text-center" style="color:#fff">德州宇涵</h3>
						<img class="center-block" src="/template/default/image/logo_s.png">
						<h4 class="text-center" style="color:#fff">技术支持</h4>
					</div>
				</div>
				<h4 class="text-center" style="color:#fff;">德州宇涵中央空调有限公司</h4>
				<p style="color:#fff;">公司主营机械设备等</p>
			</div>
			<div class="col-md-3 hidden-xs">
				<div class="box2-com" style="background:url(/template/default/image/anli/004.jpg) no-repeat top center;">
					<div class="box2-c-com" >
						<h4 class="text-center" style="color:#fff">---</h4>
						<h3 class="text-center" style="color:#fff">德州旭隆机械</h3>
						<img class="center-block" src="/template/default/image/logo_s.png">
						<h4 class="text-center" style="color:#fff">技术支持</h4>
					</div>
				</div>
				<h4 class="text-center" style="color:#fff;">德州市旭隆机械制造有限公司</h4>
				<p style="color:#fff;">公司主营机械设备等</p>
			</div>
		</div>
	</div>
</div>

<!-- box3 -->
<div id="box3" class="container-fluid box3" style="background:url(/template/default/image/bg1.jpg) repeat-y top center;padding:30px 0px;">
	<div class="row" >
		<div class="container">
			<div class="col-md-12" style="margin:40px 0px;">
				<img class="center-block" src="/template/default/image/logo_s2.png">
				<h2 class="text-center">众焱优势</h2>
				<h2 class="text-center" style="color:#C30;">Merit</h2>
				<h4 class="text-center" style="color:#C30;">—— 愿我们所做的一切努力，使您更满意 ——</h4>
			</div>
			<div class="col-md-3">
				<img class="center-block" src="/template/default/image/box3_icon1.png">
			</div>
			<div class="col-md-3">
				<img class="center-block" src="/template/default/image/box3_icon2.png">
			</div>
			<div class="col-md-3">
				<img class="center-block" src="/template/default/image/box3_icon3.png">
			</div>
			<div class="col-md-3">
				<img class="center-block" src="/template/default/image/box3_icon4.png">
			</div>
			
		</div>
	</div>
</div>


<div id="box4" class="container-fluid box4" >
	<div class="row" style="background:url(/template/default/image/bg4.jpg) no-repeat top center;padding:30px 0px;">
		<h2 class="text-center" style="color:#fff;">联系我们</h2>
		<h2 class="text-center" style="color:#fff;">Contant</h2>
		<h4 class="text-center" style="color:#fff;">—— 为您服务，我们与有荣焉 ——</h4>
	</div>
	<div class="container" style="margin:40px auto;">
		<div class="col-md-12" >
		
		</div>
		<div class="col-md-9" style="border-right:5px solid #000;">
			<div class="col-md-11">
				<div id="allmap" style="height:350px; border-radius:20px;"></div>
			</div>
		</div>
		<div class="col-md-3">
			<h3>热线：400-997-9921</h3>
			<h3>手机：13305340360</h3>
			<h3>地址：山东省德州市三八东路唐人中心写字楼27层</h3>
			<img style="width:100px;" src="/template/default/image/erweima.jpg">
		</div>
	</div>
</div>

<!-- footer -->
<?php include "../template/default/footer.html"; ?>

</body>
</html>