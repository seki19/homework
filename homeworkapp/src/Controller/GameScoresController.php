<?php
namespace App\Controller;

class GameScoresController extends AppController{
	public function index(){	
		$this->set('data', $this->Gamescores->find('all'));
	}
}