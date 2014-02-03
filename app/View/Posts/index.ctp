<br>
<h3>About This Blog...</h3>
<div class="margin30">情報系の学部3年生です。備忘録としてブログを書いてみようと思います。
    <br>PHP(CakePHP), jsを中心に開発してるのものとかを書いていこうと思います。</div>
<br>

<h3>Categories</h3>
<div class="margin30">
<ul>
    <li>PHP(CakePHP)</li>
    <li>Node.js</li>
    <li>Titanium</li>
    <li>(ALL)</li>
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

<?php 
    // pr($posts);

    echo 'created:  '.$posts[0]['Post']['created'].'<br>';
    echo 'modified:  '.$posts[0]['Post']['modified'].'<br>';
    echo 'title:  '.$posts[0]['Post']['title'].'<br>';
    echo 'body:  '.$posts[0]['Post']['body'].'<br>';
    echo 'category_id:  '.$posts[0]['Post']['category_id'].'<br>';
    echo 'user_id:  '.$posts[0]['Post']['user_id'].'<br>';
    echo '<br>';

    echo $this->Paginator->first('first', array());
    echo '|';
    echo $this->Paginator->prev('prev', array());
    echo '|';
    echo $this->Paginator->next('next', array());
    echo '|';
    echo $this->Paginator->last('last', array());
?>



<br><br>



