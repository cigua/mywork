<?php 
require_once '../include.php';
checkLogined();
$act=$_REQUEST['act'];//用于处理表单添加的数据获取当前传递的参数值
$id=$_REQUEST['id'];//$_post、$_get的合集
if($act=="logout"){//如果注销了就退出，如果没有注销 则往下走
	logout();
}elseif($act=="addAdmin"){
	$mes=addAdmin();//添加管理员的操作
}elseif($act=="editAdmin"){//编辑修改管理
	$mes=editAdmin($id);
}elseif($act=="delAdmin"){
	$mes=delAdmin($id);
}elseif($act=="addCate"){
	$mes=addCate();
}elseif($act=="editCate"){
	$where="id={$id}";
	$mes=editCate($where);
}elseif($act=="delCate"){
	$mes=delCate($id);
}elseif($act=="addAct"){
	$mes=addAct();
}elseif($act=="editAct"){
	$mes=editAct($id);
}elseif($act=="delAct"){
	$mes=delAct($id);
}elseif($act=="waterText"){
	$mes=doWaterText($id);
}elseif($act=="waterPic"){
	$mes=doWaterPic($id);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php 
	if($mes){
		echo $mes;//在admin.inc.php中
	}
?>
</body>
</html>