<?php

session_start();
if(empty($_GET['id'])){
    $id=1;
}else{
    $id=$_GET['id'];
}

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

<?php



  include_once("opensql.php");
   $sql="select * from tb_match where m_id=$id";//准备sql语句
   $xian=$mysqldb->select($sql);
   $row=mysql_fetch_row($xian);

    echo "<div id='banner'>
	<div class='container intro_wrapper'>
		<div class='inner_content'>
			<h1 class='span9'>$row[0]</h1><h1 class='span2'><a href='team.php' style='cursor: pointer'>了解更多比赛 <i class=' fa fa-angle-double-right colour' ></i></a></h1>
			<h1 class='span12 title'>$row[1]</h1>
			<h1 class='span12 intro'>$row[2]</h1>
		</div>
	</div>
</div>";

echo "<div class='container wrapper'>
	<div class='inner_content'>
		<div class='pad30'></div>
		<div class='row'>
			<div class='span4'>
				<div class='animated bounceInLeft'><i class='fa fa-bolt colour big'></i></div>
				<h2>我们的结构</h2>
				<p>
				<ul class='fa-ul'>
					<li><i class='fa-li fa fa-bell-o colour'></i>报名开始时间：<span class='btn-danger'>$row[3]</span></li>
					<li><i class='fa-li fa fa-bell colour'></i>报名结束时间：<span class='btn-danger'>$row[4]</span></li>
					<li><i class='fa-li fa fa-bell-o colour colour'></i>比赛时间：<span class='btn-danger'>$row[5]</span></li>
					<li><i class='fa-li fa fa-location-arrow colour'></i>比赛地点：<span class='btn-success'>$row[6]</span></li>
					<li><i class='fa-li fa fa-user colour'></i>参赛人员：<span class='btn-info'>$row[7]</span></li>
					<li><i class='fa-li fa fa-male colour'></i>参加人员：<span class='btn-primary'>$row[8]</span></li>
				</ul>
				</p>
				<div class='pad25'></div>
				<h5>组织结构</h5>
				<p>
				<ul class='fa-ul'>
					<li><i class='fa-li fa fa-star colour'></i>主办单位：<a data-rel='tooltip' data-placement='top' title='$row[10]'><strong>$row[9]</strong></a></li>
					<li><i class='fa-li fa fa-star-half-empty colour'></i>承办单位：<a data-rel='tooltip' data-placement='top' title='$row[12]'><strong>$row[11]</strong></a></li>
					<li><i class='fa-li fa fa-star-o colour'></i>比赛支持：<a data-rel='tooltip' data-placement='top' title='$row[14]'><strong>$row[13]</strong></a></li>
				</ul>
				</p>
				<div class='pad12'></div>
			</div>

			<div class='span4'>
				<div class='animated bounceInDown'><i class='fa fa-cogs colour big'></i></div>
				<h2>我们的规则</h2>
				<p>
			$row[15]
				</p>
				<h5>参赛阶段</h5>
				<ul class='fa-ul'>
					<li><i class='fa-li fa fa-check colour'></i>阶段一：$row[16]</li>
					<li><i class='fa-li fa fa-check colour'></i>阶段二：$row[17]</li>
					<li><i class='fa-li fa fa-check colour'></i>阶段三：$row[18]</li>
					<li><i class='fa-li fa fa-check colour'></i>阶段四：$row[19]</li>
				</ul>
				<div class='pad25'></div>
				<h5>奖项设置与颁奖典礼</h5>
				<ul class='fa-ul'>
					<li><i class='fa-li fa fa-trophy colour'></i> $row[20]</li>
					<li><i class='fa-li fa fa-tasks colour'></i> $row[21]</li>
				</ul>
				<div class='pad25'></div>
			</div>

			<div class='span4'>
				<div class='animated bounceInRight'><i class='fa fa-lightbulb-o colour big'></i></div>
				<h2>我们的要求</h2>
				<p>
					$row[22]
				</p>
				<h5>报名要求</h5>
				<ul class='fa-ul'>
					<li><i class='fa-li fa fa-tags colour'></i> $row[23]</li>
					<li><i class='fa-li fa fa fa-tags  colour'></i> $row[24]</li>
					<li><i class='fa-li fa fa fa-tags colour'></i>$row[25]</li>
					<li><i class='fa-li fa fa fa-tags colour'></i> $row[26]</li>
				</ul>
				<div class='pad25'></div>
				<h5>竞赛要求</h5>
				<ul class='fa-ul'>
					<li><i class='fa-li fa fa-volume-up colour'></i> $row[27]</li>
					<li><i class='fa-li fa fa-volume-up colour'></i> $row[28]</li>
					<li><i class='fa-li fa fa-volume-up colour'></i> $row[29]</li>
					<li><i class='fa-li fa fa-volume-up colour'></i> $row[30]</li>
				</ul>
				<div class='pad25'></div>
			</div>

		</div>
		<div class='row'>
			<div class='span8'>
				<h2>我们的打分</h2>
				<div class='progress'>
					<div class='bar'  data-percentage='$row[31]'>
					</div>
				</div>
				<small>思维</small>
				<div class='progress'>
					<div class='bar'  data-percentage='$row[32]'>
					</div>
				</div>
				<small>创造</small>

				<div class='progress'>
					<div class='bar'  data-percentage='$row[33]'>
					</div>
				</div>
				<small>基本</small>

				<div class='pad45 hidden-desktop'></div></div>
			<!--testimonial-->
			<div class='span4 pad15'>
				<div class='testimonial1'>
					<p><i class='fa fa-comments fa-4x pull-left hue'></i>$row[34]</p>
				</div>
				<div class='center'>
					<p><small>重要公告</small></p>
				</div>
				<div class='pad45 hidden-desktop'></div></div>
		</div>
	</div>
</div>
";

echo "<div class='strip row'>
	<h1 class='center'>了解更多</h1>
	<h3 class='center about_strip'>二维码</h3>
	<h3 class='offset8 span3'><img  src='img/$row[35]'></h3>
	<div class='pad45'></div>
	<a href='pricing_table.php?id=$row[39]' class='big_button'>立即报名</a>
	<div class='pad25'></div>
</div>";

?>

<!--footer-->
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
<!-- skills -->
<script>
    //<![CDATA[
    setTimeout(function(){
        $('.progress .bar').each(function() {
            var me = $(this);
            var perc = me.attr("data-percentage");
            var current_perc = 0;
            var progress = setInterval(function() {
                if (current_perc>=perc) {
                    clearInterval(progress);
                } else {
                    current_perc +=1;
                    me.css('width', (current_perc)+'%');
                }
                me.text((current_perc)+'%');
            }, 20);
        });
    },300);
    //]]>
</script>

</body>
</html>