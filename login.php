<?php
	echo '<form method="post">';
	echo '<label for="email">email:</label>';
	echo '<input type="text" id="email" name="email">';
	echo '<label for="password">password:</label>';
	echo '<input type="password" id="password" name="password">';
	echo '<button type="submit">login</button> <br>';
	echo '</form>';


	$email = $_POST['email'];
	$password = $_POST['password'];
?>

