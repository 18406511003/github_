<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录界面</title>

<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="assets/style.css" />

<script src="assets/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('#login').click(function() {
		var name_state = $('#name');
		var psd_state = $('#psd');
		var name = $('#name').val();
		var psd = $('#psd').val();
		if (name == '') {
			name_state.parent().next().next().css("display", "block");
			return false;
		} else if (psd == '') {
			name_state.parent().next().next().css("display", "none");
			psd_state.parent().next().next().css("display", "block");
			return false;
		} else {
			name_state.parent().next().next().css("display", "none");
			psd_state.parent().next().next().css("display", "none");
			$('.login').submit();
		}
	});
	$('#register').click(function() {
		var name_r_state = $('#name_r');
		var psd_r_state = $('#psd_r');
		var affirm_psd_state = $('#affirm_psd');
		var name_r = $('#name_r').val();
		var psd_r = $('#psd_r').val();
		var affirm_psd = $('#affirm_psd').val();
		if (name_r == '') {
			name_r_state.parent().next().next().css("display", "block");
			return false;
		} else if (psd_r == '') {
			psd_r_state.parent().next().next().css("display", "block");
			return false;
		} else if (affirm_psd == '') {
			affirm_psd_state.parent().next().next().css("display", "block");
			return false;
		} else if (psd_r != affirm_psd) {
			return false;
		} else {
			$('.register').submit();
		}
	})
})

function ok_or_errorBylogin(l) {
	var content = $(l).val();
	if (content != "") {
		$(l).parent().next().next().css("display", "none");
	}
}

function ok_or_errorByRegister(r) {
	var affirm_psd = $("#affirm_psd");
	var psd_r = $("#psd_r");
	var affirm_psd_v = $("#affirm_psd").val();
	var psd_r_v = $("#psd_r").val();
	var content = $(r).val();
	if (content == "") {
		$(r).parent().next().next().css("display", "block");
		return false;
	} else {
		$(r).parent().next().css("display", "block");
		$(r).parent().next().next().css("display", "none");
		if (psd_r_v == "") {
			$(psd_r).parent().next().css("display", "none");
			$(psd_r).parent().next().next().css("display", "none");
			$(psd_r).parent().next().next().css("display", "block");
			return false;
		}
		if (affirm_psd_v == "") {
			$(affirm_psd_v).parent().next().css("display", "none");
			$(affirm_psd_v).parent().next().next().css("display", "none");
			$(affirm_psd_v).parent().next().next().css("display", "block");
			return false;
		}
		if (psd_r_v == affirm_psd_v) {
			$(affirm_psd).parent().next().css("display", "none");
			$(affirm_psd).parent().next().next().css("display", "none");
			$(psd_r).parent().next().css("display", "none");
			$(psd_r).parent().next().next().css("display", "none");
			$(affirm_psd).parent().next().css("display", "block");
			$(psd_r).parent().next().css("display", "block");
		} else {
			$(affirm_psd).parent().next().css("display", "none");
			$(affirm_psd).parent().next().next().css("display", "none");
			$(psd_r).parent().next().css("display", "none");
			$(psd_r).parent().next().next().css("display", "none");
			$(psd_r).parent().next().css("display", "block");
			$(affirm_psd).parent().next().next().css("display", "block");
			return false;
		}
	}
}

function barter_btn(bb) {
	$(bb).parent().parent().fadeOut(1000);
	$(bb).parent().parent().siblings().fadeIn(2000);
}
</script>
</head>

<body class="login_body">

<div class="login_ddiv">
	<div class="col-xs-12 login_title">登录</div>
	<form action="" class="login" method="post">

			<div class="nav login_nav">
				<div class="col-xs-4 login_username">
					用户名:
				</div>
				<div class="col-xs-6 login_usernameInput">
					<input type="text" name="name" id="name" value="" placeholder="&nbsp;&nbsp;用户名/手机号"  onblur="javascript:ok_or_errorBylogin(this)" />
				</div>
				
			</div>
			<div class="nav login_psdNav">
				<div class="col-xs-4">
					密&nbsp;&nbsp;&nbsp;码:
				</div>
				<div class="col-xs-6">
					<input type="password" name="psd1" id="psd1" value="" placeholder="&nbsp;&nbsp;密码" onBlur="javascript:ok_or_errorBylogin(this)" />
				</div>
				<div class="col-xs-1 ok_gou">
					√
				</div>
				<div class="col-xs-1 error_cuo">
					×
				</div>
			</div>
			<div class="col-xs-12 login_btn_div">
				<button  class="sub_btn" value="登录" id="lland" name ='lland' >登陆</button>
			</div>
	
	</form>

<?php
session_start();
$con = mysql_connect("localhost","root","305290744");
mysql_select_db("project1");
mysql_query('set names utf8');

if(@$_POST['lland']){
    echo "666";
    $user = @$_POST[name];
    $password1 = @$_POST[psd1];
    
 	$sql="select pwd from users where name = '$user'";
    $result = mysql_query($sql);
    $right_pwd = mysql_fetch_row($result)[0];
    $sql2="select id from users where name = '$user'";
    $result2 = mysql_query($sql2);
    $right_id = mysql_fetch_row($result2)[0];
    if($password1 == $right_pwd){
    	echo "<script language='javascript'> alert('登陆成功'); </script>";
    	$_SESSION['logined']=1;   //判断否已经登录依据
    	$_SESSION['user']=$user;

    	echo "<script language='javascript'> location.href='index.php'; </script>";
    }elseif($password1 == $right_pwd){
    	 echo "<script language='javascript'> alert('输入有误，请重新输入！'); </script>";  
    }elseif(isset($right_pwd)){
    	 echo "<script language='javascript'> alert('输入有误，请重新输入！'); </script>";  
    }
//     if($password1==$password2){
//              $sql="insert into users(name,pwd,email,question,anwser,school) value('$user1','$password1','$email','$questions','$anwser','$school')";
//              mysql_query($sql);
// 	     echo "<script language='javascript'>".  
// "location.href='index.php?user=".$user1."';alert('注册成功');</script>";  
//     }elseif($password1!=$password2) {  
//         echo "<script language='javascript'> alert('输入有误，注册失败！'); </script>";  
//     }  
}  

?>  

</div>



</body>
</html>