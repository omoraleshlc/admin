<?php

  $production = false;
  
	$config  = array();
  
  if($production){

    $config['host']  = 'localhost';
  	$config['db']    = 'sima';
  	$config['user']  = 'root';
  	$config['pass']  = '';

  }else{

    $config['host']  = 'localhost';
    $config['db']    = 'sima'; 
    $config['user']  = 'root';     
    $config['pass']  = '';     

  }
  
?>