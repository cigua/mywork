<?php 
require_once '../include.php';
$username=$_POST['username'];
$username=addslashes($username);
$password=md5($_POST['password']);//用md5加密
$verify=$_POST['verify'];
$verify1=$_SESSION['verify'];
$autoFlag=$_POST['autoFlag']; //获取变量 autoFlag是html页中 的name值 name=“autoFlag”
if($verify==$verify1){
	$sql="select * from car_admin where username='{$username}' and password='{$password}'";
	$row=checkAdmin($sql);//选择用户名和密码
	if($row){
		//如果选了一周内自动登陆
		if($autoFlag){
			setcookie("adminId",$row['id'],time()+7*24*3600);//setcookie() 函数向客户端发送一个 HTTP cookie
			//cookie 是由服务器发送到浏览器的变量	 。通常是服务器嵌入到用户浏览器中的一个小文件，当计算机向浏览器请求一个页面的时候，会发送这个cookie。
			//setcookie(name,value,expire有效期,path,服务器路径domain域名,secure是否用安全的https来传输cookies)
			setcookie("adminName",$row['username'],time()+7*24*3600);
		}
		$_SESSION['adminName']=$row['username'];
		$_SESSION['adminId']=$row['id'];
		alertMes("登陆成功","index.php");
	}else{
		alertMes("登陆失败，重新登陆","login.php");
	}
}else{
	alertMes("验证码错误","login.php");
}