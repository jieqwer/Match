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
<?php
session_start();

?>
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
$sql1="select count(id) from tb_single";//准备sql语句
$xian1=$mysqldb->select($sql1);
$row1=mysql_fetch_row($xian1);
if(empty($_GET['id'])){
    $id=1;
}else{
    $id=$_GET['id'];
}

if($id<=1){
    $shang=1;
}else{
    $shang=$id-1;
}
if($id>=$row1[0]){
    $next=$row1[0];
}else{
    $next=$id+1;
}
include_once("opensql.php");
$sql="select * from tb_single where id=$id";//准备sql语句
$xian=$mysqldb->select($sql);
$row=mysql_fetch_row($xian);

echo "<div id='banner'>
	<div class='container intro_wrapper'>
		<div class='inner_content'>
			<h1>$row[1]</h1>
			<h1 class='title'>$row[0]</h1>
			<h1 class='intro'>$row[2]</h1>
		</div>
	</div>
</div>";

echo "
<div class='container wrapper'>
	<div class='inner_content'>
		<div class='pad30'></div>
		<div class='row'>
			<div class='span4'>
				<h2><span>Study</span></h2>
				<p class='lead'>$row[3]</p>

				<h4><span>文章类型</span></h4>
				<ul class='fa-ul'>
					<li><i class='fa-li fa fa-globe colour'></i> $row[4]</li>
					<li><i class='fa-li fa fa-pencil colour'></i> $row[5]</li>
					<li><i class='fa-li fa fa-laptop colour'></i> $row[6]</li>
				</ul>
				<div class='pad15'></div>
				<p>$row[7]</p>
				<div class='pad15'></div>
				<a href='' class='btn btn-info  btn-medium btn-rounded'>$row[8]</a>
				<a href='' class='btn btn-info  btn-medium btn-rounded'>$row[9]</a>
				<div class='pad45 clear-fix'></div>
				<div class='portfolio-links'>
					<a href='single_portfolio.php?id=$shang'><span class='fa-stack fa-lg'>
						<i class='fa fa-angle-left fa-stack-1x fa-inverse'></i>
						</span></a>
					<a href='single_portfolio.php?id=$next'><span class='fa-stack fa-lg'>
						<i class='fa fa-angle-right fa-stack-1x fa-inverse'></i>
						</span></a>
				</div>
				<div class='pad25'></div>
			</div>
			<div class='span8 pad15'>
				<p>  $row[10]</p>
				<div class='pad25'></div>
			</div>
		</div><a href='download.php?id=$row[12]'>下载文档</a>";

?>


</div>
</div>

<!--related projects-->
<div class="strip2">
    <h1>其它相关文章</h1>
    <h3 class="center about_strip">通过这些你会了解更多</h3>
    <div class="container wrapper">
        <div class="inner_content">
            <div class="inner_content col_full">
                <div id="slider_related" class="projects">
                    <?php
                    include_once("opensql.php");
                    $sql2="select * from tb_single where s_fen='$row[1]'";//准备sql语句
                    $xian2=$mysqldb->select($sql2);
                    while ( $row2=mysql_fetch_row($xian2)) {
                        echo "<div class='span3 element category02 item_description ' style='height: 120px;' data-category='category02'>
                        $row2[2]
                        <div>
                            <a href='single_portfolio.php?id=$row2[12]'><span class='hue'>查看详情</span></a><br/>
                            <span >$row2[0]</span>
                        </div>
                    </div>";
                    }
                    ?>
                </div>
                <div id="sl-prev2" class="widget-scroll-prev2"><i class="fa fa-chevron-left white"></i></div>
                <div id="sl-next2" class="widget-scroll-next2"><i class="fa fa-chevron-right white but_marg"></i></div>
            </div>
            <!--//projects-->
        </div>
    </div>
</div>
<!--//page-->

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

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript">
    //<![CDATA[
    jQuery(document).ready(function($) {
        var portfolioCarousel = $("#slider_related");
        portfolioCarousel.carouFredSel({
            width : "100%", height : "auto",
            circular : false, responsive : true, infinite : false, auto : false,
            items : {  width : 230,
                visible: { min: 1, max:5 }
            },
            swipe: { onMouse: true, onTouch: true },
            prev : { button : "#sl-prev2", key : "left" },
            next : {  button : "#sl-next2", key : "right" },
            onCreate : function () {
                $(window).on('resize', function(){
                    portfolioCarousel.parent().add(portfolioCarousel).css('height', portfolioCarousel.children().first().outerHeight() + 'px');
                })
                    .trigger('resize'); }
        });
    });
    //]]>
</script>

<script type="text/javascript">
    //<![CDATA[
    $(document).ready(function () {
        $('.nivoSlider').nivoSlider({
            effect: 'fade', manualAdvance: true });
    });
    //]]>
</script>
</body>
</html>
