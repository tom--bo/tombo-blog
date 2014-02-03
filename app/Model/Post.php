<?php

class Post extends AppModel{
	public $belongsTo = array('User', 'Category');
	// public $belongsTo = array(
	// 	"User" => array(
	// 		'className' => 'User',
	// 		'conditions' => '',
	// 		'order' => '',
	// 		'dependent' => 'false',
	// 		'foreignKey' => 'user_id'
	// 	)
	// );
	// public $belongsTo = array(
	// 	"Category" => array(
	// 		'className' => 'Category',
	// 		'conditions' => '',
	// 		'order' => '',
	// 		'dependent' => 'false',
	// 		'foreignKey' => 'category_id'
	// 	)
	// )

	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty'
		),
		'body' => array(
			'rule' => 'notEmpty'
		)
	);
}


?>