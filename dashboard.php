<?php
session_start();

if ($_SESSION['test']  !== 'dfasdfasdfasdf') {
    header('Location: /');
} else {
    echo "<h1> Dashboard </h1> <br>";
    var_dump($_SESSION['test']);
    echo "<a href='logout.php'> Logout </a> <br>";
}

?>

<!DOCTYPE html>
<html>
<head>
<!-- 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>
<body>

	<div class="container">
	<h1> Hi, Welcome to dahsboard
	</h1>
	</div>

</body> 
</html>