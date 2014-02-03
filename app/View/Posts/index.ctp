<br>
<h3>About This Blog...</h3>
<div class="margin30">情報系の学部3年生です。備忘録としてブログを書いてみようと思います。
    <br>PHP(CakePHP), jsを中心に開発してるのものとかを書いていこうと思います。</div>
<br>

<h3>Categories</h3>
<div class="margin30">
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
	<li><?php echo $this->Html->link('(ALL))', array(
    	'controller' => 'posts',
    	'action' => 'view',
        '?' => array(
            'category_id' => 4,
            'date' => 0
        ))
    )
    ?></li>
</ul>
</div>
<br>

<h3>My APP</h3>
<div class="margin30">
<ul>
    <li>KinecDRone(プロジェクト研究)</li>
    <li>あきべや（空き教室検索アプリ）</li>
    <li>リアルタイムオセロ</li>
</ul>
<br>
</div>

<h3>Contact</h3>
<div class="margin30">
<div>Twitter: @tom__bo</div>
<div>Mail: otsuka.tt@gmail.com</div>
<br>
<hr>
</div>

<br><br>



