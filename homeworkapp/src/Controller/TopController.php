<?php
namespace App\Controller;

class TopController extends AppController{
	public $name = 'top';
	public $autoRender = false;
	public function index(){
		echo "hello world";
	}
}