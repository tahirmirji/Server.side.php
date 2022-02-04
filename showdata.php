<?php
include("index.php");
?>




<!DOCTYPE html>
<html>
<body>
<div class="container shadow-lg p-3 mb-5 bg-white rounded" >
   <div class="row" >
    <div class="col-lg-6">
        <div class="card border border-primary" style="width: 20rem;">
           
            <div class="card-body">
                <p class="card-text">



<?php

// connection credentials for database connection
$db_host = "localhost";
$db_user = "root";
$db_pass = '';
$db_name = 'wiz';

// it will try to connect to database
$connection = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($connection->connect_error)  // Checks if the connection having any problem connecting
{
    //Executes if database failed to connect to database.
    die("Connection Error!" . $connection->connect_error);
}
else
{
    //Executes if database is connected successfully.
    echo "<b> We are Connected to  Database </b>- $db_name <br/>";
    
    // Calling a user defined fucntion to show data available in table
    fetch_data($connection);
}




function fetch_data($connection)    
{
    // Prepare Query Statement to select all rows of data in table in descending order.
    $query = "SELECT * from employee ORDER BY empid DESC";

    // Actually executes the statement above with the help of mysqli_query() fucntion which returns a result set.
    $result = mysqli_query($connection, $query);

    //here if will check if the $result is holding some rows or not, if rows are greater than zero it will be true else false.
    if (($num=mysqli_num_rows($result)) > 0) 
    {
        echo $num." Employees Found";

        //It will retrive records from the result one row by one row and store in $row.
        $row = mysqli_fetch_all($result, MYSQLI_NUM);

        //retrive data from $row and display a array holding variable as $res.
       foreach($row as $res)
       {
           //Display each data using index of array/row 
           echo "<p>";
           echo "Emp Id: $res[0] <br/>";
           echo "Emp Name: $res[1] <br/> ";
           echo "Emp Email: $res[2] <br/> ";
           echo "Emp Salary: $res[3]  <br/>";
           echo "</p>";
           
           // display horizontal line
           echo "<hr>";
       }

    }
    else {
        // returns empty array
        return $row = [];
    }
}
?>
</div>
<img src="https://i.pinimg.com/originals/22/a5/c7/22a5c746a97687ea11af86ee8bfabe20.gif" class="card-img-top" alt="...">
</div>
</div>
</div>
</body>

</html>