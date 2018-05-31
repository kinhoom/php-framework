<?php
namespace Kinhoom;

//引入异常处理入口
require_once EX_PATH.'registerErrorHandler.php';

//引入公共函数
require_once COMM_FUNC.'Function.php';
//对系统配置文件中的数组定义常量
compileConf(require CONF_PATH.'config.php');
//定义url类型
define('URL_MODE',URL_COMMON);
require_once KH_PATH.'BaseKinhoom.php';

class KH extends BaseKinhoom{
	
}

//引入自动加载类,并注册自动加载函数
require_once KH_PATH.'Loader.php';
spl_autoload_register('Kinhoom\Loader::autoLoad');


Router::bootstrap();