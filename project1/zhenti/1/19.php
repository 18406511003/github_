<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.jpg">
		
		<!-- all css here -->
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/magnific-popup.css">
        <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../assets/css/et-line-icon.css">
        <link rel="stylesheet" href="../../assets/css/bicon.min.css">
        <link rel="stylesheet" href="../../assets/css/slick.css">
        <link rel="stylesheet" href="../../assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="../../assets/css/bundle.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
        <link rel="stylesheet" href="../../assets/css/responsive.css">
        <script src="../../assets/js/vendor/modernizr-2.8.3.min.js"></script>
<?php error_reporting(0); ?> 
<style type="text/css" >
<style type="text/css">
body{
  font-size:75%;
  background:#abc;
}
ol,ul{
  list-style:none;
}
*{
  margin:0;
  padding:0;
}
/*--------------------------------------------------------------------
  Comments Section
  --------------------------------------------------------------------*/
div#comments{
  width:100em;
  clear:both;
  margin:2em;
  background:#EDEDED;
  border:1px solid #ddd;
  padding:1em;
}
  
/*--------------------------------------------------------------------
  Comment Trees Layout
  --------------------------------------------------------------------*/

ul#comment_tree{
  margin:2.5em 0 1.5em 0;
}
ul#comment_tree li{
  margin-bottom:3em;  /*设成和ul.replies的话会比较难识别，亲和力？*/
}
/*--------------------------------------------------------------------
  Member Picture Layout  
  --------------------------------------------------------------------*/
ul#comment_tree div.member{
  width:85px;
  max-width:85px;
  float:left;
  background:#EDEDED;
  display:block;
  padding-right:35px; /*为箭头图片留空*/
  z-index:1000;
}

ul#comment_tree div.member img.user_photo{
  display:block;
}

ul#comment_tree div.member h5.display_name {
      margin-bottom: 0.3em;
  text-align:center;
  color:#333;
      width: 85px;
}
/*--------------------------------------------------------------------
  Comments Box Layout  
  --------------------------------------------------------------------*/
ul#comment_tree div.comment{
  width:1200px; /*或者auto?*/
  background:#fff;
  float:left;
  position:relative;
  padding:1.0em 15px;
  
    border: 1px solid #ddd;
}

ul#comment_tree h6.comment_date{
  position:absolute;
  left:-32px;
  line-height:32px;
  height:32px;
  color:#ccc;
  background:url(image/comment_arrow_bg.png) no-repeat left top;
  padding-left:4em;
  font-size:smaller;
  font-weight:normal;
}

/*--------------------------------------------------------------------
  Comments Content Copy Layout   
  --------------------------------------------------------------------*/
div.comment div.comment_content {
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: 0.9em;
  margin-top: 6em;
  z-index:999;
}
/*--------------------------------------------------------------------
  Reply Comment Layout
  --------------------------------------------------------------------*/
ul#comment_tree  li  ul.replies{
  border-left:1px solid #ddd;
  margin-left:120px;
  padding-top:1em;
} 

ul#comment_tree  li  ul.replies * ul.replies{ /*:KLUDGE: "*"指的是将所有ul.replies下的ul.replies,这种方法替代了子选择器方法，从而可令IE6以下版本也可支持*/
  margin-left:24px;
  border-left:1px solid #ddd;
  padding-top:1em;
}

ul#comment_tree li.reply{
  background:url(image/comment_li_bg.gif) no-repeat left 2.5em; 
  padding-left:24px;
}

ul#comment_tree li.reply div.comment_wrapper{ /*comment外套，下一级是.member和.comment*/
  position:relative;
}

ul#comment_tree li.reply div.member{ /*继承了第一个.member中的z-index，其作用是把用户头像置于comment上方*/
  position:absolute;
  left:1.25em;
  width:45px;
  top:1.25em;
  padding-right:0;
}

ul#comment_tree li.reply div.member img.user_photo{
  width:45px;
  height:45px;
}

ul#comment_tree li.reply div.member h5.display_name{
  position:absolute;
  left:55px;
  top:0;
  margin:9px 0 0;
  text-align:left;
    
}
ul#comment_tree li ul.replies h6.comment_date{
  background:none;
  left:70px;
  top:32px;
  padding-left:0;
}
ul#comment_tree li ul.replies li div.comment{
  width:auto;
  max-width:445px;
  float:none;
  padding-top:4em;
}
/*-------------------------------------------------------------------- 
  Clean Floating Tag
  --------------------------------------------------------------------*/
.clearfix:after{
  content:".";
  clear:both;
  height:0;
  display:block;
  visibility:hidden;
}

.clearfix{
  display:inline-block;
}

