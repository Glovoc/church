<?php
namespace App\Libs\Test;
class Employee extends \App\Libs\Test\Person{
	public function __construct($constructor=false){
		parent::__construct();
		\Log::info('Employee Constructor', ['ArrayHere',]);
	}

	public function work(){
		\Log::info('work', []);
		$this->doMe();
	}

	private function doMe(){

	}

}