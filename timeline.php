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

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--timeline-->
	<link rel="stylesheet" type="text/css" href="css/timeline.css" />
	<script src="js/modernizr.custom.js"></script>
    <style>
        .shijian{
            color: #30200f;
            transition: all 0.5s linear;
        }
        .shijian:hover{
            color: #ffffff;
        }
    </style>
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
			<h1>Timeline-时间线</h1>
			<h1 class="title">When Where What</h1>
			<h1 class="intro">
				在这里会告诉你在<span>什么时候? 在哪里? 举办过什么比赛?</span> <span class="hue">回顾</span> and <span class="hue">继续前行</span>  </h1>
		</div>
	</div>
</div>
<div class="container wrapper">
	<div class="inner_content">
		<div class="pad45"></div>
		<div class="main fadeinup">
			<ul class="cbp_tmtimeline">
                <?php
                include_once("opensql.php");
                $sql="select * from tb_match order by m_id desc ";//准备sql语句
                $xian=$mysqldb->select($sql);
                while ( $row=mysql_fetch_row($xian)) {
                   $time= date('Y-m',strtotime($row[3]));
                   $s=rand(0,4);
                    if($s==0){
                        $ino='cbp_tmicon-phone';
                    }else if($s==1){
                        $ino='cbp_tmicon-screen';
                    }else if($s==2){
                        $ino='cbp_tmicon-mail';
                    }else{
                        $ino='cbp_tmicon-earth';
                    }echo " 	
 	               <li>
					<time class='cbp_tmtime'><span>$time</span></time>
					<div class='cbp_tmicon $ino'></div><!--类型-->
					<div class='cbp_tmlabel'>
					    <a href='about.php?id=$row[39]' class='shijian'>
						    <h2>$row[1]</h2>
						    <p>$row[2]</p>
						</a>
					</div>
				   </li>";
                }
                ?>
			</ul>
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

<!-- scripts -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>