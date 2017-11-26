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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
					handleRecievedData(this.responseText);
					// clear sender box
					// alert();
					document.getElementById('msg_snd_txt').value = '';
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
			var lastReadLine = document.getElementById("last_read_line").value;
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
	.msg_reciever {
		height: 70%;
		/*background: #fff;*/
		overflow: scroll;
	}

	.userhighlight {
		color: #225bb7;
	}

</style>
<body>

<input type="hidden" id="from_user" value="<?php echo($_SESSION['user_session']) ?>">
<input type="hidden" id="last_read_line" value="0">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">C H A T</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo($_SESSION['user_session']) ?></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>





<div class="container">
<br>
<br>
<br>
<br>

<div class="form-group">
<div class="msg_reciever" style="max-height: 300px; overflow-y: scroll;" id="msg_rcvr"></div>
</div>

<div class="form-group">
	<textarea class="msg_sender_text form-control" id="msg_snd_txt"> </textarea>
</div>
  
<div class="form-group">
		<button class="sender_btn btn btn-primary btn-block" style="font-size: 200%" onclick="setMessage()">S E N D</button>
</div>

</div>
<script type="text/javascript">
	document.getElementById('msg_snd_txt').value = 'Iam on line';
	setMessage();

	setInterval(function() {
		getMessage();
    }, 3000);

</script>
</body> 
</html>