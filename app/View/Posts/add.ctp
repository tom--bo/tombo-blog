<h1>Add Post</h1>

<?php 
	echo $this->Form->create('Post');
	echo $this->Form->input('title');
	echo $this->Form->input('body', array('rows' => '3'));
	echo $this->Form->radio('category_id', array(1=>'PHP(CakePHP', 2=>'Node.js', 3=>'Titanium'));
	echo $this->Form->end('Save Post');

?>