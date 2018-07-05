<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Best Match</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Google Fonts -->
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
	<link href="css/settings.css" rel="stylesheet" type="text/css"/>
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

<div class="fullwidthbanner-container">
	<div class="fullwidthbanner">
		<ul>
			<!-- Slide 1 -->
			<li data-transition="slideright">
				<img src="img/slider/slider1.jpg" alt="" />
				<!-- Caption -->
				<div class="tp-caption lfr" data-x="left" data-y="195" data-speed="2400" data-start="800" data-easing="easeOutExpo">
					<img src="img/slider/robot1.png" alt="" />
				</div>
				<!-- Caption -->
				<div class="tp-caption lfb" data-x="870" data-y="140" data-speed="1400" data-start="1800" data-easing="easeOutExpo">
					<img src="img/slider/rocket.png" alt="" />
				</div>
				<!-- Caption -->
				<div class="tp-caption lfb" data-x="825" data-y="330" data-speed="1500" data-start="1900" data-easing="easeOutExpo">
					<img src="img/slider/flames.png" alt="" />
				</div>
				<!-- Caption -->
				<div class="caption sft stl" data-x="center" data-y="105" data-speed="1000" data-start="700" data-easing="easeOutExpo">
					<h3 class="rev-title bold">AI 人工智能</h3>
				</div>
				<!-- Caption -->
				<div class="caption lfl stl rev-title-sub" data-x="center" data-y="240" data-speed="800" data-start="1100" data-easing="easeOutExpo">
					创新 - 构思 - 挑战
				</div>
				<!-- Caption -->
				<div class="caption sfb" data-x="center" data-y="320" data-speed="1100" data-start="1500" data-easing="easeOutExpo">
					<a href="#" class="btn btn-primary btn-custom">了解我们</a>
				</div>
			</li>

			<!-- Slide 2 -->
			<li data-transition="slideleft">
				<img src="img/slider/slider2.jpg" alt="" />
				<!-- Caption -->
				<div class="tp-caption lfl" data-x="right" data-y="35" data-speed="1000" data-start="800" data-easing="easeOutExpo">
					<img src="img/slider/iMac.png" alt="" />
				</div>
				<!-- Caption -->
				<div class="caption lfl stl bg" data-x="20" data-y="60" data-speed="800" data-start="700" data-easing="easeOutExpo">
					<h2 class="rev-title big white">这就是我们<br>一起进步!</h2>
				</div>
				<!-- Caption -->
				<div class="caption lfl stl rev-text rev-left" data-x="left" data-y="190" data-speed="800" data-start="1100" data-easing="easeOutExpo">
					<p class="hidden-phone">IF  你有好的建议和想法,可以点击下方按钮联系我们<br />
						我们将采用您好的建议和想法<br/>
                        Come on,act quickly<br/>
                        Thank you!</p>
				</div>
				<!-- Caption -->
				<div class="caption sfb stb rev-left" data-x="left" data-y="380" data-speed="1100" data-start="1500" data-easing="easeOutExpo">
					<a href="#" class="btn btn-inverse btn-custom mobile">SERVICES-服务</a>   &nbsp;&nbsp;
					<a href="#" class="btn btn-inverse btn-custom mobile">CONTACT-联系</a>
				</div>
			</li>

			<!-- Slide 3 -->
			<li data-transition="slideleft" >
				<img src="img/slider/slider3.jpg" alt="" />
				<!-- Caption -->
				<div class="tp-caption lfl" data-x="right" data-y="35" data-speed="1000" data-start="800" data-easing="easeOutExpo">
					<img src="img/slider/robot2.png" alt="" />
				</div>
				<!-- Caption -->
				<div class="caption lfl stl bold bg rev-left" data-x="left" data-y="80" data-speed="800" data-start="1500" data-easing="easeOutExpo">
					<h3 class="rev-title big bold">Starting now</h3>
				</div>
				<!-- Caption -->
				<div class="caption lfl stl rev-text rev-left" data-x="left" data-y="200" data-speed="800" data-start="1700" data-easing="easeOutExpo">
					<p class="white hidden-phone">这是一个互相竞争的地方<br />
						在这里,你能学到很多,Make a spurt of progress<br />
						你将会不断进步和获得更多的经验.</p>
				</div>
				<!-- Caption -->
				<div class="caption sfb rev-left" data-x="left" data-y="350" data-speed="800" data-start="1900" data-easing="easeOutExpo">
					<h3 class="rev-title2 bold">2272752599@qq.com</h3>
				</div>
			</li>

			<!-- Slide 4 -->
			<li data-transition="slidedown">
				<img src="img/slider/slider4.jpg" alt="" />
				<!-- Caption -->
				<div class="caption fade fullscreenvideo"  data-autoplay="false"  data-speed="500" data-start="500" data-easing="easeOutBack">
					<iframe src="https://www.apple.com/105/media/cn/iphone-x/2017/01df5b43-28e4-4848-bf20-490c34a926a7/films/feature/iphone-x-feature-cn-20170912_1280x720h.mp4?title=0&amp;byline=0&amp;portrait=0"></iframe>
				</div>
				<div class="caption big_white sft stt" data-x="center" data-y="25" data-speed="300" data-start="500" data-easing="easeOutExpo" data-end="4000"
					 data-endspeed="300" data-endeasing="easeInSine">
					享受观看视频的乐趣
				</div>
			</li>
		</ul>
		<div class="tp-bannertimer tp-bottom"></div>
	</div>
