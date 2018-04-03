<?php
namespace App\Controller;

class TopController extends AppController{
	public function initialize(){
		$this->name = 'Top';
		$this->viewBuilder()->autoLayout(true);
		$this->viewBuilder()->layout('Top');
	}

	public function index(){
		$this->loadModel('Gamescores');
		$data = $this->Gamescores->find('all');
		$data->order(['score'=>'ASC']);
		$this->set('data',$data);
	}
}