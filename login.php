<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>注册与登录</title>
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
    <style>
        input::-webkit-input-placeholder {
            color: #dcd6d0 !important;
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
    <div class="container">
        <div >
            <h1> Begin</h1>
            <h1 class="title">Sign in and register</h1>
            <h1 class="intro">如果您有账号，您可以直接 <span class="hue" style="cursor: pointer" id="sign">Sign in</span> <span>或者</span> 您没有账号，您可以选择 <span class="hue" style="cursor: pointer"  id="qie">register</span> </h1>
        </div>
    </div>
</div>




<div class="container wrapper" id="login">
    <div class="inner_content">
        <div class="pad10"></div>
        <div class="span8 offset3">
            <div class="contact_form">
                <form method="post" action="login_check.php" >
                    <p class="form_info">name <span class="required">*</span></p>
                    <input class="span5" type="text" id="uname"  <?php  if(!empty($_SESSION['name'])){echo "disabled" ;} ?> name="name" placeholder="您的用户名"/>
                    <p class="form_info">password <span class="required">*</span></p>
                    <input class="span5" type="text" <?php  if(!empty($_SESSION['name'])){echo "disabled" ;} ?>  name="password" placeholder="您的密码" />
                    <p class="form_info">code<span class="required">*</span></p>
                    <input class="span5" type="text" <?php  if(!empty($_SESSION['name'])){echo "disabled" ;} ?>  name="code" placeholder="请填入右方验证码"  />  <canvas width="80px" height="30px"  id="canvas-vcode"></canvas><br>
                    <input type="submit" class="btn btn-primary btn-form marg-right5" <?php  if(!empty($_SESSION['name'])){echo "disabled";} ?>  value="<?php if(!empty($_SESSION['name'])){echo '你已登录';}else{ echo '登录';}  ?>" />
                    <input type="reset"  class="btn  btn-primary btn-form" value="重置" />
                    <div class="clear pad45 hidden-desktop"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container wrapper" id="register">
    <div >
        <div class="pad8"></div>
        <div class="span8 offset3 ">
            <div class="contact_form">
                <form method="post" action="register_check.php">
                    <p class="form_info">name <span class="required">*</span></p>
                    <input class="span5" type="text" id="name" name="name"  />
                    <p class="form_info">password <span class="required">*</span></p>
                    <input class="span5" type="text" id="pwd" name="password"/>
                    <p class="form_info">Confirm the password <span class="required">*</span></p>
                    <input class="span5" type="text" id="repwd" name="password1"  />
                    <p class="form_info">position<span class="required">*</span></p>
                    <select class="span5" name="position">
                        <option value="社团">社团</option>
                        <option value="学生会">学生会</option>
                        <option value="教师">教师</option>
                        <option value="其它">其它</option>
                    </select>
                    <p class="form_info">sex<span class="required">*</span></p>
                    <select class="span5" name="sex">
                        <option value="男">男</option>
                        <option value="女">女</option>
                    </select>
                    <p class="form_info">tel <span class="required">*</span></p>
                    <input class="span5" type="text" id="tel" name="tel"  />
                    <p class="form_info">code<span class="required">*</span></p>
                    <input class="span5" type="text" id="code" name="code" placeholder="请填入右方验证码"  /><canvas width="80px" height="30px"  id="canvas-vcode1"></canvas><br>

                    <input type="submit" id="registerBtn" class="btn  btn-primary btn-form marg-right5" value="注册" />
                    <input type="reset"  class="btn  btn-primary btn-form" value="重置" />
                    <div class="clear pad45 hidden-desktop"></div>
                </form>
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
                <div class="copyright">
                    FLATI
                    &copy;
                    <script type="text/javascript">
                        //<![CDATA[
                        var d = new Date()
                        document.write(d.getFullYear())
                        //]]>
                    </script>
                    - All Rights Reserved
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

<script>

    $(function () {
        $("#login").css("display","block");
        $("#register").css("display","none");
        $("#qie").click(function () {
            $("#login").css("display","none");
            $("#register").css("display","block");
        });
        $("#sign").click(function () {
            $("#login").css("display","block");
            $("#register").css("display","none");
        })
    });


    $("#canvas-vcode").click(function () {  //点击向后台执行一次请求，并返回值
        $.ajax({
            type: "GET",
            url: "code.php",
            success: function (msg) {
                var obj = JSON.parse(msg);
                drawCode(obj);
            }
        });
    });

    function drawCode(code) {
        var c = document.getElementById("canvas-vcode");
        var ctx = c.getContext("2d");
        ctx.clearRect(0, 0, c.width, c.height);//每次产生验证码时先清除画布的内容
        ctx.font = "20px 微软雅黑";
        ctx.fillStyle = "red";
        ctx.textAlign = "center";
        ctx.textBaseline = "middle";
     /*   ctx.strokeRect(0, 0, 80, 30);*/
        ctx.fillText(code, 40, 15);

        for (var i = 0; i < 20; i++) {
            var x = Math.ceil(Math.random() * 80);
            var y = Math.ceil(Math.random() * 30);
            var z = Math.ceil(Math.random() * 3);
            var r = Math.ceil(Math.random() * 255);
            var g = Math.ceil(Math.random() * 255);
            var b = Math.ceil(Math.random() * 255);
            ctx.fillStyle = "rgb(" + r + "," + g + "," + b + ")";
            ctx.beginPath();
            ctx.arc(x, y, z, 0, Math.PI * 2, false);
            ctx.closePath();
            ctx.fill();

        }
        for (var j = 0; j < 4; j++) {
            var a = Math.ceil(Math.random() * 80);
            var b = Math.ceil(Math.random() * 30);
            var m = Math.ceil(Math.random() * 80);
            var n = Math.ceil(Math.random() * 30);
            ctx.moveTo(a, b);
            ctx.lineTo(m, n);
            ctx.lineWidth = 2;
            ctx.stroke();
            var r = Math.ceil(Math.random() * 255);
            var g = Math.ceil(Math.random() * 255);
            var b = Math.ceil(Math.random() * 255);
            ctx.strokeStyle = "rgb(" + r + "," + g + "," + b + ")";
        }

    }
    $("#canvas-vcode").trigger("click");//手动触发一次change事件


    $("#canvas-vcode1").click(function() {  //点击向后台执行一次请求，并返回值
        $.ajax({
            type:"GET",
            url:"code1.php",
            success:function (msg) {
                var obj= JSON.parse(msg);
                drawCode1(obj);
            }
        });
    });

    function drawCode1(code) {
        var c=document.getElementById("canvas-vcode1");
        var ctx=c.getContext("2d");
        ctx.clearRect(0, 0, c.width, c.height);//每次产生验证码时先清除画布的内容
        ctx.font="20px 微软雅黑";
        ctx.fillStyle="red";
        ctx.textAlign="center";
        ctx.textBaseline="middle";
   /*     ctx.strokeRect(0,0,80,30);*/
        ctx.fillText(code ,40,15);

        for(var i=0;i<20;i++){
            var x=Math.ceil(Math.random()*80);
            var y=Math.ceil(Math.random()*30);
            var z=Math.ceil(Math.random()*3);
            var r=Math.ceil(Math.random()*255);
            var g=Math.ceil(Math.random()*255);
            var b=Math.ceil(Math.random()*255);
            ctx.fillStyle="rgb("+r+","+g+","+b+")";
            ctx.beginPath();
            ctx.arc(x,y,z,0,Math.PI*2,false);
            ctx.closePath();
            ctx.fill();

        }
        for(var j=0;j<4;j++){
            var a=Math.ceil(Math.random()*80);
            var b=Math.ceil(Math.random()*30);
            var m=Math.ceil(Math.random()*80);
            var n=Math.ceil(Math.random()*30);
            ctx.moveTo(a,b);
            ctx.lineTo(m,n);
            ctx.lineWidth=2;
            ctx.stroke();
            var r=Math.ceil(Math.random()*255);
            var g=Math.ceil(Math.random()*255);
            var b=Math.ceil(Math.random()*255);
            ctx.strokeStyle="rgb("+r+","+g+","+b+")";
        }
    }
    $("#canvas-vcode1").trigger("click");//手动触发一次change事件

    $("#name").blur(function() { //注册相同用户名验证
        var name = $("#name").val();
        $.ajax({
            type:"POST",
            url:"ajax.php",
            data: {"name": name},
            dataType: "json",
            success:function (msg) {
                alert(msg);

            }
        });
    });


/*    $("#uname").blur(function() { //是否登录判断
        $.ajax({
            type:"POST",
            url:"ajax1.php",
            dataType: "json",
            success:function (msg) {
                alert(msg);

            }
        });
    });*/
</script>
<script type="text/javascript" src="zhuce.js"></script>


</body>
</html>
