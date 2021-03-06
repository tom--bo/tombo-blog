<?php

class PostsController extends AppController {
	public $uses = array('Post', 'User', 'Category');
	public $helpers = array('Html', 'Form');
	public $components = array('Session', 'Auth');
	public $layout = 'tblog';
	public $paginate = array(
		'conditions' => array(),
		'fields' => array('title', 'body', 'category_id', 'user_id', 'user.username', 'category.category_name', 'created', 'modified'),
		'sort' => 'modified',
		'limit' => '1',
		'direction' => 'desc'
	);


	public function beforeFilter(){
		$this->Auth->allow(array('index', 'logout', 'view'));
	}

	public function index(){
	}

	public function manage(){
		$this->set('posts', $this->Post->find('all'));
	}

	public function view($category_id = null){
	    if(!isset($this->params['url']['category_id']) || !isset($this->params['url']['date'])) throw new NotFoundException(__('Invalid post'));

		// カテゴリと日付のどちらが指定されているか
		if($this->params['url']['category_id'] != 0){
			// カテゴリが指定されている場合
			if($this->params['url']['category_id'] == 4){
			    $this->paginate['conditions'] = array(
			    	'release_flag' => 1
		    	);
			}else{
			    $this->paginate['conditions'] = array(
			    	'category_id' => $this->params['url']['category_id'],
			    	'release_flag' => 1
		    	);
			}
			$data = $this->paginate();
			$this->set('data', $data);
		}else{
			//　日付が指定されている場合
		    // $this->paginate['conditions'] = array('category_id' => $this->params['url']['date']);
			// $data = $this->paginate();
			// $this->set('data', $data);
		}


	}

	public function add(){
		if($this->request->is('post')){
			$this->Post->create();
			if($this->Post->save($this->request->data)){
				$this->Session->setFlash(__('Your post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to add your post.'));
		}
	}

	public function edit($id = null){
		if(!$id) throw new NotFoundException(__('Invalid post'));

		$post = $this->Post->findById($id);
		if(!$post) throw new NotFoundException(__('Invalid post'));

		if($this->request->is(array('post', 'put'))){
			$this->Post->id = $id;
			if($this->Post->save($this->request->data)){
				$this->Session->setFlash(__('Your post has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your post.'));

			if(!$this->request->data) $this->request->data = $post;
		}
	}
	public function delete($id){
		if($this->request->is('get')) throw new MethodNotAllowedException();

		if($this->Post->delete($id)){
			$this->Session->setFlash(__('The post withid: %s has been deleted.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}
	}

}


?>