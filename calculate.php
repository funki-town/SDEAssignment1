<?php
//get name string
$name = $_GET['a'];
//get birthday string
$birthday = $_GET['b'];
//convert string to date
$birthday= date('d-m-Y',strtotime($birthday));
//create database connection
$con = mysqli_connect('db4free.net','s4964276','28853671','sdeassign1');
//check datbase connection
if (!$con) {
    //return error message if cant connect to the database
    die('Could not connect: ' . mysqli_error($con));
}
else
{
  //create todays date as string
    $today = date("d-m-Y");
  ////calculate age and return via xHR object
    $diff = date_diff(date_create($today),date_create($birthday));
  //convert times back to strings for sql insertion
    $birthday=date_create($birthday)->format('Y-m-d');
    $diff=$diff->format('%a');
  //create query
    $sql = "INSERT INTO data (name, age, birthday) VALUES ('$name' ,'$diff' , '$birthday')";
    if (mysqli_query($con,$sql)===false)
    {
    //return error
      die('Could not insert data: ' . mysqli_error($con));
    }
    else
    {
    //return age if inserted into data correctly
    echo $diff;
    }
  //close connection
  mysqli_close($con);
}
?>
