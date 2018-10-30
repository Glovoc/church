<?php
namespace App\Libs\Test;
class Person{
	public function __construct($constructor=false){

		\Log::info('Person Constructor', ['ArrayHere',]);
	}

	public function talk($message){
		\Log::info('Talk', [$message,]);
	}

}
