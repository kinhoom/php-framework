<?php

//检测环境
if(version_compare(PHP_VERSION,'5.4.0','<')) die('PHP版本需要大于5.4!');
//定义框架环境
define("KH_DEV", true);
if(KH_DEV){
	//开启错误，报告所有错误级别
	ini_set('display_errors',1);
	error_reporting(-1);
} else ini_set('display_errors', 0);

//定义基础路径
$base_path=rtrim(str_replace('\\','/',__DIR__.'/////'),'/').'/';
//定义系统核心路径
define("SYS_PATH", $base_path . 'sys/');
//定义应用路径
define("APP_PATH", $base_path . 'app/');
//定义异常处理路径
define("EX_PATH", SYS_PATH . 'exception/');
//定义系统配置文件路径
define("CONF_PATH", SYS_PATH . 'conf/');
//定义基础类文件路径
define("KH_PATH", SYS_PATH . 'Kinhoom/');
//定义公共函数路径
define("COMM_FUNC", SYS_PATH . 'common/');
//加载基础类入口
require KH_PATH . 'Kinhoom.php';