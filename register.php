<?php

include 'connect.php';

if (isset($_POST['docregister']) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$qualification = $_POST['qualification'];
	$specialisation = $_POST['specialisation'];
	$experience = $_POST['experience'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	mysql_query("INSERT INTO doctor_login VALUES($username, $password)");
	mysql_query("INSERT INTO doctors VALUES($username, $name, $qualifications, $specialisation, $experiences, $rating, $address, $email, $phone)");

}

if (isset($_POST['patregister']) {
	$username = $_POST['username'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	mysql_query("INSERT INTO patient_login VALUES($username, $password)");
	mysql_query("INSERT INTO patients VALUES($username, $name, $address, ,$phone, $email)");

}

?>