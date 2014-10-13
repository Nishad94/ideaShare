<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/login.css">
	<script type="text/javascript" src="assets/validations.js"></script>
	<title>ideaShare</title>
</head>
<body>
	<div id="header">
		<h1><span id="head_title"> ideaShare </span></h1>
	</div>
	<div id="login_form">
		<form name="login" id="regLog_form" method="post" onsubmit="return validateForm()" action="">
			<input type="text" name="username" placeholder="Username" id="uname" autofocus>
			<input type="password" name="pass" placeholder="Password" id="pass">
			<div id="btn_div"><button type="submit" name="btn_submit" id="btn_login">Login </button><button type="submit" name="btn_signup" id="btn_signup">Signup</button></div>
		</form>
	</div>
	<div id="footer">&copy; Nishad Dawkhar</div>
</body>
</html>