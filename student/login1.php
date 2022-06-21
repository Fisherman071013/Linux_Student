<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
<link rel="stylesheet" href="login.css">
 <style type="text/css">
* {
    padding: 0;
    margin: 0 auto;
    font-family: MicrsoftYaHei;
}
#wrap {
	height: 719px;
	width: 100;
	background-repeat: no-repeat;
	background-position: center center;
	position: relative;
}
#head {
	height: 120px;
	width: 100;
/*	background-color: red;*/
	text-align: center;
	position: relative;
}
#foot {
	width: 100;
	height: 126px;
	margin-top:500px;
	position: relative;
	opacity: 0.7;
}
#wrap .logGet {
	height: 408px;
	width: 368px;  
	position: absolute;
	background-color: #FFFFFF;
	top: 20%;
	right: 15%;
}
.logC a button {
	width: 100%;
	height: 45px;
	background-color: #ee7700;
	border: none;
	color: white;
	font-size: 18px;
}
.logC input {
	width: 100%;
	height: 45px;
	background-color: #ee7700;
	border: none;
	color: white;
	font-size: 18px;
}

.logGet .logD.logDtip .p1 {
	display: inline-block;
	font-size: 28px;
	margin-top: 30px;
	width: 86%;
}
#wrap .logGet .logD.logDtip {
	width: 86%;
	border-bottom: 1px solid #ee7700;
	margin-bottom: 60px;
	margin-top: 0px;
	margin-right: auto;
	margin-left: auto;
}
.logGet .lgD img {
	position: absolute;
	top: 12px;
	left: 8px;
}
.logGet .lgD input {
	width: 100%;
	height: 42px;
	text-indent: 2.5rem;
}
#wrap .logGet .lgD {
	width: 86%;
	position: relative;
	margin-bottom: 30px;
	margin-top: 30px;
	margin-right: auto;
	margin-left: auto;
}
#wrap .logGet .logC {
	width: 86%;
	margin-top: 0px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
}
 
 
.title {
	font-family: "宋体";
	color: #FFFFFF;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);  /* 使用css3的transform来实现 */
	font-size: 36px;
	height: 40px;
	width: 30%;
}
 
.copyright {
	font-family: "宋体";
	color: #FFFFFF;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);  /* 使用css3的transform来实现 */
	height: 60px;
	width: 40%;
	text-align:center;
}
	
 
#foot .copyright .img {
	width: 100%;
	height: 24px;
	position: relative;
}
.copyright .img .icon {
	display: inline-block;
	width: 24px;
	height: 24px;
	margin-left: 22px;
	background-repeat: no-repeat;
	vertical-align: middle;
	margin-right: 5px;
}
	
.copyright .img .icon1 {
	display: inline-block;
	width: 24px;
	height: 24px;
	margin-left: 22px;
	vertical-align: middle;
	background-repeat: no-repeat;
	margin-right: 5px;
}
.copyright .img .icon2 {
	display: inline-block;
	width: 24px;
	height: 24px;
	margin-left: 22px;
	vertical-align: middle;
	background-repeat: no-repeat;
	margin-right: 5px;
}
#foot .copyright p {
	height: 24px;
	width: 100%;
}

	 .tip { display: none; position: absolute; left: 20px; top: 52px; font-size: 14px; color: #f50; }

.reg-bar { width: 360px; margin: 20px auto 0; font-size: 14px; overflow: hidden;}

.reg-bar a { color: #fff; text-decoration: none; }

.reg-bar a:hover { text-decoration: underline; }

.reg-bar .reg { float: left; }

.reg-bar .forget { float: right; }

.dowebok ::-webkit-input-placeholder { font-size: 18px; line-height: 1.4; color: #fff;}

.dowebok :-moz-placeholder { font-size: 18px; line-height: 1.4; color: #fff;}

.dowebok ::-moz-placeholder { font-size: 18px; line-height: 1.4; color: #fff;}

.dowebok :-ms-input-placeholder { font-size: 18px; line-height: 1.4; color: #fff;}


</style>
<body>
	
<?php 

include "fun.php";



$classname = @$_POST['classname'];
$username = @$_POST['username'];					//用户名
$password = @$_POST['password'];					//密码
echo $username;
//echo $password;


$success_tips = "<script type='javascript'>alert(0)</script>";

if(!empty($username))
{
    
    $s_sql = "select * from user where username ='$username' and password='$password' and classname = '$classname'";		//查找姓名、已修课程数信息
    $s_result = $db->query( $s_sql);
    if($s_result &&  $s_result->rowCount() != 0)
    {
        echo "<script> alert(\"Welcome to login!\");</script>"; 
        header("Location:index.php");
    }
    else
    {
        echo "<script language=\"JavaScript\">alert(\"Incorrect class/username/password!\");</script>";
    }
}


?>
<div class="header" id="head">
  <div class="title"></div>
	
</div>
	<div class="window">
		<div class="welcome-login"><p>学生管理系统登录</p></div>
    <form name="login" action="login1.php" method="post">
        <div><p><label for="" class="label-word-one">班级</label><input  id="classname" name="classname" placeholder="请输入班级"></p></div>
			<div><p><label for="" class="label-word-two">账号</label><input  name="username" type="text" placeholder="请输入账号"></p></div>
			<div><p><label for="" class="label-word-three">密码</label><input  name="password" type="password"  placeholder="请输入密码"></p></div>
				<div><input type="submit" value="登 录"><br></div>
		</div>


</form>

	
<div class="footer" id="foot">
  <div class="copyright">
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright © 2022 Well Begun Is Half Done.</p>
    <div class="img">
		<i class="icon"></i><span>班级：20计算机科学与技术3班</span>
	</div>
	
	<div class="img">
		<i class="icon1"></i><span>姓名：范仕泓</span>
	</div>
	  
	<div class="img">
	  <i class="icon2"></i><span>学号：2014080901306</span>
	</div>
 
 
  </div>
	
</div>
	

</body>

</html>
