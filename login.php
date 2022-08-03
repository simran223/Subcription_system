<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form style="margin-top: 90px; margin-left: 500px;">
		<h3 >Login to your account</h3>
	    <label for="name">Username*</label><br>
        <input type="text" name="name" id="name" required="name"><br><br>

        <label for="pass">Password*</label><br>
		<input type="password" name="pass" id="pass" required="pass"><br><br>

		<input type="checkbox" name="remember" id="remember" style="width:15px; height: 15px;">
	    <label for="remember">Remember Me</label><br><br>
        
        <input type="submit" name="submit" id="submit" value="Login" style="width:207px; height:fit-content; color: white; background-color: midnightblue;"><br><br>

        <a href="registration.php" style="text-align: center; font-size: small;">New to MyApp? Sign Up</a>
	</form>
</body>
</html>