</div>
<!-- // END REVOLUTION SLIDER -->

<div id="banner">
	<div class="container intro_wrapper">
		<div class="inner_content">

			<!--welcome-->
			<div class="welcome_index">
                我认为大多数<a href="#"><span class="hue_block white normal">Successor</span></a>都是敢于挑战和尝试的
				<span class="hue">Average person</span>	和他们的余生都在 <span>Study</span>
				- The author
			</div>
			<!--//welcome-->
		</div>
	</div>
</div>
<!--//banner-->

<div class="container wrapper">
	<div class="inner_content">
		<div class="pad45"></div>

		<!--info boxes-->
		<div class="row">
			<div class="span3">
				<div class="tile">
					<div class="intro-icon-disc cont-large"><i class="fa fa-wrench intro-icon-large"></i></div>
					<h6><small>设计</small>
						<br><a href="#"><span>为创造者而建</span></a></h6>
					<p>如果你有好的构思和主意你可以看看此类比赛 </p>
				</div>
				<div class="pad25"></div>
			</div>

			<div class="span3">
				<div class="tile">
					<div class="intro-icon-disc cont-large"><i class="fa fa-rocket intro-icon-large"></i></div>
					<h6><small>代码</small>
						<br><a href="#"><span>为程序员而建</span></a></h6>
					<p>为程序员搭建的比赛项目</p>
				</div>
				<div class="pad25"></div>
			</div>

			<div class="span3">
				<div class="tile tile-hot">
					<div class="intro-icon-disc cont-large"><i class="fa fa-flask intro-icon-large"></i></div>
					<h6><small>小型比赛&活动</small>
						<br><a href="#"><span>为奔跑者而建</span></a></h6>
					<p>由各种活动和小型比赛组成的集合</p>
				</div>
				<div class="pad25"></div>
			</div>

			<div class="span3">
				<div class="tile">
					<div class="intro-icon-disc cont-large"><i class="fa fa-book  intro-icon-large"></i></div>
					<h6> <small>支持</small>
						<br><a href="#"><span>为Match的发展而建</span></a></h6>
					<p>当然，深感荣幸，你有兴趣可以了解并加入我们，</p>
				</div>
				<div class="pad25"></div>
			</div>
		</div>

		<!--//info boxes-->
		<div class="row">
			<!--col 1-->
			<div class="span12">
				<div class="row">
					<div class="pad25 hidden-phone"></div>
					<div class="span4">
						<h1>近期 Match Notice</h1>


                        <?php
                        include_once("opensql.php");
                        $sql="select * from tb_match where m_id in (1,2,3)";//准备sql语句
                        $xian=$mysqldb->select($sql);
                        while ( $row=mysql_fetch_row($xian)) {
                            echo "<h4>$row[1]</h4>";
                            $sql1="select * from tb_notice where m_id=$row[39]";//准备sql语句
                            $xian1=$mysqldb->select($sql1);
                            while ($row1=mysql_fetch_row($xian1)){
                                echo "<p><i class='fa fa-volume-down colour'></i>$row1[0]</p>";
                            }
                            echo "<a href='about.php?id=$row[39]' class='btn btn-primary  btn-custom btn-rounded'>了解详情</a>";
                            echo "<div class='pad45'></div>";
                        }
                        ?>
					</div>
					<!--column 2 slider-->
					<div class="span8 pad15 col_full2" style="height: 600px;">
						<div id="slider_home">
                            <?php
                            include_once("opensql.php");
                            $sql="select * from tb_match ";//准备sql语句
                            $xian=$mysqldb->select($sql);
                            while ( $row=mysql_fetch_row($xian)) {
                                echo "	<div class='slider-item'>
								<div class='slider-image'>
									<div class='hover_colour'>
										<a href='img/$row[36]' data-rel='prettyPhoto'>
											<img src='img/$row[36]' alt='' /></a>
									</div>
								</div>
								<div class='slider-title'>
									<a href='about.php?id=$row[39]'><h3>$row[1]</h3></a>
									<p>$row[2]</p>
								</div>
							</div>
";
                            }
                            ?>
						</div>
						<div id="sl-prev" class="widget-scroll-prev"><i class="fa fa-chevron-left white"></i></div>
						<div id="sl-next" class="widget-scroll-next"><i class="fa fa-chevron-right white but_marg"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//page-->

	<div class="pad25 hidden-desktop"></div>
