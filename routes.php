<?php
if (isset($_SESSION["account_admin"])) {
	$controllers = array(
	  'pages' => ['home', 'error'],
	  'baidang' => ['dsbaidang','taobaidang','insertbaidang','editbaidang','deletebaidang','updatebaidang'],
	  'baigiang' => ['show','xemchitiet','taobaigiang','delete','edit','update','insert','timkiem'],
	  'log' => ['login','logout','loginadmin','submit_login','submit_loginadmin'],
	  'monhoc' => ['taomonhoc','insertmonhoc','dsmonhoc','editmonhoc','deletemonhoc','updatemonhoc','showall'],
	  'admin' => ['createuser','insertaccount','dangky','dktk'],
	  'user' => ['dsuser','edituser','deleteuser','updateuser'],
	  'hocphan'=> ['dshocphan','taohocphan','inserthocphan','edithocphan','updatethocphan','deletehocphan'],
	);
}else{
	$controllers = array(
	  'pages' => ['home', 'error'],
	  'baidang' => ['dsbaidang'],
	  'baigiang' => ['show','xemchitiet','timkiem'],
	  'log' => ['login','logout','loginadmin','submit_login','submit_loginadmin'],
	  'monhoc' => ['dsmonhoc','showall'],
	  'admin' => ['dangky','dktk'],
	  'hocphan'=> ['dshocphan'],
	);
}


if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $controller = 'pages';
  $action = 'error';
}
include_once('controllers/' . $controller . '_controller.php');
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;
$controller->$action();
?>