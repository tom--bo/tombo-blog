<br>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>category_id</th>
        <th>user_id</th>
        <th>Action</th>
        <th>Created</th>
    </tr>

<!-- $posts配列をループして、投稿記事の情報を表示 -->

<?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
        <?php 
            echo $this->Html->link($post['Post']['title'],
	            array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); 
            echo "<br>";
        ?>
        </td>
        <td> <?php echo $post['Post']['category_id']; ?> </td>
        <td> <?php echo $post['Post']['user_id']; ?> </td>
        <td><?php
        	echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));
        	echo " ";
        	echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'Are you sure?'));
    	?></td>
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>

<?php
	echo $this->Html->link(
		'Add Post',
		array('controller' => 'posts', 'action' => 'add')
		);
?>