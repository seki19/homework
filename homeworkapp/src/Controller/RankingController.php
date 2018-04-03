<?php
namespace App\Controller;

class RankingController extends AppController{
	public function initialize(){
		$this->name = 'Ranking';
		$this->viewBuilder()->autoLayout(true);
		$this->viewBuilder()->layout('Ranking');
	}
 	public function index(){
 		$this->loadModel('Gamescores');
		$data = $this->Gamescores->find('all');
		$this->set('data',$data);
 	}
}