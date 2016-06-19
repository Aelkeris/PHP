<?php
require 'funkcije.php';
require 'konekcija.php';

$username=htmlspecialchars($_POST["username"]);
$email=htmlspecialchars($_POST["email"]);
$password=htmlspecialchars($_POST["pass"]);

echo $email;

if(postojiLiKorisnik($username,$email))
{
	
}
else
{
	upisKorisnika($username,$email,$password);
}














?>

