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
<div id='banner'>
    <div class='container intro_wrapper'>
        <div class='inner_content'>
            <h1>点击</h1>
            <h1 class='title'>确认报名</h1>
            <h1 class='intro'>在这里你可以看到 <span>已报名</span> 同学的人数 ，并且选择确认报名，你就可以和他们一起<span  class='hue'> 参加</span> 比赛</h1>
        </div>
    </div>
</div>

<div class='container wrapper'>
    <div class='inner_content'>
        <div class='pad30'></div>
        <div class='row'>
            <?php
            include_once('opensql.php');
            if(empty($_GET['id'])){
                $id=1;
            }else{
                $id=$_GET['id'];
            }
            $sql1="select count(m_id) from tb_match";//准备sql语句
            $xian1=$mysqldb->select($sql1);
            $row1=mysql_fetch_row($xian1);
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


                $sql2="select count(u_id) from tb_bao where m_id=$shang" ;//准备sql语句
                $xian2=$mysqldb->select($sql2);
                $row2=mysql_fetch_row($xian2);
                $sql="select * from tb_match where m_id=$shang";//准备sql语句
                $xian=$mysqldb->select($sql);
                while ( $row=mysql_fetch_row($xian)) {

            echo "<div class='span4 pricing-table tile' >
                <ul style='background:rgba(50,58,69,0.3);height:528px;position: absolute;width:342px;border-radius: 5px;'> <li style='line-height: 528px'><a href='pricing_table.php?id=$shang'><i style='line-height:40px;' class='fa fa-chevron-left  cont-large intro-icon-disc fa-4x' ></i></a></li></ul>
                <ul style='z-index: 10'>
                    <li class='pricing-header-row-1' style='height: auto'>
                        <h4><span>$row[1]</span></h4>
                        <small><a href='about.php?id=$row[39]' style='color: #5f6869'>返回比赛详情</a></small>
                    </li>
                    <li class='pricing-header-row-2'>
                        <h3 class='price'>免费报名</h3>
                        <small> 设置奖项</small>
                    </li>
                    <li class='pricing-content-row-odd'>
                        <span class='hue'>$row2[0] </span>人 已报名
                    </li>
                    <li class='pricing-content-row-even' style='color: orangered'>
                        参赛地点：$row[6]
                    </li>
                    <li class='pricing-content-row-odd' style='color: orangered'>
                         报名结束时间：$row[4]
                    </li>
                    <li class='pricing-content-row-even'>
                         主办方：$row[9]
                    </li>
                    <li class='pricing-content-row-odd'>
                         承办方：$row[11]
                    </li>
                    <li class='pricing-footer'>
                        <a class='btn btn-small btn-primary btn-rounded but-price' href='#'>
                            <h5> <span>确认报名</span> </h5></a>
                    </li>
                </ul>
            </div>";
                }

            $sql4="select count(u_id) from tb_bao where m_id=$id" ;//准备sql语句
            $xian4=$mysqldb->select($sql4);
            $row4=mysql_fetch_row($xian4);
            $sql3="select * from tb_match where m_id=$id";//准备sql语句
            $xian3=$mysqldb->select($sql3);
            while ( $row3=mysql_fetch_row($xian3)) {
                    echo "<div class='span4 pricing-table tile tile-hot'>
                <ul>
                    <li class='pricing-header-row-1' style='height: auto'>
                        <h4><span>$row3[1]</span></h4>
                        <small><a href='about.php?id=$row3[39]' style='color: #5f6869'>返回比赛详情</a></small>
                    </li>
                    <li class='pricing-header-row-2'>
                        <h3 class='price'>免费报名</h3>
                        <small> 设置奖项</small>
                    </li>
                    <li class='pricing-content-row-odd'>
                        <span class='hue'>$row4[0]</span>人 已报名
                    </li>
                    <li class='pricing-content-row-even' style='color: orangered'>
                        参赛地点：$row3[6]
                    </li>
                    <li class='pricing-content-row-odd' style='color: orangered'>
                       报名结束时间：$row3[4]
                    </li>
                    <li class='pricing-content-row-even'>
                        主办方：$row3[9]
                    </li>
                    <li class='pricing-content-row-odd'>
                        承办方：$row3[11]
                    </li>
                    <li class='pricing-footer'>           
                        <a class='btn btn-small btn-primary btn-rounded but-price' href='#'>
                            <h5> <span>确认报名</span> </h5></a>                  
                    </li>
                </ul>
            </div>";
                }
            $sql6="select count(u_id) from tb_bao where m_id=$next" ;//准备sql语句
            $xian6=$mysqldb->select($sql6);
            $row6=mysql_fetch_row($xian6);
            $sql5="select * from tb_match where m_id=$next";//准备sql语句
            $xian5=$mysqldb->select($sql5);
            while ( $row5=mysql_fetch_row($xian5)) {
                echo "<div class='span4 pricing-table tile'>
                    <ul style='background:rgba(50,58,69,0.3);height:528px;position: absolute;width:342px;border-radius: 5px;'><li style='line-height: 528px'><a href='pricing_table.php?id=$next'><i style='line-height: 40px;' class='fa fa-chevron-right  cont-large intro-icon-disc fa-4x' ></i></a></li></ul>
                <ul>
                    <li class='pricing-header-row-1' style='height: auto'>
                        <h4><span>$row5[1]</span></h4>
                        <small><a href='about.php?id=$row5[39]' style='color: #5f6869'>返回比赛详情</a></small>
                    </li>
                    <li class='pricing-header-row-2'>
                        <h3 class='price'>免费报名</h3>
                        <small> 设置奖项</small>
                    </li>
                    <li class='pricing-content-row-odd'>
                        <span class='hue'>$row6[0]</span>人 已报名
                    </li>
                    <li class='pricing-content-row-even' style='color: orangered'>
                        参赛地点：$row5[6]
                    </li>
                    <li class='pricing-content-row-odd' style='color: orangered'>
                        报名结束时间：$row5[4]
                    </li>
                    <li class='pricing-content-row-even'>
                        主办方：$row5[9]
                    </li>
                    <li class='pricing-content-row-odd'>
                        承办方：$row5[11]
                    </li>
                    <li class='pricing-footer'>
                        <a class='btn btn-small btn-primary btn-rounded but-price' href='#'>
                            <h5> <span>确认报名</span> </h5></a>
                    </li>
                </ul>
            </div>";
            }






            ?>




        </div>
        <div class='pad25'></div>
    </div>
</div>
<!--//page-->

<!--footer-->
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