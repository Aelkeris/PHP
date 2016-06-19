<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>


<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>

<?php
if(isset($_SESSION['login_user'])!=true)
{
	echo "<div id='login'>
		<h4>Login</h4>
		<form action='' method='post'>
		<label>UserName :</label>
		<input id='name' name='username' placeholder='username' type='text'>
		<br/>
		<label>Password :</label>
		<input id='password' name='password' placeholder='password' type='password'>
		<br/>
		<input name='submit' type='submit' value='Login'>
		<br/>
		<span><?php echo $error; ?></span>
		</form>
		<a href='registracija_forma.php'>Registracija</a>
		</div>";
}
		
  ?>
		<!--
		<div id="login">
		<h4>Login</h4>
		<form action="" method="post">
		<label>UserName :</label>
		<input id="name" name="username" placeholder="username" type="text">
		<br/>
		<label>Password :</label>
		<input id="password" name="password" placeholder="password" type="password">
		<br/>
		<input name="submit" type="submit" value=" Login ">
		<br/>
		<span></span>
		</form>
		<a href="registracija_forma.php">Registracija</a>
		</div>
-->
	</body>
</html>