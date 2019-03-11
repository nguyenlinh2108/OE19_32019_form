<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/bootstrap.min.js">
	<title></title>
	<script type="text/javascript">
		function checkEmail(){
			var email = document.getElementById('email');
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (!filter.test(email.value))
			{
				alert('Hay nhap dia chi email hop le!');
				email.focus();
				return false;
			}
			else
			{
				alert('OK');
			}
		}
	</script>
</head>

<body>
	<div class="container">
		<div class="row mt-3">
			<div class="col-lg-4">
				<form action="" >
					<div class="form-group">
						<label for="email">Email: </label>
						<input type="email" name="email" class="form-control" id="email">
					</div>
					<div class="form-group">
						<label>Password: </label>
						<input type="password" name="password" class="form-control" id="password">
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="checkbox">Remember me</label>
					</div>
					<button type="submit" name="" onclick="checkEmail();" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>