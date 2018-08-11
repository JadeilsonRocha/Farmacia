<?php 

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "farmacia";

// create connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
	die("connection failed : " . $connect->connect_error);
	echo "errrrrrrrrrrrrrrr";
} else {
	 echo "";
}
mysqli_set_charset($connect, 'utf8');
?>