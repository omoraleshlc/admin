<?php 
	require_once("dbconfig.php");
	

	global $conn;
	global $conn2;
    
    try {
   
    	$conn = new PDO("mysql:host=". $config['host']  .";dbname=". $config['db'], $config['user'] , $config['pass'] );
    	$conn->exec("set names utf8");
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$conn2 = new PDO("mysql:host=". $config2['host']  .";dbname=". $config2['db'], $config2['user'] , $config2['pass'] );
    	$conn2->exec("set names utf8");
    	$conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    } catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
?>