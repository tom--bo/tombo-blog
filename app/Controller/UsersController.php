<?php

class UsersController extends AppController{
	public $name = 'Users';
	public $components = array('Auth');

	public function beforeFilter(){
		// $this->Auth->allow('adduser');
		$this->Auth->allow('logout');
	}

	public function adduser(){
		if(!empty($this->data)){
			if($this->data){
				$this->User->create();
				$this->User->save($this->data);
				$this->redirect(array('action'=>'login'));
			}
		}
	}

	public function login(){
		if($this->request->isPost()){
			if($this->Auth->login()){
				$this->redirect($this->Auth->redirect());
			}else{
				$this->Session->setFlash('ユーザ名かパスワードが違います', 'default', array(), 'auth');
			}
		}
	}

	public function logout(){
		$this->Auth->logout();
	}

}



?>