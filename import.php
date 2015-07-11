<?php 

require('db_control_helper.php');


	$sql_file_name 	= 	"1436600810-blog.sql";
	$full_directory	= 	__dir__."/backups/".$sql_file_name; 
	$db_name 		= 	"import_to_this";
	$db_host 		= 	"localhost";
	$db_user_name 	= 	"root";
	$db_user_pass 	= 	"";

	$args = file_get_contents($full_directory); // get contents
	mysqli_import_sql( $args, $db_host,  $db_user_name, $db_user_pass, $db_name); // execute










