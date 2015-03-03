<?php 
	require_once("dbconfig.php");
	

	global $conn;
    
    try {
   
    	$conn = new PDO("mysql:host=". $config['host']  .";dbname=". $config['db'], $config['user'] , $config['pass'] );
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    } catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
	
?>