<?php
namespace App\Controller;

class GameController extends AppController{
	public function initialize(){
		$this->name = 'Game';
		$this->viewBuilder()->autoLayout(true);
		$this->viewBuilder()->layout('Game');
	}
	public function index(){

	}
}