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

<!--       <style type="text/css">
        *{margin:0;padding:0;}
        select{outline:none;}
        ul{list-style:none;}
        a{text-decoration:none;}
        /*select{display: none;}*/
        .select_box{font-family: "宋体"; font-size: 12px;color: #999999;width: 178px;line-height: 20px;margin: 50px auto;}
        .select_showbox{border: 1px solid #b0a296;height: 20px;padding-left: 5px;background: url(/jscss/demoimg/201403/icon.png) no-repeat 156px 0;}
        .select_option{border: 1px solid #b0a296;border-top: none;display: none;}
        .select_option li{padding-left: 5px;}
        .select_option li.selected{background-color: #F3F3F3;color: #999;}
        .select_option li.hover{background: #7b6959; color: #fff;}
        </style> -->



        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>


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
                                <a href="index.php"><img src="assets/img/logo/1.png" alt="" /></a>
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
		<div class="breadcrumb-area pt-240 pb-125" style="background-image:url(assets/img/slider/8.jpg);" data-overlay="5">
		    <div class="container">
		        <div class="breadcrumb-text text-center z-index">
		            <h2>真题回顾</h2>
		        </div>
		    </div>
		</div>
		<!-- breadcrumb end -->
        <!-- volunter start -->
<!-- <?php
 
        $yonghu=$_SESSION['user'];
         
        $content=$_POST["content"];
        $time =  date("Y-m-d H:i:s");      
        $con = mysql_connect("localhost","root","305290744");
        mysql_select_db("project1");
        mysql_query('set names utf8');
        if(@$_POST['ccomment']){
            echo "yes";
            $sql="INSERT INTO comment (`user`, `article_id`, `comm_cont`, `comm_time`) VALUES ('{$yonghu}','1','{$content}','{$time}');";
            echo $sql;
            mysql_query($sql);
            echo "yyyyyyyyyyyy";
            header("location:event.php");
        }
        ?>
            <br></br>
        <?php
            $con = mysql_connect("localhost","root","305290744");
            mysql_select_db("project1");
            mysql_query('set names utf8');
            $sql="select * from comment";
            $arr= mysql_query($sql);
            while($row = mysql_fetch_array($arr)){
            echo $row['comm_id'] . "&nbsp&nbsp&nbsp&nbsp" . $row['user'] . "&nbsp&nbsp&nbsp&nbsp" .$row['comm_time'] . "&nbsp&nbsp&nbsp&nbsp". $row['comm_cont'] . "<br></br>"  ;
            

           }

     ?> -->
<!--         <form action="" method="post">
        <textarea name="content"></textarea>
        <div><input type="submit" name = "ccomment" id ="ccomment" value="评论" /></div>
         
        </form> -->
<br></br><br>
 
 <div class="search"  style="text-align: center">
<form  method="get" accept-charset="utf-8">
   <a style="color: #9D9D9D"> 院校信息：</a>    &nbsp; &nbsp; &nbsp; <select name="pprovince" id="pprovince" onchange="chg(this)" style="width:318px;" >
        <option value="-1">省份</option>
        <!-- <option value="空"  >省份</option>
        <option value="北京">北京</option>
        <option value="上海">上海</option>
        <option value="广东">广东</option>
        <option value="湖北">湖北</option>
        <option value="山西">山西</option>
        <option value="天津">天津</option> -->
    </select>   &nbsp; &nbsp; &nbsp; 

        <select id = "sschool" style="width:318px;"  name="sschool" onchange="chg2(this)">
            <option value="空">学校</option>
       <!--  <option value="北京大学">北京大学</option>
        <option value="清华大学" <?php echo $rs['type']=='中'?'selected':'' ?>>清华大学</option>
        <option value="复旦大学" <?php echo $rs['type']=='下'?'selected':'' ?>>复旦大学</option> -->
        </select>   &nbsp; &nbsp; &nbsp; 

 <select name="ccollege" style="width:318px;" id="ccollege" >
         <option value="空" > 院系</option>
        
        </select>   &nbsp; &nbsp; &nbsp; 

        <!-- <select name="ccollege" style="width:318px;" >
         <option value="空" > 院系</option>
        <option value="光华管理学院" >光华管理学院</option>
        <option value="" >下</option>
        </select>   &nbsp; &nbsp; &nbsp; 
         -->
        <button type="submit" style="display: inline-block;
  border-radius: 4px;
  background-color: #7B7B7B;
  border: none;
  color: white;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 80px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;" id= 'submit1' name= 'submit1' value="提交">搜索</button>
  </form>

  
  </div>
<br><br><br></br>
    
        </div>
        
        <div class="search2 " style="text-align: center">
        <form action="" method="post">
        <a style="color: #9D9D9D"> 公共课：    </a>&nbsp; &nbsp; &nbsp;    <select id = "year" name="year" style=" width:300px;height:50px" ">
         <option value="空">年份</option>
        <option value="2016">2016</option>
        <option value="2015" >2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        </select>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        <select id = "subject" style=" width:300px;height:50px " name="subject">
        <option value="空" >科目</option>
        <option value="政治">政治</option>
        <option value="英语一" >英语一</option>
        <option value="英语二" >英语二</option>
        <option value="数学一" >数学一</option>
        <option value="数学二" >数学二</option>
        <option value="数学三" >数学三</option>
        </select>
        &nbsp; &nbsp; &nbsp; 
        <span style="cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;">   <button type="submit" style="display: inline-block;
  border-radius: 4px;
  background-color: #7B7B7B;
  border: none;
  color: white;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 80px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;" id= 'submit2' name= 'submit2' value="提交">搜索</button>  </span>
        </form>
        </div>
<br></br><br>
        <?php
            const HOST = 'localhost';
            const USER = 'root';
            const PASS = '305290744';
            const DBNAME = 'project1';
            $wherelist = array();
            if(@$_GET['submit1']){
                $name = $_GET['sschool'];
                if(!empty($_GET['sschool'])){
                    $wherelist[] = "school = '{$_GET['sschool']}'";
                }
                if(!empty($_GET['pprof'])){
                    $wherelist[] = "prof = '{$_GET['pprof']}'";
                }
                // if(!empty($_GET['mmajor'])){
                //     $wherelist[] = "major = '{$_GET['mmajor']}'";
                // }
          
                if(count($wherelist)>0){
                    $where=' where '.implode("and ", $wherelist);
                } else{
                    $where="1";
                }
                $con = mysql_connect(HOST,USER,PASS);
                mysql_select_db(DBNAME);
                mysql_query('set names utf8');
                $sql1 = "select href from shiti".$where;
                $result = mysql_query($sql1);
                $site = mysql_fetch_row($result)[0];
                echo "<div style='text-align:center;font-size:25px;'><a href = '{$site}'>请点击此处</a></div>";}
            ?>  




        <?php
            const HOST = 'localhost';
            const USER = 'root';
            const PASS = '305290744';
            const DBNAME = 'project1';
            $wherelist = array();
            if(@$_POST['submit2']){
                $name = $_POST['year'];
                if(!empty($_POST['year'])){
                    $wherelist[] = "year = '{$_POST['year']}'";
                }
                if(!empty($_POST['subject'])){
                    $wherelist[] = "subject = '{$_POST['subject']}'";
                }
                // if(!empty($_GET['mmajor'])){
                //     $wherelist[] = "major = '{$_GET['mmajor']}'";
                // }
          
                if(count($wherelist)>0){
                    $where=' where '.implode("and ", $wherelist);
                } else{
                    $where="1";
                }
                $con = mysql_connect(HOST,USER,PASS);
                mysql_select_db(DBNAME);
                mysql_query('set names utf8');
                $sql1 = "select href from shiti".$where;
                $result = mysql_query($sql1);
                $site = mysql_fetch_row($result)[0];
                echo "<div style='text-align:center;font-size:25px;'><a href = '{$site}'>请点击此处</a></div>";

           }
             

            ?> 

        <div class="volunter-area pt-120 pb-90">
            <div class="container">
                <div class="section-title text-center mb-75">
                    <h2>院校真题</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="event-img-info mb-30">
                            <img style="width:580px;height:380px" src="assets/img/banner/beishi.jpg" alt="">
                            <div class="event-info">
                                <h3><a href="zhenti/2/beishi.php">北京师范大学</a></h3>
                                <div class="event-time-date">
                                    <span><i class="bi bi-calendar"></i>2016</span -->>
                                             <span><i class="bi bi-alarm-clock"></i> 311</span>
                                    <span><i class="bi bi-location-pointer"></i> 汉语国际交流硕士真题</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="event-img-info mb-30">
                            <img style="width:580px;height:380px" src="assets/img/banner/shiyou.jpg" alt="">
                            <div class="event-info">
                                <h3><a href="zhenti/2/shiyou.php">中国石油大学</a></h3>
                                <div class="event-time-date">
                                    <span><i class="bi bi-calendar"></i> 2016</span>
                                         <span><i class="bi bi-alarm-clock"></i> 219</span>
                                    <span><i class="bi bi-location-pointer"></i> 汉硕真题</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="event-img-info mb-30">
                            <img style="width:580px;height:380px" src="assets/img/banner/beiwai.jpg" alt="">
                            <div class="event-info">
                                <h3><a href="zhenti/2/beiwai.php">北京外国语大学</a></h3>
                                <div class="event-time-date">
                                    <span><i class="bi bi-calendar"></i> 2017</span>
                                         <span><i class="bi bi-alarm-clock"></i> 383</span>
                                    <span><i class="bi bi-location-pointer"></i>教育硕士</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div  style="width:580px;height:380px" class="event-img-info mb-30">
                            <img src="assets/img/banner/shangda.jpg" alt="">
                            <div class="event-info">
                                <h3><a href="zhenti/2/shangda.php">上海大学</a></h3>
                                <div class="event-time-date">
                                    <span><i class="bi bi-calendar"></i>2016</span>
                                             <span><i class="bi bi-alarm-clock"></i> 222</span>
                                    <span><i class="bi bi-location-pointer"></i> 现代经济学</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="event-img-info mb-30">
                            <img style="width:580px;height:380px" src="assets/img/banner/fudan.jpg" alt="">
                            <div class="event-info">
                                <h3><a href="zhenti/2/fudan.php">复旦大学</a></h3>
                                <div class="event-time-date">
                                    <span><i class="bi bi-calendar"></i> 2016</span>
                                    <span><i class="bi bi-alarm-clock"></i> 347</span>
                                    <span><i class="bi bi-location-pointer"></i>心理学</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="event-img-info mb-30">
                            <img src="assets/img/banner/zhongshan.jpg" alt="">
                            <div class="event-info">
                                <h3><a href="zhenti/2/zhongda.php">中山大学</a></h3>
                                <div class="event-time-date">
                                    <span><i class="bi bi-calendar"></i> 2017</span>
                                    <span><i class="bi bi-alarm-clock"></i>347</span>
                                    <span><i class="bi bi-location-pointer"></i> 心理学</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="page-pagintion mt-20">
                            <ul>
                                <li class = "active">
                                    <a href="#">01</a>
                                </li>
                                <li >
                                    <a href="#">02</a>
                                </li>
                                <li>
                                    <a href="#">03</a>
                                </li>
                                <li>
                                    <a href="#">04</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- volunter end -->
        <!-- footer area start -->
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
    <script>
        //声明省
        var pprovinces =["北京","上海","广东","湖北","山西","天津"] //直接声明Array
        //声明市
        var cities = [
                ["北京大学","清华大学","中国人民大学","北京师范大学","北京外国语大学","中国石油大学"],
                ["上海大学","复旦大学","上海交通大学"],
                ["中山大学"],
                ["武汉大学"],
                ["山西大学","太原理工大学"],
                ["天津大学","南开大学"],
                                ];
        var ccolleges = [
                [
                ["工商管理","城市规划","软件工程","化学与分子工程","法学","信息工程","环境工程"],
                ["建筑学","土木工程","环境工程","机械工程","航空力学","中国近代史","新闻传播","艺术设计"],
                ["新闻传播"],
                ["社会发展与公共政策"],
                ["高级翻译"],
                ["工商管理"]
                                    ],
                [
                ["机电工程与自动化"],
                ["计算机科学技术"],
                ["临床医学"]
                                ],
                [["法学"]],
                [["俄语"]],
                [["经济学","软件工程","环境工程"],
                ["微电子学","企业管理","信息工程"], ],
                [["计算机科学技术"],
                    ["心理学"],["教育学"]]
                                ]
            //设置一个省的公共下标
        var pIndex = -1;
        var pprovinceEle = document.getElementById("pprovince");
        var sschoolEle = document.getElementById("sschool");
        var ccollegeEle = document.getElementById("ccollege");
        //先设置省的值
        for(var i = 0; i < pprovinces.length; i++) {
            //声明option.<option value="i">pprovinces[i]</option>
            var op = new Option(pprovinces[i], i);

            //添加
            pprovinceEle.options.add(op);
        }

        function chg(obj) {
            if(obj.value == -1) {
                sschoolEle.options.length = 0;
                ccollegeEle.options.length = 0;
                return;
            }
            //获取值
            var val = obj.value;
            pIndex = obj.value;
            //获取ctiry
            var cs = cities[val];
            //获取默认区
            var as = ccolleges[val][0];
            //先清空市
            sschoolEle.options.length = 0;
            ccollegeEle.options.length = 0;
            for(var i = 0; i < cs.length; i++) {
                var op = new Option(cs[i], cs[i]);
                sschoolEle.options.add(op);
            }
            for(var i = 0; i < as.length; i++) {
                var op = new Option(as[i], as[i]);
                ccollegeEle.options.add(op);
            }
        }

        function chg2(obj) {
            var val = obj.selectedIndex;
            var as = ccolleges[pIndex][val];
            ccollegeEle.options.length = 0;
            for(var i = 0; i < as.length; i++) {
                var op = new Option(as[i], as[i]);
                ccollegeEle.options.add(op);
            }
        }
    </script>
</html>