<!DOCTYPE html>
<html>
<head>
<!-- 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>
<style type="text/css">
	.login_box {
		margin-top: 165px;
		margin-left: auto;
		margin-right: auto;
		text-align: center;
		border: 1px solid;
		box-shadow: 10px 10px 5px #888888;
		/*background: #009688;*/
		width: 30%;
		height: 290px;
		border-radius: 5px;
	}

	.login_field {
		margin-bottom: 10px;
		height: 27px;
		width: 85%;
		font-size: 12px;
		color: #000;
	}

	.login_submit {
		width: 85%;
		color: #000;
		font-size: 100%;
	}

</style>
<body style="background-image: url('public/bg.jpg');">

	<div class="login_box">
		<h2 style="color: #fff">L O G I N</h2>
		<form method="POST" action="verify.php">
			<div>
				<input type="password" class="login_field" name="user" placeholder="Enter username">
			</div>
			<div>
				<input type="password" class="login_field" name="pwd_2" placeholder="Enter password 1">
			</div>
			<div>
				<input type="password" class="login_field" name="pwd_3" placeholder="Enter password 2">
			</div>
			<div>
				<button type="submit" class="login_submit">Login</button>
			</div>
		</form>
	</div>

</body> 
</html>
