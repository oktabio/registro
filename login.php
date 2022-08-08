<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<?php require 'partials/header.php' ?>

	<h1>ingresa</h1>
		<span>o <a href="registro.php">Registrate</a></span>

<form action="login.php" method="post">

	<input type="text" name="email" placeholder="ingrese su email">
	<input type="password" name="contraseña" placeholder="indrese su contraseña">
	<input type="submit" value="send">
	

</form>

</body>
</html>