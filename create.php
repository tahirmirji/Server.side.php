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
$db_host = "localhost";
$db_user = "root";
$db_pass = '';
$db_name = 'wiz';
$connection = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($connection->connect_error) 
{
    die("Connection Error!" . $connection->connect_error);
}

echo "We are Connected to  Database [ $db_name ]<br/>";


if (isset($_POST['submit'])) 
{

    $empname = $_POST['empname'];

    $empemail = $_POST['empemail'];

    $empsal = $_POST['empsal'];

    // Prepare Query Statement to insert 1 rows of data in table
    $sql = "INSERT INTO `employee` VALUES ( null ,'$empname','$empemail', $empsal )";


    // Actually executes the statement above with the help of mysqli_query() fucntion which returns a boolean answer as true or false to say the outcome is success or failure.
    $result = $connection->query($sql);


    //here if will check if the $result is holding true or false, if rows are greater than zero it will be true else false.
    if ($result == TRUE) {

        echo "New record created successfully.";

    }
    else {

        echo "Error:" . $sql . "<br>" . $connection->error;

    }

    $connection->close();

}

?>
<!-- Till here you have terminated the php code -->






<!-- 
From Here you are going to write the HTML form design to send data 
to the php program as form action= name is same as this file name 
-->

<h2>Signup Form</h2>
    
    <form action="#" method="POST" class="form-control">
    
    <fieldset>
      
    <legend>Employee Personal information:</legend>
    
      Employee First name:<br>

        <input type="text" name="empname" required>

  <br>

  Employee Email:<br>

  <input type="email" name="empemail" required>

  <br>

  Employee Salary:<br>

  <input type="number" min="10000" max="100000" name="empsal" required>

  <br><br>

  <input type="submit" name="submit" value="submit" >

</fieldset>

</form>
    </p>
  </div>
  <img src="https://miro.medium.com/max/700/0*yBvA5CnEX3Sd4aod.gif" class="card-img-top" alt="...">
</div>
</div>
</div>
</div>
</body>

</html>