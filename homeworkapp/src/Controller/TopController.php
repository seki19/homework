<?php
namespace App\Controller;

class TopController extends AppController{
	public function initialize(){
		$this->name = 'Top';
		$this->viewBuilder()->autoLayout(true);
		$this->viewBuilder()->layout('Top');
	}

	public function index(){
		// $this->viewBuilder()->autoLayout(true);
		// $this->autoRender = true; 
	}
}