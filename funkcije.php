<?php

function upisKorisnika($korisnickoime,$lozinka,$eposta)
{
	require 'konekcija.php';
	$query = "INSERT INTO `php_projekt`.`korisnici` (`USERNAME`, `PASSWORD`, `E-MAIL`) 
	VALUES (?, ?, ?)";
	$statement = $conn->prepare($query);

	$statement->bind_param('sss',$korisnickoime,$eposta,$lozinka);
	if($statement->execute())
	{
		echo 'Uspiješno ste se registrirali.<br/>';
	}
	else
	{
		die('Error : ('. $conn->errno .') '. $conn->error);
	}
}


function postojiLiKorisnik($korisnickoime,$eposta)
{
	
	require 'konekcija.php';
	
	if ($result = $conn->query("SELECT * FROM `korisnici` WHERE `USERNAME`='$korisnickoime' OR `E-MAIL`='$eposta'"))
	{
	    while ($row = $result->fetch_assoc()) 
	    {
	    	if($korisnickoime==$row["USERNAME"] || $eposta==$row["E-MAIL"] )
	    	{
	    		echo "Postoji Korisnik sa tim korisnickim imenom ili e-poštom.";
	    		$result->close();
	    		return true;
	    	}
	    	else
	    	{
	    		return false;
	    	}
        
    	}
	   
	}
	   
	
}
?>