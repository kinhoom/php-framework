<?php
namespace Controller;

use Kinhoom\controller;

class Index extends Controller{
	public function indexAction(){
		var_dump(__URL__);
		@$this->render(['a'=>$a]);
	}
	public function bbAction(){
		echo '444';
	}
}