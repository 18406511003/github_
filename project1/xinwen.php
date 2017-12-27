<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/et-line-icon.css">
        <link rel="stylesheet" href="assets/css/bicon.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/bundle.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>


    <body>
		<header class="header-area absolute-bar">
            <div class="header-top">
                <div class="container">
                    <div class="bar-border ptb-15">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="header-info">
                                    <ul>
                                      <li>本·考研网欢迎您！</li>
                                </div>
                            </div>
                            <?php 
                        session_start();
                        if(!empty($_SESSION['logined']))//你已经赋值的ID
                            echo '<div class="col-md-6 col-sm-6 hidden-xs">
                            <div class="header-social f-right">
                                <a href = "event-details.php">
                                    <i class="fa" >进入个人中心</i>
                                </a>
                                <a href = "index.php">
                                    <i class="fa" >注销</i>
                                </a>
                                
                            </div>
                        </div>';
                        else
                            echo ' <div class="col-md-6 col-sm-6 hidden-xs">
                            <div class="header-social f-right">
                                <a href="register.php">
                                    <i class="fa" >注册</i>
                                </a>
                                <a href="land.php">
                                    <i class="fa" >登陆</i>
                                </a>
                                
                            </div>
                        </div>';?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom transparent-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/1.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 hidden-xs">
                            <div class="search-menu f-right">
                                <div class="search-bar-button search-2">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                    <div class="widget_searchform_content">
                                        <form action="#">
                                            <input type="text" placeholder="Search" name="s" value="">
                                            <button class="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="main-menu menu-style-2 f-right">
                                <nav>
                                    <ul>
                                        <li><a href="index.php">主页</a></li>
                                        <li><a href="about-us.php">院校资讯</a></li>
                                        <li><a href="event.php">真题回顾</a></li>
                                        <li><a href="xinwen.php">实时热点</a></li>
                                        <li><a href="event-details.php">用户信息</a></li>
                                        <li><a href="contact.php">网站说明 </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
		</header>
		<!-- header end
		<!-- breadcrumb start -->
		<div class="breadcrumb-area pt-240 pb-125" style="background-image:url(assets/img/slider/beishi.jpg);" data-overlay="5">
		    <div class="container">
		        <div class="breadcrumb-text text-center z-index">
		            <h2>实时热点</h2>
		        </div>
		    </div>
		</div>
		
<br></br><br>
 


<div style="text-align:left;  width:1250px; height:1000px; position:relative; left:200px; top:30px">

    <span style="font-size: 20px; float:left" ><a href="http://www.kaoyan.com/beikao/jingyan/5a167a900e1f7.html"> 2018考研：探究各科阅卷规则</a></span> 
    <span style="font-size: 20px; float:right" >2017-12-03</span> <br><br><br> 
    <span style="font-size: 20px; float:left"> <a href="http://yz.chsi.com.cn/kyzx/kydt/201711/20171130/1643035550.html">2018年硕士研究生考试郑州59041人报名 增幅为12.6%</a></span>
    <span style="font-size: 20px; float:right" >2017-12-03</span><br><br> <br>
    <span style="font-size: 20px; float:left"> <a href="http://yz.chsi.com.cn/kyzx/zcdh/201709/20170901/1627013140.html">2018年全国硕士研究生招生考试公告</a></span>
    <span style="font-size: 20px; float:right" >2017-12-03</span><br><br> <br>
    <span style="font-size: 20px; float:left"> <a href="http://yz.chsi.com.cn/kyzx/zcdh/201710/20171013/1635361533.html">关于做好2018年“退役大学生士兵”专项硕士研究生招生计划招生工作的通知</a></span>
    <span style="font-size: 20px; float:right" >2017-12-03</span><br><br> <br>
    <span style="font-size: 20px; float:left"> <a href="http://yz.chsi.com.cn/kyzx/kydt/201711/20171115/1640705387.html">1.5万就业岗位热待研究生</a></span>
    <span style="font-size: 20px; float:right" >2017-12-03</span><br><br> <br>
    <span style="font-size: 20px; float:left"> <a href="http://yz.chsi.com.cn/kyzx/kydt/201711/20171110/1640290114.html">考研热度不减 有考生揣着工作offer来报名</a></span>
    <span style="font-size: 20px; float:right" >2017-12-03</span><br><br> <br>
    <span style="font-size: 20px; float:left"> <a href="http://yz.chsi.com.cn/kyzx/kydt/201711/20171107/1639205788.html">研究生考试今确认 菏泽首次使用指静脉验证入场</a></span>
    <span style="font-size: 20px; float:right" >2017-12-03</span><br><br> <br>
    <span style="font-size: 20px; float:left"> <a href="http://bbs.kaoyan.com/t8261432p1">公共课参考书推荐</a></span>
    <span style="font-size: 20px; float:right" >2017-12-03</span><br><br> <br>
    <span style="font-size: 20px; float:left"> <a href="http://www.kaoyan.com/jieshao/5a0bcdd41ee4d.html">2018考研：金融专硕就业分析</a></span>
    <span style="font-size: 20px; float:right" >2017-12-03</span><br><br> <br>
    <span style="font-size: 20px; float:left"> <a href="http://yz.kaoyan.com/ruc/jingyan/5a0beaa7deb72.html">人大金融专硕学姐初试经验</a></span>
    <span style="font-size: 20px; float:right" >2017-12-03</span><br><br> <br>
    <span style="font-size: 20px; float:left"> <a href="http://www.kaoyan.com/xianchang/59fff8f9c0c6c.html">2018年太原市招考中心硕士研究生考研现场确认公告</a></span>
    <span style="font-size: 20px; float:right" >2017-12-03</span><br><br> <br>
    <span style="font-size: 20px; float:left"> <a href="http://www.kaoyan.com/baokao/zexiao/5a1e553009d6a.html">211院校的王牌专业大汇总</a></span>
    <span style="font-size: 20px; float:right" >2017-12-03</span><br><br> <br>
    <span style="font-size: 20px; float:left"> <a href="http://www.kaoyan.com/beikao/xinli/5a00271ea9a0b.html">考研冲刺九大心理弱点</a></span>
    <span style="font-size: 20px; float:right" >2017-12-03</span><br><br> <br>
    <span style="font-size: 20px; float:left"> <a href="http://www.kaoyan.com/zhengzhi/jingyan/5a002af10f5ac.html">考研政治冲刺：盘点100个时政热点名词</a></span>
    <span style="font-size: 20px; float:right" >2017-12-03</span><br><br> <br>
</div>
        <footer  style="position:absolute;width:100%;height:100px ;background: #3C3C3C; text-align: center">
           
                      <br>  <br>  <a style="color : white; font-size: 16px" >  &copy; 2017   &nbsp &nbsp  毕业设计</a>
              
        </footer>
        <!-- footer area end -->
        
        
		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>