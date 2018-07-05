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
	<link href="css/zocial.css" rel="stylesheet" type="text/css"/>

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
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
<!--banner-->
<div id="banner">
	<div class="container intro_wrapper">
		<div class="inner_content">
			<h1>我们为你提供的</h1>
			<h1 class="title">photos</h1>
			<h1 class="intro">
				在这里我们有一些 <span class="hue">比赛过程中的图片</span><span> and </span><span class="hue">颁奖过程中的图片 </span></h1>
		</div>
	</div>
</div>

<div class="container wrapper">
	<div class="inner_content">
		<div id="options">
			<ul id="filters" class="option-set" data-option-key="filter">
				<li><a href="#filter" data-option-value="*" class=" selected">All</a></li>
				<li><a href="#filter" data-option-value=".category01">比赛图片</a></li>
				<li><a href="#filter" data-option-value=".category02">颁奖图片</a></li>
				<li><a href="#filter" data-option-value=".category03">其它</a></li>
			</ul>
			<div class="clear"></div>
		</div>
		<!-- portfolio_block -->
		<div class="row">
			<div class="projects">
                <?php
                include_once("opensql.php");
                $sql="select * from tb_images";//准备sql语句
                $xian=$mysqldb->select($sql);
                while ( $row=mysql_fetch_row($xian)) {
                    if ($row[1] == "比赛图片") {
                        $row[1] = 'category01';
                    } else if ($row[1] == "颁奖图片") {
                        $row[1] = 'category02';
                    } else {
                        $row[1] = 'category03';
                    }
                    echo "<div class='span3 element $row[1]' data-category='category01'>
					<div class='hover_img'>
						<a href='img/portfolio/$row[9]' data-rel='prettyPhoto[portfolio1]'>
							<img src='img/portfolio/$row[9]' alt='' /></a>
					</div>
					<div class='item_description'>
						<a href='single_image.php?id=$row[11]'><span class='hue'>查看详情</span></a><br/>
						$row[0]
					</div>
				</div>";
                }
                ?>
				</div>
				<div class="clear"></div>
			</div>
			<!-- //portfolio_block -->
		</div>
	</div>
</div>
<!--//page-->

<!-- footer 2 -->
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
				</div>
			</div>
		</div>
	</div>
</div>
<!-- up to top -->
<a href="#"><i class="go-top hidden-phone hidden-tablet fa fa-angle-double-up"></i></a>
<!--//end-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>

<script type="text/javascript">
    //<![CDATA[
    $(window).load(function(){
        $('.projects').isotope({
        });
    });
    //]]>
</script>
<script type="text/javascript">
    //<![CDATA[
    $(function () {
        $('div.element').hide();
    });
    var i = 0;//initialize
    var int=0;
    $(window).bind("load", function() {
        var int = setInterval("doThis(i)",100);//fade in speed in milliseconds
    });
    function doThis() {
        var imgs = $('div.element').length;
        if (i >= imgs) {
            clearInterval(int);
        }
        $('div.element:hidden').eq(0).fadeIn(100);
        i++;//add 1 to the count
    }
    //]]>
</script>
</body>
</html>	

