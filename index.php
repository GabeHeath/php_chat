<?php
require('includes/core.inc.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>PHP Chat</title>
	<link rel="stylesheet" href="public/css/main.css"></link>
	<script src="scripts/js/jquery-2.1.4.min.js"></script>
	<script src="scripts/js/auto_chat.js"></script>
	<script src="scripts/js/send.js"></script>
</head>
<body>

	<div id="input">
		<div id="feedback"></div>
		<form action="#" method="post" id="form-input">
			<label>Enter Name: <input type="text" name="sender" id="sender" /></label><br>
			<label>Enter Message:</label><br><textarea type="text" name="message" id="message" cols="35" rows="4"></textarea><br>
			<input type="submit" name="send" value="Send Message" id="send" />
		</form>
	</div>

	<div id="messages"></div>

</body>
</html>