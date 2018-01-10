<?php
namespace Kinhoom;
class Router{
	public static $uri;
	protected static $c_name = DEFAULT_CONTROLLER;
	protected static $a_name = DEFAULT_ACTION;
	public static function bootstrap(){
		self::$uri = $_SERVER['REQUEST_URI'];
		switch (URL_MODE){
			case 1: {
				self::parseCommon();
				break;
			}
		}
		self::boot();
	}

	public static function parseCommon(){
		$router=isset($_GET['r']) ? explode('/',$_GET['r']) : [DEFAULT_CONTROLLER,DEFAULT_ACTION];
		self::$c_name = ucfirst($router[0]);
		self::$a_name = isset($router[1]) ? strtolower($router[1]) : DEFAULT_ACTION;
	}
	public static function boot(){
		self::defineConst();
		$controller_name = 'Controller\\' . self::$c_name;
		echo self::$a_name.'   ';
		$controller      = new $controller_name();
		call_user_func([$controller,self::$a_name . 'Action']);
	}
	public static function defineConst(){
		define('CONTROLLER' , self::$c_name);
		define('ACTION'     , self::$a_name);
		define('__URL__'    , KH::createUrl(self::$c_name . '/' . self::$a_name));
	}
}
