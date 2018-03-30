<?php
namespace App\Controller;

class UsersController extends AppController{
	public function index(){	
		$data = $this->Users->find('all');
		$this->set('data',$data);
	}
}