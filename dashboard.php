<?php

session_start();
require_once('rules.php');

if (!isset($_SESSION['test'])) {
    header('Location: /');
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

<style type="text/css">
	.logout {
		color: #fff;
	}
	.container {
		width: 100%;
		background: #fff;
		/*background: #ccc;*/
		height: 600px;
	}
	.navbar {
		display: inline-block;
		width: 100%;
		height: 53px;
		background: #009688;
	}

	.nav_items > li {
		color: #fff;
		display: inline;
		margin-top: -2px;
    list-style: none;
    float: right;
    padding-right: 20px;
	}

	.right_nav {
		float: right;
		background: #fff;
    width: 80%;
    height: 100%;
	}

		.left_nav {
			float: left;
		background: #fff;
    width: 20%;
    height: 100%;
    overflow: scroll;
	}

	.user_list {
		    line-height: 40px;
    list-style: none;
    margin-left: -34px;
    margin-right: auto;
    text-align: left;	
	}

	.user_list > li {
		    background: #fff;
    border: 2px solid #fff;
    padding: 7px;
    border-bottom: 1px solid #ccc;
	}

	.user_img {
		width: 32px;
    height: 32px;
    margin-bottom: -10px;
	}

	body {
		    display: flex;
    margin: 0px ;
	}
</style>
<body>

	<div class="container">
		<div class="navbar">
			<ul class="nav_items">
				<li>
					<a href="logout.php" class="logout"> Logout </a>
				</li>
				<li>
					<span><?php echo($_SESSION['test']) ?></span>
				</li>
			</ul>
		</div>

		<div class="left_nav">
				<ul class="user_list">
				<?php
                $variable = range(0, 100);
                foreach ($variable as $key => $value) {
                    echo "<li> <img src='public/bg.png' class='user_img'> string </li>";
                }
                ?>
                </ul>
		</div>

		<div class="right_nav">
			
		<h1> Hi <?php echo($_SESSION['test']) ?>, Welcome to dahsboard </h1>
		</div>
	</div>


</body> 
</html>