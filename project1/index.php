<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg">
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/animate.css">
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
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header start -->
		<header class="header-area">
            <div class="header-top black-light-bg ptb-15">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="header-info">
                                <ul>
                                    <li>本·考研网欢迎您！</li>
                          
                                    
                                </ul>
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
                                <a href = "logout.php">
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
                        </div>';//未登陆的处理
                        ?>                      
           
                    </div>
                </div>
            </div>
            <div class="header-bottom" >
                <div class="container">
                    <div class="row">
                       
                        <div class="col-md-9 col-sm-9 hidden-xs">
                            <div class="search-menu f-right" >
                                <div class="search-bar-button"  style="left:600px">
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
                            <!-- <div class="main-menu f-right"> -->
                            <div class="main-menu aaaaa" style="text-align: center; position:absolute;left:180px; width:900px" >
                                <nav>
                                    <ul>
                                        <li><a href="index.php" style="font-size:22px">主页</a></li>
                                        <li><a href="about-us.php" style="font-size:22px">院校资讯</a></li>
                                        <li><a href="event.php" style="font-size:22px">真题回顾</a></li>
                                         <li><a href="xinwen.php" style="font-size:22px">实时热点</a></li>
                                        <li><a href="event-details.php" style="font-size:22px">用户信息</a></li>
                                        <li><a href="contact.php" style="font-size:22px"> 网站说明 </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
		</header>
		<!-- header end -->
		<!-- slider-area start -->
		<div class="slider-area">
            <div class="slider-active owl-carousel">
                <div class="single-slider pb-340 pt-240 bg-img" style="background-image:url(assets/img/slider/2.jpg);" data-overlay="5">
                    <div class="container">
                        <div class="slider-text text-center z-index">
                            <br><br><br><br><h1 class="animated">Try  &nbsp  Your &nbsp   <span>Best!</span></h1></br><br>
                            <h2 >你将会 <span>成功</span> </h2>
                           <!--  <p class="animated">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            --> <a class="button theme-bg animated" href="about-us.php">院校资讯</a>
                        </div>
                    </div>
                </div>
                <div class="single-slider pb-340 pt-240 bg-img" style="background-image:url(assets/img/slider/slide1.jpg);" data-overlay="5">
                    <div class="container">
                        <div class="slider-text text-center z-index">
                            <br><br><br><br><h1 class="animated">寻求最有用的实时新闻 </h1> </br><br>
                          <h2 > 2018考研：探究各科阅卷规则</h2>
                            <a class="button theme-bg animated" href="xinwen.php">实时热点</a>
                        </div>
                    </div>
                </div>
                <div class="single-slider pb-340 pt-240 bg-img" style="background-image:url(assets/img/slider/slide2.jpg);" data-overlay="5">
                    <div class="container">
                        <div class="slider-text text-center z-index">
                            <     <br><br><br><br><h1 class="animated">找到你的心目院校 </h1> </br><br>
                          <h2 > 下载各科历年真题</h2>
                            <a class="button theme-bg animated" href="event.php">真题回顾</a>
                        </div>
                    </div>
                </div>                   
            </div>
		</div>
        <!-- slider end -->
        <!-- services start -->
        <div class="services-area">
            <div class="container">
                <div class="all-single-service white-bg pt-120 pb-90">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center mb-75">
                                <h2>网站包括</h2>
                                <div class="icon-img">
                                    <img src="assets/img/icon-img/1.png" alt="">
                                </div>
                                <p>There are many variations information of postgraduate entrance examination available,</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 text-center mb-22">
                            <div class="single-service">
                                <i class="icon-happy"></i>
                                <h3>考研热点 </h3>
                                <p>There are many variations of passages of hot points available,</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center mb-22">
                            <div class="single-service">
                                <i class="icon-profile-male"></i>
                                <h3>院校选取</h3>
                                <p>There are many variations of passages of school information available,</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center mb-22">
                            <div class="single-service">
                                <i class="icon-globe"></i>
                                <h3>真题下载</h3>
                                <p>There are many variations of passages of exam questions available,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="funfact-area pt-120 pb-90" style="background-image:url(assets/img/bg/1.jpg)" data-overlay="5.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="project-count text-center mb-22">
                            <h2 class="counter">20</h2>
                            <span>热点新闻</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="project-count text-center mb-22">
                            <h2 class="counter">158</h2>
                            <span>院校信息</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="project-count text-center mb-22">
                            <h2 class="counter">120</h2>
                            <span>真题资源</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="project-count text-center mb-22">
                            <h2 class="counter">1350</h2>
                            <span>活跃人数</span>
                        </div>
                    </div>
                </div>
            </div>
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

