<?php
if (isset($_GET['a']) && isset($_GET['b'])) {
//get values from form
$name = $_GET['a'];
$date = $_GET['b'];
//connect to the database
$con = mysqli_connect('db4free.net','s4964276','28853671','sdeassign1');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
else{
    $date = new DateTime(d.m.y);
    $diff = (date('Y') - date('d',strtotime($date)));
    echo $diff;
    
}



//mysqli_select_db($con,"ajax_demo");
//$sql="SELECT * FROM user WHERE id = '".$q."'";
//$result = mysqli_query($con,$sql);


//mysqli_close($con);
?>