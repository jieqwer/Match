<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
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
<div id="banner">
    <div class="container intro_wrapper">
        <div class="inner_content">
            <h1>给我们</h1>
            <h1 class="title">好的建议</h1>

            <h1 class="intro">在比赛中，如果我们有什么做的 <span>不足的,</span> 欢迎您向我们提出, <span></span>
                我们将<span class="hue">深感荣幸</span> </h1>
        </div>
    </div>
</div>

<div class="pad10"></div>

<div class="container wrapper">
    <div class="inner_content">
        <div class="pad10"></div>
        <div class="row">
            <div class="span2">

            </div>

            <div class="span8 ">
                <div class="contact_form">
                    <div id="note"></div>
                    <div id="fields">
                        <form id="ajax-contact-form">
                            <p class="form_info">name <span class="required">*</span></p>
                            <input class="span8" type="text" name="name" value="" />
                            <p class="form_info">email <span class="required">*</span></p>
                            <input class="span8" type="text" name="email" value=""  />
                            <p class="form_info">subject</p>
                            <input class="span8" type="text" name="subject" value="" /><br>
                            <p class="form_info">message</p>
                            <textarea name="message" id="message" class="span8" ></textarea>
                            <div class="clear"></div>

                            <input type="submit" class="btn  btn-primary btn-form marg-right5" value="submit" />
                            <input type="reset"  class="btn  btn-primary btn-form" value="reset" />
                            <div class="clear pad45 hidden-desktop"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//page-->

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

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript">
    //<![CDATA[
    $(document).ready(function(){
        $("#ajax-contact-form").submit(function() {
            var str = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "contact_form/contact_process.php",
                data: str,
                success: function(msg) {
                    // Message Sent - Show the 'Thank You' message and hide the form
                    if(msg == 'OK') {
                        result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
                        $("#fields").hide();
                    } else {
                        result = msg;
                    }
                    $('#note').html(result);
                }
            });
            return false;
        });
    });
    //]]>
</script>

<script type="text/javascript" src="js/gmap3.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>

<!--//GOOGLE MAP - ADD YOUR ADDRESS HERE -->
<script type="text/javascript">
    //<![CDATA[
    $(window).load(function() {
        $(".google-maps").gmap3({
            marker:{
                address:"23, Mornington Crescent, London",options:{icon: "img/marker.png"}},
            map:{
                options:{
                    zoom: 14,
                    scrollwheel: false,
                    mapTypeControl: false,
                    streetViewControl: false,
                    scalControl: false,
                    draggable: false}
            }
        });
    });
    //]]>
</script>
</body>
</html>