* html .clearfix{ height:1%;} 
.clearfix{ display:block;}  
</style>
</style>



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
                                    </ul>
                                </div>
                            </div>
                            <?php 
                        session_start();
                        if(!empty($_SESSION['logined'])){
                            echo '<div class="col-md-6 col-sm-6 hidden-xs">
                            <div class="header-social f-right">
                                <a href = "event-details.php">
                                    <i class="fa" >进入个人中心</i>
                                </a>
                                <a href = "../../logout.php">
                                    <i class="fa" >注销</i>
                                </a>
                                
                            </div>
                        </div>';}
                        else{
                            echo ' <div class="col-md-6 col-sm-6 hidden-xs">
                            <div class="header-social f-right">
                                <a href="../../register.php">
                                    <i class="fa" >注册</i>
                                </a>
                                <a href="../../land.php">
                                    <i class="fa" >登陆</i>
                                </a>
                                
                            </div>
                        </div>';}?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom transparent-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <a href="index.html"><img src="../../assets/img/logo/1.png" alt="" /></a>
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
                                        <li><a href="../../index.php">主页</a></li>
                                        <li><a href="../../about-us.php">院校资讯</a></li>
                                        <li><a href="../../event.php">真题回顾</a></li>
                                        <li><a href="../../xinwen.php">实时热点</a></li>
                                        <li><a href="../../event-details.php">用户信息</a></li>
                                        <li><a href="../../contact.php">网站说明 </a></li>
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
		<div class="breadcrumb-area pt-240 pb-125" style="background-image:url(../../assets/img/slider/8.jpg);" data-overlay="5">
		    <div class="container">
		        <div class="breadcrumb-text text-center z-index">
		            <h2>真题回顾</h2>
		        </div>
		    </div>
		</div>

<div class="become-volunter-area gray-bg ptb-100">
            <div class="container">
                <div class="section-title text-center mb-75">
                    <h1>13年英语一真题</h1> <br><br>
                    <h4>13年英语一真题可以点击下面链接进行下载，如果您感觉网站不错，可以告诉其他人哦</h2>
                    <br><br><a style="font-size: 30px ;" href = '../tttt.rar'>下载链接</a>
                </div>
            </div>
        </div>
      
  
        <!-- breadcrumb end -->
        <!-- volunter start -->



<?php
        define('article_id','11');  
        $yonghu=$_SESSION['user'];
        $id = article_id;
      
        $content=$_POST["content"];
        $time =  date("Y-m-d H:i:s");      
        $con = mysql_connect("localhost","root","305290744");
        mysql_select_db("project1");
        mysql_query('set names utf8');
        if(@$_POST['ccomment']){
            $sql="INSERT INTO comment (`user`, `article_id`, `comm_cont`, `comm_time`) VALUES ('{$yonghu}','{$id}','{$content}','{$time}');";

            mysql_query($sql);
  
        }
        ?>
            <br></br>
        <?php

            $con = mysql_connect("localhost","root","305290744");
            mysql_select_db("project1");
            mysql_query('set names utf8');
            $sql="select * from comment where article_id = ". article_id;

            $arr= mysql_query($sql);
            while($row = mysql_fetch_array($arr)){
            echo '<div id="comments" class="clearfix">
  <ul id="comment_tree" >
      <li>
        <div class="comment_wrapper clearfix"  >
          <div class="member">
      <h5 class="display_name">' . $row['user'] .   '</h5>
      <img src="../../member_2.jpg"  alt="Tiger"/>
    </div>
          <div class="comment">
            <h6 class="comment_date">'. $row['comm_time'] .'</h6>    
            <div class="comment_content">
                <p>'. $row['comm_cont'] . '</p>
            </div>
            </div>
        </div>
     </li>
    </ul> 
</div> ';

            // "<div class='float' ><div class='content'>" .$row['comm_id'] . "&nbsp&nbsp&nbsp&nbsp" . $row['user'] . "&nbsp&nbsp&nbsp&nbsp" .$row['comm_time'] . "&nbsp&nbsp&nbsp&nbsp". $row['comm_cont'] . "</div> </div><br></br>"  ;  
           }

     ?>


 
 <?php 
                        session_start();
                        if(!empty($_SESSION['logined']))//你已经赋值的ID
                            echo '<form action="" method="post">
        <textarea name="content"></textarea>
        <div><input type="submit" name = "ccomment" id ="ccomment" value="评论" /></div>
         
        </form> ';
                        else
                            echo ' <br><br><br><br><br>
                               <div style="text-align:center; position:relative;bottom:50px" > <a href= "../../land.php" style=" font-size:30px" >
                                   您还没登陆，请点击登陆
                                </a> </div> ';?>

            
     <footer  style="position:absolute;width:100%;height:100px ;background: #3C3C3C; text-align: center">
           
                      <br>  <br>  <a style="color : white; font-size: 16px" >  &copy; 2017   &nbsp &nbsp  毕业设计</a>
              
        </footer>
        <!-- footer area end -->
        
        
		<!-- all js here -->
        <script src="../../assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="../../assets/js/bootstrap.min.js"></script>
        <script src="../../assets/js/jquery.magnific-popup.min.js"></script>
        <script src="../../assets/js/isotope.pkgd.min.js"></script>
        <script src="../../assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="../../assets/js/jquery.counterup.min.js"></script>
        <script src="../../assets/js/waypoints.min.js"></script>
        <script src="../../assets/js/ajax-mail.js"></script>
        <script src="../../assets/js/owl.carousel.min.js"></script>
        <script src="../../assets/js/plugins.js"></script>
        <script src="../../assets/js/main.js"></script>
    </body>
</html>