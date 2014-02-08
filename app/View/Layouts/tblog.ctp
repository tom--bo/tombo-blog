<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.my-blog');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<?php echo $this->Html->image('blog_title.png', array('alt' =>'title', 'url'=>array('controller'=>'posts','action'=>'index'))); ?>
		</div>

		<div id="content">

			<div id="article">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
			</div>

			<div id="sidebar">
				<h3>Profile</h3>
				<div>情報系の学生のブログです。php(cakephp), js, を中心にweb関係の開発について書いてくと思います。</div>
				<br>
				<br>
				<h3>Category</h3>
				<ul>
				    <li><?php echo $this->Html->link('PHP(CakePHP)', array(
				    	'controller' => 'posts',
				    	'action' => 'view',
				        '?' => array(
					    	'category_id' => 1,
					    	'date' => 0
				        ))
				    )
				    ?></li>
					<li><?php echo $this->Html->link('Node.js', array(
				    	'controller' => 'posts',
				    	'action' => 'view',
				        '?' => array(
					    	'category_id' => 2,
					    	'date' => 0
				        ))
				    )
				    ?></li>
					<li><?php echo $this->Html->link('Titanium', array(
				    	'controller' => 'posts',
				    	'action' => 'view',
				        '?' => array(
					    	'category_id' => 3,
					    	'date' => 0
				        ))
				    )
				    ?></li>
					<li><?php echo $this->Html->link('(ALL)', array(
				    	'controller' => 'posts',
				    	'action' => 'view',
				        '?' => array(
					    	'category_id' => 0,
					    	'date' => 0
				        ))
				    )
				    ?></li>
				</ul>
				<br>
				<h3>Collaboration</h3>
				<ul>
				    <li><?php echo $this->Html->link('KinecDrone', array(
				    	'controller' => 'posts',
				    	'action' => 'view',
				        '?' => array(
					    	'category_id' => 4,
					    	'date' => 0
				        ))
				    )
				    ?></li>
				</ul>
				<br>


				<h3>Archives</h3>
				<ul>
					<li><?php echo $this->Html->link('2014/Feb', array(
				    	'controller' => 'posts',
				    	'action' => 'view',
				        '?' => array(
					    	'category_id' => 0,
					    	'date' => 1
				        ))
				    )
				    ?></li>
					<li><?php echo $this->Html->link('2014/Mar', array(
				    	'controller' => 'posts',
				    	'action' => 'view',
				        '?' => array(
					    	'category_id' => 0,
					    	'date' => 2
				        ))
				    )
				    ?></li>
				</ul>
				<br><br>
				<?php echo $this->Html->link('<HOME>', array(
			    	'controller' => 'posts',
			    	'action' => 'index',
			        )
			    )
			    ?>
			</div>
		</div>

		<div id="footer">
			<div>tom_blog</div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
