

<?php
// Create a table called employee   empid   ,   empname    ,emp salary , empemail

$db_host = "localhost";
$db_user = "root";
$db_pass = '';
$db_name = 'wiz';

$connection = new mysqli($db_host,$db_user,$db_pass,$db_name);

if($connection ->connect_error)
{
    die("Connection Error!".$connection->connect_error);
}

echo "MYSQL Database Connected Successfully <br/>";

$query1 ="create table  employee(empid INT NOT NULL AUTO_INCREMENT,empname varchar(40) NOT NULL, empsal double(5,1) NOT NULL, empemail   varchar(50) NOT NULL, PRIMARY KEY(empid))";

$query2 = "create table ";

$query3 = "create table ";

$query4 = "create table ";

$query5 = "create table ";



if($connection->query("create table  employee(empid INT NOT NULL AUTO_INCREMENT,empname varchar(40) NOT NULL, empsal double(5,1) NOT NULL, empemail   varchar(50) NOT NULL, PRIMARY KEY(empid))"))
{
    echo "table created successfully.<br/>";
}
else
{
    echo "Table creation failed.<br/>";
    exit();
}

$connection->close();


?>