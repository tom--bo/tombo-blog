<?php 
    if(empty($data)){
        echo "<br><br><br>";
        echo "<h3>まだ記事がありません...</h3>";
        $dataFlag = 0;

    }else{
        $dataFlag = 1;
        // echo '<div id="article_box">';
        echo 'title:  '.$data[0]['Post']['title'].'<br>';
        echo 'body:  '.$data[0]['Post']['body'].'<br>';
        echo 'category_name:  '.$data[0]['Category']['category_name'].'<br>';
        echo 'user_name:  '.$data[0]['User']['username'].'<br>';
        echo 'creaetd:  '.date('Y/m/d', strtotime($data[0]['Post']['created'])).'<br>';
        echo '<br>';
    }

?>


<div id="article_box">
    <div id="article_head">
        <?php if($dataFlag){

        }?>
    </div>
    <div id="article_body">
        <?php if($dataFlag){

        }?>
    </div>
    <div id="article_foot">
        <?php if($dataFlag){

        }?>
    </div>
</div>
<div id="pagefoot">
    <?php
        if($dataFlag){
            echo $this->Paginator->numbers(
                array(
                    'before' => $this->Paginator->first('<<').'・',
                    'after'  => '・'.$this->Paginator->last('>>'),
                    'modulus'=>5,
                    'separator' =>'・'
                )
            );
        }
    ?>
</div>
