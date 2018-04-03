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
		$concentrarionscore = $this->Gamescores->find('all',[
			'conditions'=>[
				'gamename'=>"神経衰弱"]
		]);
		$crabgamescore = $this->Gamescores->find('all',[
			'conditions'=>[
				'gamename'=>"かにゲーム"]
		]);
		$concentrarionscore->order(['score'=>'DESC']);
		$crabgamescore->order(['score'=>'DESC']);
		$this->set('concentrarionscore',$concentrarionscore);
		$this->set('crabgamescore',$crabgamescore);

 	}
}