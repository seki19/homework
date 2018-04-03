<?php
namespace App\Controller;

class AccountController extends AppController{
	public function initialize(){
		$this->name = 'Ranking';
		$this->viewBuilder()->autoLayout(true);
		$this->viewBuilder()->layout('Account');
	}
 	public function index(){
 		
 	}
}