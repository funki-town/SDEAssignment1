<?php
//get values from form
$name = $_REQUEST['a'];
$birthday = $_REQUEST['b'];

//connect to the database
//$con = mysqli_connect('db4free.net','s4964276','28853671','sdeassign1');
//if (!$con) {
   // die('Could not connect: ' . mysqli_error($con));
//}
//else{
    $today = date("Y-m-d");
    $diff = date_diff(date_create($birthday),date_create($today));
    echo $diff;
    
    
//}



//mysqli_select_db($con,"ajax_demo");
//$sql="SELECT * FROM user WHERE id = '".$q."'";
//$result = mysqli_query($con,$sql);


//mysqli_close($con);
?>