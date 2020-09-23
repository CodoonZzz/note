<?php
    $callback = $_GET['callback'];
    $data = array('username'=>'sxy','password'=>'123');
    echo $callback.'('.json_encode($data).')'
?>