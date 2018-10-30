<?php
namespace App\Http\Controllers;
class MattController extends \Illuminate\Routing\Controller{
	public function sum($numberA, $numberB){
		\Log::info('LOGA', ['you here !!!!',]);
		return $numberA + $numberB;
	}

	public function myThing(){
		return view('grouping.numberone', ['fullname'=> 'Ben' . ' ' . 'Jones'  ]);
	}



}



