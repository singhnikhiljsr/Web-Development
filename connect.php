<?php
$servername = "localhost:3320";
$username = "root";
$password = "";
$dbname = "galwanvalley";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if($conn)
{
    echo "";
}
else
{
    die("Connection failed because ".mysqli_connect_error());
}
?>