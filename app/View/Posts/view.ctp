<?php 

    echo $this->Html->css("article");


    if(empty($data)){
        echo "<br><br><br>";
        echo "<h3>まだ記事がありません...</h3>";
        $dataFlag = 0;

    }else{
        $dataFlag = 1;
        // echo '<div id="article_box">';
        echo '<br>';
    }

?>


<div id="article_box">
    <div id="article_head">
        <div id="article_head_date">
            <?php if($dataFlag){
                echo '<br>'.date('Y/m/d', strtotime($data[0]['Post']['created'])).'<br>';
            } ?>
        </div>
        <div id="article_head_title">
            <?php if($dataFlag){
                echo $data[0]['Post']['title'];

            }?>
        </div>
        <div id="article_head_info">
            <?php if($dataFlag){
                echo 'Category:  '.$data[0]['Category']['category_name'];
                echo '&nbsp&nbsp&nbsp&nbsp';
                echo 'Author:  '.$data[0]['User']['username'].'<br>';
            }?>
        </div>
        <div style="clear:both;"></div>
    </div>
    <div id="article_body">
        <?php if($dataFlag){
            echo nl2br($data[0]['Post']['body']);

        }?>
    </div>
    <div id="article_foot">
        <?php if($dataFlag){
            echo '<hr><br>';
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
