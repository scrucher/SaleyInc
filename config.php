<?php
	global $errors, $db_con;
	
	$errors= array();
	
	$db_con= mysqli_connect('localhost', 'saleyma_usr', ';LKmW7S5HRX0', 'saleyma_db');
	
	
	
	if($mysqli->connect_errno>0)
    {
        die("Connection to MySQL-server failed!"); 
	}

?>