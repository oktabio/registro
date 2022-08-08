<?php 

require 'database.php';

$message = '';

  if (!empty($_POST['email']) && !empty($_POST['contraseña'])) {
    $sql = "INSERT INTO usuarios (email, contraseña) VALUES (:email, :contraseña)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
    $stmt->bindParam(':contraseña', $contraseña);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>registro</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<?php require 'partials/header.php' ?>

	<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

	<h1>registrate</h1>
		<span>o <a href="login.php">ingresa</a></span>
<form action="registro.php" method="post">

	<input type="text" name="email" placeholder="ingrese su email">
	<input type="password" name="contraseña" placeholder="indrese su contraseña">
	<input type="password" name="confirma_contraseña" placeholder="confirme su contraseña">
	<input type="submit" value="send">

</form>

</body>
</html>