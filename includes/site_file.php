<?php

	@session_start();
	
	error_reporting(E_ALL ^ E_NOTICE);
	
	ini_set('session.bug_compat_warn', 0);
	ini_set('session.bug_compat_42', 0);
	
	define("MYSQL_HOST", "localhost");
	define ("MYSQL_USER", "root");
	define ("MYSQL_PASSWORD", "");
	define ("MYSQL_DATABASE", "hrs");
	define ("USER_NAME", "USER_NAME");
	
	
		
	// open a connection to the database
	$con = @mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASSWORD) or die("Could not connect to MYSQL");

	//Get the database
	mysql_select_db(MYSQL_DATABASE, $con);
	
?>