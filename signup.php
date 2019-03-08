<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/bootstrap.min.js">
	<script type="text/javascript">
		function check()
		{
			var email = document.forms["signForm"]["email"];
			var Password = document.forms["signForm"]["password"];
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

			if(email.value == "")
			{
				document.getElementById("email_error").innerHTML = "Ban chua nhap Email!";
				email.focus();
				return false;
			}else if (!filter.test(email.value))
			{
				document.getElementById("email_error").innerHTML = "Hay nhap dia chi email hop le!";
				email.focus();
				return false;
			}else if(password.value == ""){
				document.getElementById("password_error").innerHTML = "Ban chua nhap password!";
				Password.focus();
				return false;
			}else{
				return true;
			}
		}
	</script>
	
</head>
<body>
	<div class="container">
		<div class="row mt-3">
			<div class="col-lg-4">
				<form action="" method="POST" name="signForm" onsubmit="return check()">
					<div class="form-group">
						<label for="email">Email: </label>
						<input type="email" name="email" id="email" class="form-control">
						<p id="email_error"></p>
					</div>
					<div class="form-group">
						<label>Password: </label>
						<input type="password" name="password" id="password" class="form-control">
						<p id="password_error"></p>
					</div>
					<button type="submit" name="submit" id="submit" class="btn btn-primary">Creat an account</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>