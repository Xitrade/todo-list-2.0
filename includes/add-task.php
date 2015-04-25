<?php
 	$task = strip_tags($post['task']);
 	$date = date('Y-m-d');
 	$time = time('H:i:s');
 
	include ('connect.php');

	$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');
	$mysqli -> query("INSERT INTO tasks VALUES (', '$task', '$date', '$time')");

	$query = "SELECT * FROM tasks WHERE task ='$task' and date = '$date' and time = '$time'";
 ?>