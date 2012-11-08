<?php
require_once('includes/Counter.php');
    echo Counter::getCount().'<br />';
    $x = new Counter;
    echo Counter::getCount().'<br />';
    $y = new Counter;
    echo Counter::getCount().'<br />';
    $z = new Counter;
    //echo Counter::getCount().'<br />';
    echo $z->getCount().'<br />';
?>