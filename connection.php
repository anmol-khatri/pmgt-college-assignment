<?php
session_start();

$username = "";
$email = "";
$errors = array();

//connect to the database
// $connection = mysqli_connect('localhost','umanhi60_umanhi6023','Stu#$nt0804','umanhi60_assignment');
$connection = mysqli_connect('localhost','root','','assignment');

//if the signup button is clicked
if(isset($_POST['register'])){
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$password = $_POST['password'];

	//if the forms are not filled properly
	if (empty($username)) {
		array_push($errors, "Username is Required!");
	}
	if (empty($email)) {
		array_push($errors, "Email is Required!");
	}
	if (empty($password)) {
		array_push($errors, "Password is Required!");
	}

	//if there are no errors, save useer into database
	if (count($errors)==0) {

		$pwd = ($password);//encrypt password
		$sql = "INSERT INTO data (username, email, password, age ) 
		VALUES ('$username', '$email','$pwd','$age')";

		mysqli_query($connection, $sql);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are logged in";
		header('location: index.php'); //redirect to index.php page.
	}

}

//login user from login form.
if (isset($_POST['login'])) {
	
	$username = $_POST['username'];
	$pwd = $_POST['password'];

	//ensure that form are filled properly
	if (empty($username)) {
		array_push($errors, "Username is Required!");
	}
	if (empty($pwd)) {
		array_push($errors, "Password is Required!");
	}


//session exercise
	if (count($errors) == 0) {
		$pwd = ($pwd); //encrypt password before comparing
		$query = "SELECT * FROM data WHERE username='$username' AND password='$pwd'";
		$result = mysqli_query($connection,$query);
		if (mysqli_num_rows($result) == 1) {		
			//log user in
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are logged in";
			header('location: login.php'); //redirect to index.php page.
		}else{
			array_push($errors, "Wrong Username and Password!");
			header('location: index.php');
		}
	}
}


?>