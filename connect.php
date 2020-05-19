<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="db";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Error connect ');
mysqli_query($conn,'SET NAME utf8');
//mysql_select_db($dbname);

if($conn->connect_error){
    die("Can't connect to database");
}
?>
