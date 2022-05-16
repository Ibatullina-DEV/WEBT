<?php
	$dbhost = 'localhost';
	$dbuser = 'a0670919_news';
	$dbpass = '123';
	$dbname = 'a0670919_news';
	$dblink = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	
	if ($dblink->connect_errno) {
		printf("Failed to connect to database");
		exit();
	}
	
	$result = $dblink->query("SELECT * FROM messages");
	$data = array();
	
	while ( $row = $result->fetch_assoc())  {
		$data[]=$row;
	}
	
	echo json_encode($data);
?>