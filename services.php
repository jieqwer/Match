<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>flati | responsive html5 template | themeforest | josweb</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href='http://fonts.useso.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
	<!--[if IE]>
	<link href="http://fonts.useso.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="http://fonts.useso.com/css?family=Lato:400" rel="stylesheet" type="text/css">
	<link href="http://fonts.useso.com/css?family=Lato:700" rel="stylesheet" type="text/css">
	<link href="http://fonts.useso.com/css?family=Lato:300" rel="stylesheet" type="text/css">
	<![endif]-->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/theme.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css"/>

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--slider-->
	<link rel="stylesheet" type="text/css" href="css/slider.css" />
	<script src="js/modernizr.custom.63321.js"></script>
</head>

<body>
<!--header-->
<div class="header">
	<div class="container">
		<!--logo-->
		<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<i class="fa fa-bars"></i></button>
		<div class="logo">
			<a href="index.php"><img src="img/logo.png" alt="" class="animated bounceInDown" /></a>
		</div>
		<!--menu-->
        <nav id="main_menu">
            <div class="nav-collapse collapse">
                <ul class="nav nav-pills">
                    <li class="dropdown active"><a href="index.php">Home</a>
                    </li>
                    <li class="dropdown"><a href="javascript:{}">赛程</a>
                        <ul class="dropdown-menu">
                            <li><a href="team.php">竞赛项目</a></li>
                            <li><a href="about.php">项目详情</a></li>
                            <li><a href="services.php">资源</a></li>
                            <li><a href="testimonials.php">褒奖</a></li>
                            <li><a href="timeline.php">Timeline</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="javascript:{}">Work</a>
                        <ul class="dropdown-menu">
                            <li><a href="portfolio_2columns.php">Video</a></li>
                            <li><a href="portfolio_3columns.php">文章</a></li>
                            <li><a href="portfolio_4columns.php">图片</a></li>
                            <li><a href="single_portfolio.php">Single Slider</a></li>
                            <li><a href="single_video.php">单个Video</a></li>
                            <li><a href="single_image.php">单个Image</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="javascript:{}">Extras</a>
                        <ul class="dropdown-menu">
                            <li><a href="pricing_table.php">Pricing Table</a></li>
                            <li><a href="404.php">404 Page</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="javascript:{}">Blog</a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="blog_two.html">Blog II</a></li>
                            <li><a href="blog_post.html">Blog Post</a></li>
                            <li><a href="blog_post2.html">Blog Post II</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">联系我们</a></li>
                    <li><?php if(empty($_SESSION['name'])){ echo "<a style='color: #0e90d2' href='login.php'>注册与登录</a>";} else{ echo "<a style='color: #0e90d2' href='blog.php'>" .$_SESSION['name']."</a> ";}  ?></li>
                    <li><a href="loginout.php"><?php if(empty($_SESSION['name'])){} else{ echo "退出";}  ?></a></li>
                </ul>
            </div>
        </nav>
	</div>
</div>
<!--//header-->

<!--page-->
<div id="banner">
	<div class="container intro_wrapper">
		<div class="inner_content">
			<h1>我们的资源</h1>
			<h1 class="title">我们为你们提供了很多</h1>
			<h1 class="intro">
				这里有比赛相关的<span class="hue"> 视频、图片、资料、文章、经验</span>，只要你愿意 ，你可以选择<span> 上传 </span> and <span> 下载 </span> </h1>
		</div>
	</div>
</div>

<div class="pad30"></div>
<div class="container wrapper">
	<div class="inner_content">
		<!-- slider -->
		<div id="mi-slider" class="mi-slider">
			<ul>
				<li><a href="portfolio_2columns.php"><img alt="" src="img/illustrations/2.png" /><h4>比赛视频</h4></a></li>
				<li><a href="portfolio_2columns.php"><img alt="" src="img/illustrations/clipboard.png" /><h4>学习视频</h4></a></li>
			</ul>
			<ul>
				<li><a href="portfolio_4columns.php"><img alt="" src="img/illustrations/calendar.png" /><h4>比赛图片</h4></a></li>
				<li><a href="portfolio_4columns.php"><img alt="" src="img/illustrations/1.png" /><h4>获奖图片</h4></a></li>
			</ul>
			<ul>
				<li><a href="portfolio_3columns.php"><img alt="" src="img/illustrations/book.png" /><h4>文章</h4></a></li>
				<li><a href="portfolio_3columns.php"><img alt="" src="img/illustrations/infinity.png" /><h4>资料</h4></a></li>
				<li><a href="portfolio_3columns.php"><img alt="" src="img/illustrations/compass.png" /><h4>经验</h4></a></li>
			</ul>
			<ul>
				<li><a href="timeline.php"><img alt="" src="img/illustrations/time.png" /><h4>时间历程</h4></a></li>
				<li><a href="#"><img alt="" src="img/illustrations/map.png" /><h4>map</h4></a></li>
			</ul>
			<nav>
				<a href="#">Video</a>
				<a href="#">Photo</a>
				<a href="#">文档</a>
				<a href="#">其它</a>

			</nav>
		</div>
		<!-- /slider -->

		<div class="pad90 hidden-phone"></div>
		<div class="clear"></div>
		<div class="pad45"></div>
		<div class="row">
			<div class="span12 pad25">
				<div class="row">
					<h1 class="center">我们的精彩合作伙伴</h1>
					<h3 class="center client_intro">通过他们的支持与赞助，我们的活动奖品和活动内容更加丰富</h3>
					<div class="span4 client client1"><a href="#">Client Name</a></div>
					<div class="span4 client client2"><a href="#">Client  Name</a></div>
					<div class="span4 client client3"><a href="#">Client  Name</a></div>
					<div class="span4 client client4"><a href="#">Client  Name</a></div>
					<div class="span4 client client5"><a href="#">Client  Name</a></div>
					<div class="span4 client client6"><a href="#">Client  Name</a></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--//page-->

<!-- footer-->
<div id="footer2">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="copyright">
					MATCH
					&copy;
					<script type="text/javascript">
                        //<![CDATA[
                        var d = new Date()
                        document.write(d.getFullYear())
                        //]]>
					</script>
					- All Rights
				</div>
			</div>
		</div>
	</div>
</div>
<!-- up to top -->
<a href="#"><i class="go-top hidden-phone hidden-tablet fa fa-angle-double-up"></i></a>
<!--//end-->

<script src="js/jquery.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

<!--slider-->
<script src="js/jquery.catslider.js"></script>
<script>
    //<![CDATA[
    $(function() {
        $( '#mi-slider' ).catslider();
    });
    //]]>
</script>

</body>
</html>

