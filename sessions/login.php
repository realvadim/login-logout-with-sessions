<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<p>
			<a href="./index.php">Index</a>&nbsp;
			<a href="./secret1.php">Secret 1</a>&nbsp;
			<a href="./secret2.php">Secret 2</a>&nbsp;
			<a href="./secret3.php">Secret 3</a>
		</p>
		<form action="" method="POST" name="login">
			<p><label>Username:<br><input type="text" name="un" /></label></p>
			<p><label>Password:<br><input type="password" name="pw" /></label></p>
			<p><input type="submit" name="submit"></p>
		</form>
		<?php
			//include("./auth.php");
			if(isset($_POST["submit"])) {
				if($_POST["un"] == "admin" && $_POST["pw"] == "123456") {
					session_start();
					$_SESSION["authorized"] = 1;
					header("Location: ./index.php");
				}
				else {
					echo "<h1 style='color:red;'>Wrong username/password!</h1>";
				}
			}
		?>
	</body>
</html>
