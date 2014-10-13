<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/login.css">
	<script type="text/javascript" src="assets/validations.js"></script>
	<title>wideaShare</title>
</head>
<body>
	<div id="header">
		<h1><span id="head_title"> ideaShare </span></h1>
	</div>
	<div id="signup_form">
		<form name="signup" method="post" id="regLog_form" onsubmit="return validateForm()" action="">
			<input type="text" name="username" placeholder="Username" class="form_field" autofocus>
			<input type="password" name="pass" placeholder="Password" class="form_field">
			<input type="password" name="pass_confirm" placeholder="Confirm Password" class="form_field">
			<input type="email" name="email_id" placeholder="Email" class="form_field">
			<div id="btn_div"><button type="submit" name="btn_submit" id="btn_login">Signup</button><button type="reset" name="btn_signup" id="btn_signup">Reset</button></div>
		</form>
	</div>
	<div id="footer">&copy; Nishad Dawkhar</div>
</body>
</html>