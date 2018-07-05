<?php
session_start();

?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<title>flati | responsive html5 template | themeforest | josweb</title>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta name='description' content=''>
	<meta name='author' content=''>

	<link href='http://fonts.useso.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
	<!--[if IE]>
	<link href='http://fonts.useso.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='http://fonts.useso.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.useso.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.useso.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	<![endif]-->

	<link href='css/bootstrap.css' rel='stylesheet'>
	<link href='css/font-awesome.min.css' rel='stylesheet'>
	<link href='css/theme.css' rel='stylesheet'>

	<!--[if lt IE 9]>
	<script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script>
	<![endif]-->
</head>

<body>
<!--header-->
<div class='header'>
	<div class='container'>
		<!--logo-->
		<button type='button' class='btn btn-navbar' data-toggle='collapse' data-target='.nav-collapse'>
			<i class='fa fa-bars'></i></button>
		<div class='logo'>
			<a href='index.php'><img src='img/logo.png' alt='' class='animated bounceInDown' /></a>
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
<!--page-->
<div id='banner'>
	<div class='container intro_wrapper'>
		<div class='inner_content'>
			<h1>赞赏</h1>
			<h1 class='title'>我们的褒奖</h1>

			<h1 class='intro'>
				我们为激励更多的人来参加我们的比赛，在此展示 <span class='hue'>获奖人</span> <span> and </span>
				<span class='hue'> 荣获奖项 </span> </h1>
		</div>
	</div>
</div>

<div class='container wrapper'>
	<div class='inner_content'>
		<div class='pad30'></div>

		<div class='row'>
			<div class='span12'>
				<div class='pad10'></div>
				<div class='row'>
                    <?php
                    include_once('opensql.php');
                    $sql='select * from tb_praise where p_fen=1 order by p_id desc ';//准备sql语句
                    $xian=$mysqldb->select($sql);
                    while ( $row=mysql_fetch_row($xian)) {
                        $s=rand(0,2);
                        if($s==0){
                            echo "<div class='span4'>
						<div class='testimonial1 fadeindown'>
							<p><i class='fa fa-quote-left fa-4x pull-left hue'></i>$row[1]</p>
						</div>
						<div class='center'>
							<p><small>$row[0]</small></p>
						</div>
						<div class='pad15'></div>
					</div>";
                        }else if($s==1){
                            echo "	<div class='span4'>
						<div class='testimonial1 fadeindown'>
							<p><i class='fa fa-quote-left fa-4x pull-left hue'></i>$row[1]</p>
						</div>
						<div class='center'>
							<p><small>$row[0]</small></p>
						</div>
						<div class='pad15'></div>
					</div>";
                        }
                        else{
                            echo "<div class='span4'>
						<div class='testimonial3 fadeindown'>
							<p><img src='img/my_avatar.jpg' alt='' class='img-rounded pull-left'/>$row[1]</p>
						</div>
						<div class='center'>
							<p><small>$row[0]</small></p>
						</div>
						<div class='pad15'></div>
					</div>";
                        }
                    }
                    ?>
				</div>
				<div class='pad25'></div>
				<div class='row'>
                    <?php
                    include_once('opensql.php');
                    $sql='select * from tb_praise where p_fen=2 order by p_id desc ';//准备sql语句
                    $xian=$mysqldb->select($sql);
                    while ( $row=mysql_fetch_row($xian)) {
                        $s=rand(0,1);
                        if($s==0){
                            echo "<div class='span6'>
						<div class='testimonial3 fadeinup'>
							<p><i class='fa fa-comment fa-4x pull-left magnolia'></i>
							$row[1]
							</p>
						</div>
						<div class='center'>
							<p><small>$row[0]</small><br/><span class='hue normal'>$row[2]</span></p>
						</div>
						<div class='pad15'></div>
					</div>";
                        }
                        else{
                            echo "<div class='span6'>
						<div class='testimonial1 fadeinup'>
							<p><img src='img/my_avatar.jpg' alt='' class='img-rounded pull-left'/>
								<i class='fa fa-quote-right fa-4x pull-right hue'></i>
								$row[1]
							</p>
						</div>
						<div class='center'>
							<p><small>$row[0]</small><br/><span class='hue normal'>$row[2]</span></p>
						</div>
						<div class='pad15'></div>
					</div>";
                        }
                    }
                    ?>
				</div>
				<div class='pad25'></div>
				<div class='row'>
                    <?php
                    include_once('opensql.php');
                    $sql='select * from tb_praise where p_fen=3 order by p_id desc ';//准备sql语句
                    $xian=$mysqldb->select($sql);
                    while ( $row=mysql_fetch_row($xian)) {
                        $s=rand(0,3);
                        if($s==0){
                            echo "<div class='span3'>
						<div class='quote_sections_hue fadeindown'>
							<div class='testimonial-icon-disc3 cont-large testimonial-icon rotate'><i class='fa fa-bullhorn testimonial-icon-large asphalt'></i>
							</div>
							<p class='white'>$row[1]</p>
							<p><small class='white normal'>- $row[0] - </small></p>
						</div>
						<div class='pad45'></div>
					</div>";
                        }else if($s==1){
                            echo "<div class='span3'>
						<div class='quote_sections_light fadeindown'>
							<div class='testimonial-icon-disc2 cont-large testimonial-icon rotate'><i class='fa fa-quote-right testimonial-icon-large magnolia'></i></div>
							<p>$row[1]</p>
							<p><small class='colour normal'>- $row[0] - </small></p>
						</div>
						<div class='pad45'></div>
					</div>";
                        }
                        else if($s==2){
                            echo "<div class='span3'>
						<div class='quote_sections_dark fadeindown'>
							<div class='testimonial-icon-disc3 cont-large testimonial-icon rotate'><i class='fa fa-heart-o testimonial-icon-large asphalt'></i>
							</div>
							<p class='grey'>$row[1]</p>
							<p><small class='muted normal'>- $row[0] - </small></p></div>
						<div class='pad45'></div>
					</div>";
                        }else{
                            echo "<div class='span3'>
						<div class='quote_sections fadeindown'>
							<div class='testimonial-icon-disc cont-large testimonial-icon rotate'><i class='fa fa-comments testimonial-icon-large white'></i>
							</div>
							<p>$row[1]</p>
							<p><small class='colour normal'>- $row[0] - </small></p></div>
					</div>";
                        }
                    }
                    ?>
					<div class='pad45'></div>
				</div>
				<div class='clear'></div>
			</div>
		</div>
	</div>
</div>
<!--//page-->

<!-- footer-->
<div id='footer2'>
	<div class='container'>
		<div class='row'>
			<div class='span12'>
				<div class='copyright'>
					MATCH
					&copy;
					<script type='text/javascript'>
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
<a href='#'><i class='go-top hidden-phone hidden-tablet fa fa-angle-double-up'></i></a>
<!--//end-->

<!-- scripts -->
<script src='js/jquery.js'></script>
<script src='js/bootstrap.min.js'></script>
<script type='text/javascript' src='js/scripts.js'></script>

</body>
</html>

