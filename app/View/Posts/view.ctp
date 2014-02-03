
<?php 
    pr($data2);

    echo 'created:  '.$data[0]['Post']['created'].'<br>';
    echo 'modified:  '.$data[0]['Post']['modified'].'<br>';
    echo 'title:  '.$data[0]['Post']['title'].'<br>';
    echo 'body:  '.$data[0]['Post']['body'].'<br>';
    echo 'category_id:  '.$data[0]['Post']['category_id'].'<br>';
    echo 'user_id:  '.$data[0]['Post']['user_id'].'<br>';
    echo '<br>';

    echo $this->Paginator->first('first', array());
    echo '|';
    echo $this->Paginator->prev('prev', array());
    echo '|';
    echo $this->Paginator->next('next', array());
    echo '|';
    echo $this->Paginator->last('last', array());

?>

