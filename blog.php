<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>我的信息</title>
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
	<h1>information</h1>
	<h1 class="title">我的信息及历程</h1>
	</div>
	</div>
		</div>
		
		<div class="container wrapper">
		<div class="inner_content">
		<div class="pad30"></div>
		<div class="row">
		<!--post-->
			<div class="span9 pad15">
			<div class="row">
		<!--date-->
			<div class="span1">	
			<div class="btn btn-medium btn-rounded btn-blog1"> 29 MAY
			<i class="fa fa-comments fa-2x"></i> <a class="com_no" href="#">23</a></div>
		</div>
		<!--post entry-->
		<div class="span8">
		<div class="hover_img">
			<a href="img/large/4.jpg" data-rel="prettyPhoto">
				<img src="img/large/4.jpg" alt=""></a>
			</div>
			
			<h1 class="post_link"><a href="blog_post.html">Donec iaculis metus vitae ligula </a></h1>
			
			<div class="post-meta muted">
			<ul>
				<li>Posted by <a href="#">admin</a> </li>
				<li>in <a href="#">web</a>, <a href="#">graphics</a> </li>
				<li>tags <a href="#">prints</a>, <a href="#">design</a> </li>
			</ul>
				</div>
				
			<p>Enim ultrices, elementum phasellus. Mauris sed nulla sed, egestas feugiat a dictum libero, nunc sapien tri tique facilisis venenatis risus, 
			suspendisse ac nec et. Nulla sed mauris, congue duis proin nonummy adipiscing vitae  Mauris sed nulla sed, egestas feugiat a dictum libero, nunc sapien 
			tristique facilisis venenatis risus. Enim ultrices, elementum phasellus. Mauris sed nulla sed, egestas feugiat a dictum libero, nunc sapien tristique.
			Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos 
			<a href="#">[&#8230;]</a></p>
			
			<div class="read_more"><a href="blog_post.html">READ MORE &rarr;</a></div>
			<div class="pad30"></div>
			</div><!--end post-->
			
		<!--post-->
        	<div class="span9 pad15">
			<div class="row">
		<!--date-->
				<div class="span1">	
				<div class="btn btn-medium btn-rounded btn-blog1">26 MAY
				<i class="fa fa-comments fa-2x"></i>  <a class="com_no" href="#">18</a></div>
			</div>
		<!--post entry-->
			<div class="span8">
			<!-- carousel starts -->
			<div id="carousel" class="carousel slide ">
				<div class="carousel-inner blog_slide1">
					<div class="item active">
						<img src="img/large/2.jpg" alt="" />
					</div>
						<div class="item">
							<img src="img/large/1.jpg" alt="" />
						</div>
					<div class="item">
							<img src="img/large/5.jpg" alt="" />
						</div>
							</div>
                                <a class="left carousel-control" href="#carousel" data-slide="prev"></a>
                                <a class="right carousel-control" href="#carousel" data-slide="next"></a>
                          </div>

			<h1 class="post_link"><a href="blog_post.html">Class aptent taciti sociosqu ad</a></h1>
			
			<div class="post-meta muted">
			<ul>
				<li>Posted by <a href="#">admin</a> </li>
				<li>in <a href="#">editorial</a>, <a href="#">graphics</a> </li>
				<li>tags <a href="#">illustration</a>, <a href="#">design</a> </li>
			</ul>
				</div>
				
			<p>Enim ultrices, elementum phasellus. Mauris sed nulla sed, egestas feugiat a dictum libero, nunc sapien tri tique facilisis venenatis risus, 
			suspendisse ac nec et. Nulla sed mauris, congue duis proin nonummy adipiscing vitae  Mauris sed nulla sed, egestas feugiat a dictum libero, nunc sapien 
			tristique facilisis venenatis risus. Enim ultrices, elementum phasellus. Mauris sed nulla sed, egestas feugiat a dictum libero, nunc sapien tristique.
			Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos 
			<a href="#">[&#8230;]</a></p>
			
			<div class="read_more"><a href="blog_post.html">READ MORE &rarr;</a></div>
			<div class="pad30"></div>
			</div><!--end post-->
			
		<!--post-->
			<div class="span9 pad15">
			<div class="row">	
		<!--date-->
			<div class="span1">	
			<div class="btn btn-medium btn-rounded btn-blog1"> 02 MAY
			<i class="fa fa-comments fa-2x"></i> <a class="com_no" href="#">12</a></div>
			</div>
		<!--post entry-->
			<div class="span8">
		<!-- video starts -->
			<div class="vendor">
            <iframe src="http://player.vimeo.com/video/59653641?title=0&amp;byline=0&amp;portrait=0"></iframe>
          </div>
			
			<h1 class="post_link"><a href="blog_post.html">Mauris sed nulla sed egestas</a></h1>
			
			<div class="post-meta muted">
			<ul>
				<li>Posted by <a href="#">admin</a> </li>
				<li>in <a href="#">video</a>, <a href="#">vimeo</a> </li>
				<li>tags <a href="#">watch</a>, <a href="#">purchase</a> </li>
			</ul>
				</div>
				
			<p>Enim ultrices, elementum phasellus. Mauris sed nulla sed, egestas feugiat a dictum libero, nunc sapien tri tique facilisis venenatis risus, 
			suspendisse ac nec et. Nulla sed mauris, congue duis proin nonummy adipiscing vitae  Mauris sed nulla sed, egestas feugiat a dictum libero, nunc sapien 
			tristique facilisis venenatis risus. Enim ultrices, elementum phasellus. Mauris sed nulla sed, egestas feugiat a dictum libero, nunc sapien tristique.
			Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos 
			<a href="#">[&#8230;]</a></p>
			
			<div class="read_more"><a href="blog_post.html">READ MORE &rarr;</a></div>
			<div class="pad30"></div>
			</div><!--end post-->
			
		<!--post-->
			<div class="span9 pad15">
			<div class="row">	
		<!--date-->
			<div class="span1">	
			<div class="btn  btn-medium btn-rounded btn-blog1">
			23 APR <i class="fa fa-comments fa-2x"></i> <a class="com_no" href="#"> 46</a>
			</div>
		</div>
		<!--post entry-->
		<div class="span8">
		<!-- soundcloud starts -->
			<iframe class="soundcloud" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/28561082"></iframe>
	
			<h1 class="post_link"><a href="blog_post.html">Sociosqu ad litora torquent</a></h1>
			
			<div class="post-meta muted">
			<ul>
				<li>Posted by <a href="#">admin</a> </li>
				<li>in <a href="#">web</a>, <a href="#">music</a> </li>
				<li>tags <a href="#">soundcloud</a>, <a href="#">dj</a> </li>
			</ul>
				</div>
				
			<p>Enim ultrices, elementum phasellus. Mauris sed nulla sed, egestas feugiat a dictum libero, nunc sapien tri tique facilisis venenatis risus, 
			suspendisse ac nec et. Nulla sed mauris, congue duis proin nonummy adipiscing vitae  Mauris sed nulla sed, egestas feugiat a dictum libero, nunc sapien 
			tristique facilisis venenatis risus. Enim ultrices, elementum phasellus. Mauris sed nulla sed, egestas feugiat a dictum libero, nunc sapien tristique.
			Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos 
			<a href="#">[&#8230;]</a></p>
			
			<div class="read_more"><a href="blog_post.html">READ MORE &rarr;</a></div>
			<!--end post-->
			
			<div class="pad25 hidden-desktop"></div>
			<div class="pad25"></div>
		
		<ul class="pager">
			<li class="previous"><a href="#">&larr; Older</a></li>
			<li class="next"><a href="#">Newer &rarr;</a></li>
		</ul>
		</div>
			<!--end pager-->
			</div>
				</div>
					</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--sidebar-->
			<div class="sidebar span3">
		
			<h3>About Us</h3>
			<h5>Morbi blandit ultricies ultrices ivam us nec lectus sed orci voluptua oportere molestie.
			Enim ultrices, elementum phasellus. Mauris sed nulla sed, egestas feugiat a dictum libero, nunc sapien tri tique facilisis venenatis risus, 
			suspendisse ac nec et.</h5>
			
			<h3>Categories</h3>
			<ul class="fa-ul">
				<li><i class="fa-li fa fa-caret-right grey2"></i><a href="#">Design News</a></li>
				<li><i class="fa-li fa fa-caret-right grey2"></i><a  href="#">Typography</a></li>
				<li><i class="fa-li fa fa-caret-right grey2"></i><a  href="#">Premium Themes</a></li>
				<li><i class="fa-li fa fa-caret-right grey2"></i><a  href="#">Photography</a></li>
				<li><i class="fa-li fa fa-caret-right grey2"></i><a  href="#">Graphics</a></li>
			</ul>
			<div class="pad30"></div>
			
			<!--search-->
			<input class="span3" type="text" placeholder="search">
			<div class="pad10"></div>
		
			<h4>Popular Posts</h4>
					<ul class="media-list">
							<li class="media">
								<img class="pull-left img-rounded" src="img/small/pop_post1.jpg" alt="" />
								<div class="media-body">
								<small class="muted">07/05/13</small><br>
								<a href="#">Aliquam convallis erat a enim dictum gravida nulla</a></div>
							</li>
							
							<li class="media">
								<img class="pull-left img-rounded" src="img/small/pop_post2.jpg" alt="" />
								<div class="media-body">
								<small class="muted">29/04/13</small><br>
								<a href="#">Enim ultrices, elementum phasellus. Mauris sed nulla sed, egestas feugia</a></div>
							</li>
							
							<li class="media">
								<img class="pull-left img-rounded" src="img/small/pop_post3.jpg" alt="" />
								<div class="media-body">
								<small class="muted">23/04/15</small><br>
								<a href="#">Mauris sed nulla sed, egestas feugiat a dictum libero</a></div>
							</li>
							</ul>
					
						<div class="pad15"></div>
						<h4>Flickr Feed</h4>
					<div class="flickrs2">
						<div class="FlickrImagesBlog">
							<ul>
							</ul>
							</div>
								</div>
							</div>
						<div class="pad45"></div>
					</div>
				</div>
			</div>
			<!--end-->
			
		<!--footer-->
		<div id="footer2">
		<div class="container">
			<div class="row">
				<div class="span12">
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
				<a href="#"><i class="go-top hidden-phone hidden-tablet fa fa-angle-double-up"></i></a>
				<!--//end--> 
<!-- scripts -->
<script src="js/jquery.js"></script>			
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

<!-- FLICKR -->	
<script type="text/javascript">
//<![CDATA[
/*************************************************************
	FLICKR BLOG  - add your id - find it here - http://idgettr.com/
**************************************************************/
	$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?id=60241562@N08&lang=en-us&format=json&jsoncallback=?", function(data){
		$.each(data.items, function(i,item){
			if(i<=8){ // <— change this number to display more or less images
				$("<img/>").attr("src", item.media.m.replace('_m', '_s')).appendTo(".FlickrImagesBlog ul")
				.wrap("<li><a href='" + item.link + "' target='_blank' title='Flickr'></a></li>");
			}
		});			
    });	
//]]>
</script>
</body>
</html>
