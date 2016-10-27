<?php
//create database connection
$con = mysqli_connect('db4free.net','s4964276','28853671','sdeassign1');
//check datbase connection
if (!$con) {
    //return error message if cant connect to the database
    die('Could not connect to the database: ' . mysqli_error($con));
}
else
{
    //create query
    $sql = "SELECT *
            FROM data
            ORDER BY AID DESC";
    //execute query
    $result = mysqli_query($con, $sql);
    //return error message if failed
    if (mysqli_num_rows($result)===0)
    {
      echo "<p>No results</p>";
    }
    else
    {
       echo "<table class='table table-striped'><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Age In Days</th><th>Birthday</th><th>Timestamp</th></tr>";
      //output each row
      while($row=mysqli_fetch_assoc($result))
        {
            echo "<tr><td>".$row['AID']."</td><td>".$row["name"]."</td><td>".$row["lname"]."</td><td>".$row["age"]."</td><td>".$row["birthday"]."</td><td>".$row["timeStamp"]."</td></tr>";
        }
        echo "</table>";
    }
  //close connection
}
  mysqli_close($con);
?>
