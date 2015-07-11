<?php 

require('db_control_helper.php');


	$dir  			= 	__dir__."/backups"; // directory files
	$db_name 		= 	"blog";
	$output_name 	= 	time()."-".$db_name; // output name sql backup
	$db_host 		= 	"localhost";
	$db_user_name 	= 	"root";
	$db_user_pass 	= 	"";
	backup_database($dir, $output_name,$db_host,$db_user_name,$db_user_pass,$db_name); // execute



?>