<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');// you can create db user name whatever you want.
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);//The mysqli_connect() function attempts to open a connection to the MySQL Server 
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());//PHP mysqli_connect_error() function returns an string value representing the description of the error from the last connection call
}
?>