<?php

session_start();
require_once('rules.php');

if (!isset($_SESSION['user_session'])) {
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

	<script type="text/javascript">
		function setMessage() {
			var url = "write.php";
			// Create our XMLHttpRequest object
			var hr = new XMLHttpRequest();
			// Create some variables we need to send to our PHP file
			var fu = document.getElementById("from_user").value;
			var msg = document.getElementById("msg_snd_txt").value;
			var lastReadLine = document.getElementById("last_read_line").value;
			var dataToSend = "from_user=" + fu + "&message=" + msg + "&last_read_line=" + lastReadLine;
			hr.open("POST", url, true);
			hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			// Access the onreadystatechange event for the XMLHttpRequest object
			hr.onreadystatechange = function() {
				if(hr.readyState == 4 && hr.status == 200) {
					handleRecievedData(this.responseText)
				}
			}
			// Send the data to PHP now... and wait for response to update the status div
			hr.send(dataToSend); // Actually execute the request
			// document.getElementById("status").innerHTML = "processing...";
        }

        function getMessage()
        {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				handleRecievedData(this.responseText)
			}
			};
			xhttp.open("GET", "read.php?last_read_line=" + lastReadLine, true);
			xhttp.send();
        }

        function handleRecievedData(res)
        {
        	var responseData = JSON.parse(res);
			var oldData = document.getElementById("msg_rcvr").innerHTML;
			// append data to reciever
			document.getElementById("msg_rcvr").innerHTML = oldData + responseData.data;
			// scroll to bottom automatically
			document.getElementById("msg_rcvr").scrollTop = document.getElementById("msg_rcvr").scrollHeight;
            // update offset i.e last read line
			document.getElementById("last_read_line").value = responseData.lastReadLine;
        }

			// setInterval(function() {
			// getMessage();
			// }, 5000);
</script>
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
		/*background: #009688;*/
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
		width: 100%;
		height: 95%;
	}

/*	.left_nav {
		float: left;
		background: #fff;
		width: 20%;
		height: 95%;
		overflow: scroll;
	}*/

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

	.msg_reciever {
		height: 70%;
		background: #fff;
		overflow: scroll;
	}

	.msg_sender {
		height: 30%;
		background: #ccc;
	}

	.msg_sender_text {
		width: 89%;
	}

	.sender_btn {
		width: 10%;
		height: 167px;
		float: right;
	}

	.userhighlight {
		color: #225bb7;
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
					<span><?php echo($_SESSION['user_session']) ?></span>
				</li>
				<input type="hidden" id="from_user" value="<?php echo($_SESSION['user_session']) ?>">
				<input type="hidden" id="last_read_line" value="0">
			</ul>
		</div>

<!-- 		<div class="left_nav">
			<ul class="user_list">
				
			</ul>
		</div> -->

		<div class="right_nav">
			
			<div class="msg_reciever" id="msg_rcvr">
				
			</div>

			<div class="msg_sender">
				<textarea rows="10" class="msg_sender_text" id="msg_snd_txt">
				</textarea>
				<button class="sender_btn" onclick="setMessage()">send</button>
			</div>

			<!-- <h1> Hi <?php echo($_SESSION['user_session']) ?>, Welcome to dahsboard </h1> -->
		</div>
	</div>
</body> 
</html>