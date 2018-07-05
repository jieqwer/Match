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
			<h1>Meet a match</h1>
			<h1 class="title">Our project competition</h1>
			<h1 class="intro">我们的比赛，是 <span class="hue"> 大多数人 </span>的想法和建议 <span> AND </span>  <span class="hue">希望 </span> 促进和鼓励大家参与</h1>
		</div>
	</div>
</div>

<div class="container wrapper">
	<div class="inner_content">
		<div class="pad30"></div>
		<div class="row">
			<div class="span6">
				<p>Just say something-随便说点什么</p>
			</div>
			<div class="span6">
				<p>ust say something<a href=""> say </a>随便说点什么</p>
			</div>
			<div class="clear"></div>
			<div class="pad25"></div>

            <?php
            include_once("opensql.php");
            $sql="select * from tb_match ";//准备sql语句
            $xian=$mysqldb->select($sql);
            while ( $row=mysql_fetch_row($xian)) {
                echo "<div class='span3'>
				<div class='team_sections fadeindown'>
					<img alt='' src='img/$row[36]' class='th '>
					<h5><span>$row[1]</span></h5>
					<p><small class='muted normal'>- $row[0] - </small></p>
					<p class='team_bio'>$row[2]</p>
					<hr class='team-line'>
					<i  class='fa fa-hand-o-right'></i>
					<a href='about.php?id=$row[39]' class='muted zocial team_ic '>了解一波</a>
					<i  class='fa fa-hand-o-left'></i>
				</div>
				<div class='pad15'></div>
			</div>";
            }
            ?>


			<div class="span4">
				<div class="team_sections fadeindown">
					<img alt="" src="img/team1.jpg" class="th ">
					<h5><span>比赛名称</span></h5>
					<p><small class="muted normal">- 类别 - </small></p>
					<p class="team_bio">简介</p>
					<hr class="team-line">
					<a href="#" class="zocial icon twitter team_ic"></a>
					<a href="#" class="zocial icon facebook team_ic"></a>
					<a href="#" class="zocial icon dribbble team_ic"></a>
				</div>
				<div class="pad15"></div>
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
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>

