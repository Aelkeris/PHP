
<html>
<head>
	<meta charset="UTF-8">
	<script src="jquery-1.12.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./Style/style.css">
</head>
<body>
	<form action="registracija.php" id="registration-form" method="post">
		<h2>Registracija na HR bitcoin portal</h2>
		<div>	  
			<label>
				<span>E-mail</span>
				<input name="email" data-validation="email">
			</label>
			<label>
				<span>Username</span>
				<input name="username" data-validation="length alphanumeric" 
				data-validation-length="3-12" 
				data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)">
			</label>
			<label>
				<span>Password</span>
				<input type="password" name="pass_confirmation" data-validation="length" data-validation-length="min3">
			</label>
			<label>
				<span>Confirm Password</span>
				<input type="password" name="pass" data-validation="confirmation">
			</label>
			<label>
				<input type="submit" value="Validate">
				<input type="reset" value="Reset form">
			</label>
			<div>	  
			</form>



			<!--Donja skripta provjerava gornju formu-->
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.43/jquery.form-validator.min.js"></script>
			<script>
			$.validate({
				form : '#registration-form',
				modules : 'security',
				onError : function($form) {
					alert('Validation of form '+$form.attr('id')+' failed!');
					return false;
				}
  				
			});
			</script>



		</body>
		</html>