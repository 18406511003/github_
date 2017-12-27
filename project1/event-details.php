<!doctype html>
<html class="no-js" lang="en">
    <head>
 
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg">
        
        <!-- all css here -->
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <meta charset="UTF-8">
    
  

        <link type="text/css" rel="stylesheet" href="assets/css/login.css">
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>

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
        <script src="assets/js/jquery.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header start -->
       
        <header class="header-area absolute-bar">
                 <div class="header-top">
                <div class="container">
                    <div class="bar-border ptb-15">
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
        <!-- header end -->
        <!-- breadcrumb start -->
 


        <div class="breadcrumb-area pt-240 pb-125" style="background-image:url(assets/img/slider/9.jpg);" data-overlay="5">
            <div class="container">
                <div class="breadcrumb-text text-center z-index">
                    <h2>用户信息</h2>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->
        <!-- event area start -->
        <div class="event-all-area ptb-100">

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="demo form-bg">
    
   <?php 
                        session_start();
                        if(!empty($_SESSION['logined'])){//你已经赋值的ID
                            
                            $con = mysql_connect("localhost","root","305290744");
                            mysql_select_db("project1");
                            mysql_query('set names utf8');
                            $yonghu=$_SESSION['user'];
                            $sql = "select * from users where name = '{$yonghu}';";

                            $result = mysql_query($sql);
                            while($row = mysql_fetch_array($result)){
            // $teacher_name = $rresult['teacher'];
            // $teacher_email = $rresult['email'];
             //排版代码
            echo "<br><br>
                               <div style='font-size:26px'>
                             您的用户名是：     <a style='color:#AE8F00'>" .  $yonghu .  " </a><br><br>
                             您的邮箱是：     <a style='color:#AE8F00'>  " .  $row['email']  . " </a><br><br>
                             您的提示问题是：     <a style='color:#AE8F00'> " . $row['question']  . " </a><br><br>
                             您的问题答案是：     <a style='color:#AE8F00'> " . $row['anwser'] .  "</a><br><br>
                             您所在院校是：     <a style='color:#AE8F00'> " . $row['school']  . " </a><br><br>
                                </div>";
           }
            }
                            
                        else{
                    echo ' <br><br><br><br><br><br><br><br><br><br><br>
                                <a href= "land.php" style=" font-size:40px" >
                                   您还没登陆，请点击登陆
                                </a>  ';}
 ?>     
</div>
</div>
                    



                    <div class="col-md-4">
                        <div >
                          
                                <a href="register.php"><img src="assets/img/slider/10.jpg" height="200" width="350"></a>
                        
                         
                            <div class="eventpage-info">
                                <div class="single-event-info">
                                    <h4>用户信息中心</h4>
                                    <p>点击上图可以前往注册界面</p>
                                </div>
                                <div class="single-event-info">
                                    <h4>完善信息</h4>
                                    <ul>
                                        <li><span>完整的用户信息可以使我们做出更好的推荐</span> </li>
                        
                                        <li><span>如果您有改进方案，请联系我们 </span></li>
                            
                                    </ul>
                                </div>
                                <div class="single-event-info">
                                    <h4>联系方式</h4>
                                    <ul>
                                        <li><span>Email : 10000@qq.com</span>  </li>
                                        <li><span>Phone : +8618888888888</span> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <!-- grow area end -->
        <!-- footer area start -->
              <footer  style="position:absolute;width:100%;height:100px ;background: #3C3C3C; text-align: center">
           
                      <br>  <br>  <a style="color : white; font-size: 16px" >  &copy; 2017   &nbsp &nbsp  毕业设计</a>
              
        </footer>
        <!-- footer area end -->
        
        
        <!-- all js here -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>

     <!--    <script src="assets/js/ajax-mail.js"></script> -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
     
        <!-- google map api -->
        <!---<script src="http://maps.googleapis.com/maps/api/js"></script>
         <script>
            var myCenter=new google.maps.LatLng(23.763523, 90.431098);
            function initialize()
            {
                var mapProp = {
                  center:myCenter,
                  scrollwheel: false,
                  zoom:17,
                  mapTypeId:google.maps.MapTypeId.ROADMAP
                  };
                var map=new google.maps.Map(document.getElementById("hastech"),mapProp);
                var marker=new google.maps.Marker({
                  position:myCenter,
                    animation:google.maps.Animation.BOUNCE,
                  icon:'assets/img/map-marker.png',
                    map: map,
                  });

                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <script src="assets/js/main.js"></script>--->
    </body>
</html>

