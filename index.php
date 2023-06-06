<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Login Rookiex</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type="text/css" href="admin/css/bootstrap.css" />
		<link rel = "stylesheet" type="text/css" href="admin/css/style.css" />
	</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" style="background-color:#000066;">
		<div class="container-fluid">
			<label class="navbar-brand" id="title">Compilador Rookiex</label>
		</div>
	</nav>
	<?php include 'login.php'?>
	<div id = "footer">
		<label class = "footer-title">&copy; Copyright Rookiex <?php echo date("Y", strtotime("+8 HOURS"))?></label>
	</div>
</body>
</html>