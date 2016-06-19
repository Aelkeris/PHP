<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	}
	else
		{
				// Define $username and $password
				$username=$_POST['username'];
				$password=$_POST['password'];
				// Establishing Connection with Server by passing server_name, user_id and password as a parameter
				$connection = new mysqli("localhost","Admin","1234567890","php_projekt");
				// To protect MySQL injection for Security purpose
				$username = stripslashes($username);
				$password = stripslashes($password);
				$username = mysqli_real_escape_string($connection,$username);
				$password = mysqli_real_escape_string($connection,$password);
				// Selecting Database
						
				// SQL query to fetch information of registerd users and finds user match.
				$query = $connection->query("select * from korisnici where password='$password' AND username='$username'");
				$rows = mysqli_num_rows($query);
						if ($rows == 1) 
						{
						$_SESSION['login_user']=$username; // Initializing Session
						header("location: profile.php"); // Redirecting To Other Page
						} 
						else 
						{
						$error = "Username or Password is invalid";
						}
				mysql_close($connection); // Closing Connection
		}
}



/*
session_start();

$username; //= $_POST['username'];
$password; //= $_POST['password'];

if($username&&$password)
{

	$connect = mysqli_connect("localhost","Admin","1234567890","php_projekt") or die ("Couldnt connect");

	$query = mysqli_query($connect,"SELECT * from korisnici WHERE username='$username'");

	$numrows = $query->num_rows;

	if($numrows!==0)
	{
		while($row = mysqli_fetch_assoc($query))
		{
				$dbusername = (isset($_GET['username']) ? $_GET['username'] : null);
				$dbpassword = (isset($_GET['password']));
			//$dbusername = $row["username"];
			//$dbpassword = $row["password"];
		}

		if($username==$dbusername&&($password)==$dbpassword)
		{
			echo "You are logged in!";
			$_SESSION['username']= $username;
		}
		else
		{
			echo "Your password is incorrect!";
		}
	}
	else
		die("That user doesnt exist!");
}
else
die("Please eneter a username and a password");*/
?>