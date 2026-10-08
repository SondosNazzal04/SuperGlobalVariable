<?php
	echo '<form method="post">';
	echo '<label for="link">link:</label>';
	echo '<input type="text" id="link" name="link">';
	echo '<button type="submit">GO</button> <br>';
	echo '</form>';


	$link = $_POST['link'];
	header("Location: ".$link);
	exit();
?>

