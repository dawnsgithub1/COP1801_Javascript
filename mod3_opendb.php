<?php
// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli.connect_error());
}
?>
