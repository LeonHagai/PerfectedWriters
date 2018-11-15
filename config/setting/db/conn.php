<?php
	//Create connection
	/*parameters include the server, individual, password, database*/
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	//check connection
	if (mysqli_connect_errno()){
		# code...
		//connection failed
		echo 'Was not able to connect to MYSQL '. mysqli_connect_errno();
	}