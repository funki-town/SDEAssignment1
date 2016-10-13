<?php
//get values from form
$name = $_GET['a'];
$birthday = $_GET['b'];
$birthday= date('d-m-Y',strtotime($birthday));
//create database connection
$con = mysqli_connect('db4free.net','s4964276','28853671','sdeassign1');
//check datbase connection
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    echo false;
}
else
{
  //calculate age and return via xHR object
    $today = date("d-m-Y");
    $diff = date_diff(date_create($today),date_create($birthday));
  //create query
  $sql = "INSERT INTO data () values ()";
  //try query
  if (mysqli_query($con,$sql)=false)
  {
    echo false;
  }
  else
  {
    //return age if inserted into data correctly
    echo $diff->format('%a');
  }
  //close connection
  mysqli_close($con);
}
?>