</div>

<!-- footer -->
<div id="footer">
	<h1>get in touch-保持联系</h1>
	<h3 class="center follow">
        我们很社交，我们很乐意听取您的意见！随时向我们发送电子邮件，在Google Plus上找到我们，在Twitter上关注我们，并在Facebook上加入我们。</h3>
	<div class="follow_us">
		<a href="#" class="zocial twitter"></a>
		<a href="#" class="zocial facebook"></a>
		<a href="#" class="zocial linkedin"></a>
		<a href="#" class="zocial googleplus"></a>
		<a href="#" class="zocial vimeo"></a>
	</div>
</div>

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
					- All Rights
				</div>
			</div>
		</div>
	</div>
</div>
<!-- up to top -->
<a href="#"><i class="go-top hidden-phone hidden-tablet fa fa-angle-double-up"></i></a>
<!--//end-->
<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
<!-- slider settings -->
<script>
    //<![CDATA[
    $(document).ready(function() {
        if ($.fn.cssOriginal!=undefined)
            $.fn.css = $.fn.cssOriginal;
        $('.fullwidthbanner').revolution(
            {
                delay:9000,
                startwidth:1170,
                startheight:550,
                onHoverStop:"on",
                navigationType:"none",
                soloArrowLeftHOffset:0,
                soloArrowLeftVOffset:0,
                soloArrowRightHOffset:0,
                soloArrowRightVOffset:0,
                touchenabled:"on",
                fullWidth:"on",
                shadow:0
            });
    });
    //]]>
</script>
<script src="js/jquery.touchSwipe.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<!-- carousel -->
<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript">
    //<![CDATA[
    jQuery(document).ready(function($) {
        $("#slider_home").carouFredSel({ width : "100%", height : "auto",
            responsive : true,  circular : true, infinite	: false, auto : false,
            items : { width : 231, visible: { min: 1, max: 3 }
            },
            swipe : { onTouch : true, onMouse : true },
            scroll: { items: 3, },
            prev : { button : "#sl-prev", key : "left"},
            next : { button : "#sl-next", key : "right" }
        });
    });
    //]]>
</script>
</body>
</html>
