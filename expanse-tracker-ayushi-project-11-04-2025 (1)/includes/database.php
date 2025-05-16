
<?php

$host = "localhost"; // change this to your MySQL hostname
$user = "shribala_tracker"; // change this to your MySQL username
$pass = "Anthem@nh22"; // change this to your MySQL password
$dbname = "shribala_tracker"; // change this to your MySQL database name

$db = new mysqli($host, $user, $pass, $dbname);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>
