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
			var cfpassword = document.forms["signForm"]["cfpassword"];
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
			}else if(password.value !== cfpassword.value)
			{
				document.getElementById("cfpassword_error").innerHTML = "Mat khau nhap lai khong khop!";
				cfpassword.focus();
				return false;
			}else{
				return true;
			}
		}
	</script>
	<?php
	$message = "";
	if(isset($_POST['submit']))
	{
		if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cfpassword']) )
		{
			$email = $_POST['email'];
			$pass = md5($_POST['password']);

			$dbhost = "localhost";
			$dbuser = "root";
			$dbpass = "";
			$dbname = "OE19_32019";

			$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

			if ($email == "")
			{
				$message .= "Ban chua nhap email!";
			}else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				$message .= "Email khong hop le!";
				return false;
			}else if($pass == "")
			{
				$message .= "Ban chua nhap password!";
				return false;
			}

				//check connection
			if($conn->connect_error)
			{
				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "INSERT INTO user (email, password) VALUES ('$email', '$pass') ";
			if($message === "")
			{
				if($conn->query($sql))
				{
					echo "New record created seccessfully";
				}else
				{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}					
			}
			
			$conn->close();
		}
	} 
	?>
</head>
<body>
	<div class="container">
		<div class="row mt-3">
			<div class="col-lg-4">
				<?php
				if(isset($message)) echo $message;
				?>
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
					<div class="form-group">
						<label>Confirm Password: </label>
						<input type="password" name="cfpassword" id="cfpassword" class="form-control">
						<p id="cfpassword_error"></p>
					</div>
					<button type="submit" name="submit" id="submit" class="btn btn-primary">Creat an account</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>