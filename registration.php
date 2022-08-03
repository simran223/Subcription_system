<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>

	<link rel="stylesheet" href="style.css">
</head>
<body>

<form style="margin-top: 70px; margin-left: 500px;">
	<h3 >Create Account</h3>
	    <label for="name">Username*</label><br>
        <input type="text" name="name" id="name" required="name"><br><br>
               
        <label for="email">Email*</label><br>
        <input type="email" name="email" id="email" required="email"><br><br>
        
        <label for="pass">Password*</label><br>
		<input type="password" name="pass" id="pass" required="pass"><br><br>
        
        
	    <input type="checkbox" name="remember" id="remember" style="width:15px; height: 15px;">
	    <label for="remember">Remember Me</label><br><br>
        
        <input type="submit" name="submit" id="submit" value="Sign up" style="width:207px; height:fit-content; color: white; background-color: midnightblue;"><br><br>
        
        <a href="login.php" style="text-align: center; font-size: small;">Already have a account? Login</a>
       
</form>
</body>
</html>