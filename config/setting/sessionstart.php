<?php
	if(isset($_POST['submit'])){
		session_start(); //Start the sexxion

		$_SESSION['name'] = htmlentities($_POST['name']);

		$_SESSION['email'] = htmlentities($_POST['email']);

		 echo "<script>alert('Login Successifull..!!'); location.href='index.php ';</script>";
	}
 ?>