<?php

class PostsController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Session');
	public $layout = 'tblog';
	public $paginate = array(
		'conditions' => array(),
		'fields' => array('title', 'body', 'category_id', 'user_id', 'created', 'modified'),
		'sort' => 'modified',
		'limit' => '1',
		'direction' => 'desc'
	);

	public function index(){
		$post = $this->paginate();
		$this -> set('posts', $post);
	}

	public function manage(){
		$this -> set('posts', $this->Post->find('all'));
	}

	public function view($id = null){
		if(!$id) throw new NotFoundException(__('Invalid post'));

		$post = $this->Post->findById($id);
		if(!$post) throw new NotFoundException(__('Invalid post'));
		$this->set('post', $post);
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
			return $this->reirect(array('action' => 'index'));
		}
	}

}


?>