

<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = '';

$connection = new mysqli($db_host,$db_user,$db_pass);

if($connection ->connect_error)
{
    die("Hey guys we have a problem, Connection Error".$connection->connect_error);
}

    echo "MYSQL Database Connected Successfully";

?>