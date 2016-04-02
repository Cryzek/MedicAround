<?php

include 'connect.php'

if (isset($_POST['doclogin'])) {    //button clicked id doctors
	$username = $_POST['username'];    //username
	$result = mysql_query('SELECT password FROM doctor_login WHERE username = $username');
	if ($result) {
		$password = mysql_fetch_assoc($result);
		if ($password == $_POST['password']) {      //password
			-----successfully logged in-----
		}
		else {
			-----incorrect credentials----
		}
	}
	else {
		------Register First-----
	}
}

if (isset($_POST['patlogin'])) {    //button clicked id patients
	$username = $_POST['username'];    //username
	$result = mysql_query('SELECT password FROM patient_login WHERE username = $username');
	if ($result) {
		$password = mysql_fetch_assoc($result);
		if ($password == $_POST['password']) {      //password
			-----successfully logged in-----
		}
		else {
			-----incorrect credentials----
		}
	}
	else {
		-----Register First----
	}
}

?>