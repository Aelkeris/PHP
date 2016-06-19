<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = new mysqli("localhost","Admin","1234567890","php_projekt");

session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=$connection->query("select username from korisnici where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>