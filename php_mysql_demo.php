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
// Create a table called employee   empid   ,   empname    ,emp salary , empemail

$db_host = "localhost";
$db_user = "root";
$db_pass = '';
$db_name = 'wiz';

$connection = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($connection->connect_error) 
{
    die("Connection Error!" . $connection->connect_error);
}

echo "MYSQL Database Connected Successfully <br/>";

$query1 = "create table  employee(empid INT NOT NULL AUTO_INCREMENT,empname varchar(40) NOT NULL, empsal double(5,1) NOT NULL, empemail   varchar(50) NOT NULL, PRIMARY KEY(empid))";


if ($res = mysqli_query($connection, "select count(*) from employee")) {
    echo $res->num_rows;
}


$connection->close();


?>

</div>
<img src="https://i0ba83ftsgi2rzkek1hlusq1-wpengine.netdna-ssl.com/wp-content/uploads/2018/04/how-it-works-opt.gif" class="card-img-top" alt="...">
</div>
</div>

</div>
</div>
</body>

</html>