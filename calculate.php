<?php
//get values from form
$name = $_GET['a'];
$birthday = $_GET['b'];
$birthday= date('d-m-Y',strtotime($birthday));
echo $diff->format('%a');
?>
