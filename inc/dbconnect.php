
<?php
session_start();

$db_prefix = "";
$mysql_host = "localhost";
$mysql_user = "";
$mysql_pwd = "";
$mysql_db = "";

// MySQL connectie maken

$conn = new mysqli($mysql_host, $mysql_user, $mysql_pwd, $mysql_db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
