<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');

if ($mysqli->connect_error) {
	die('The connection dun did dieded (' . $mysqli->connect_errno .')'
		. $mysqli->connect_error);
}
else{
	//echo "The connection was made m8";
}
$mysqli->close();

?>