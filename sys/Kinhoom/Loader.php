<?php
namespace Kinhoom;
class Loader{
	public static function autoLoad($class){
		echo $class.'<br>';
		$class=ltrim($class,'\\');
		$class_path=str_replace('\\','/',$class).EXT;
		//var_dump(SYS_PATH . $class_path);
		//var_dump(APP_PATH . $class_path);
		if(file_exists(SYS_PATH . $class_path)){
			include SYS_PATH . $class_path;
			return;
		}
		if(file_exists(APP_PATH . $class_path)){
			include APP_PATH . $class_path;
			return;
		}

		
	}
}