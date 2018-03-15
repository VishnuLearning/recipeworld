<?php
$servername = "http://159.89.161.164";
$username = "recipe";
$password = "123456";
$db = "de_recipe" ;

// Create connection
$conn = mysqli_connect($servername, $username, $password) or die("Connection failed: " . mysql_connect());

// Check connection
/*if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}*/

mysqli_select_db($conn,$db);

?>