<?php

//解析数组变量，将其键值定义为常量

if(!function_exists('compileConf')){
	function compileConf($conf){
		foreach($conf as $key=>$val){
			if(is_array($val)){
				compileConf($val);
			}else define($key,$val);
		}

	}
}
