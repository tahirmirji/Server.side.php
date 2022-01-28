

<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = '';

$connection = new mysqli($db_host,$db_user,$db_pass);

if($connection ->connect_errno)
{
    echo "Connection error";
    exit();
}

echo "MYSQL Database Connected Successfully";





?>