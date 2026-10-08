<?php
	echo '<form method="post">';
	echo '<label for="num1">num1:</label>';
	echo '<input type="text" id="num1" name="num1">';
	echo '<label for="num2">num2:</label>';
	echo '<input type="text" id="num2" name="num2"><br>';
	echo '<input type="radio" name="operation" value="+" id="+">';
	echo '<label for="+">+</label>';
	echo '<br>';
	echo '<input type="radio" name="operation" value="-" id="-">';
	echo '<label for="-">-</label>';
	echo '<br>';
	echo '<input type="radio" name="operation" value="*" id="*">';
	echo '<label for="*">*</label>';
	echo '<br>';
	echo '<input type="radio" name="operation" value="/" id="/">';
	echo '<label for="/">/</label>';
	echo '<br>';
	echo '<button type="submit">check</button> <br>';
	echo '</form>';

	$num1 = (int) $_POST['num1'];
	$num2 = (int) $_POST['num2'];
	$op = $_POST['operation'];

	$total = 0;
	switch ($op)
	{
		case '+':
			$total = $num1 + $num2;
			break;
		case '-':
			$total = $num1 - $num2;
			break;
		case '*':
			$total = $num1 * $num2;
			break;
		case '/':
			$total = $num1 / $num2;
			break;
	}
	echo "Total = ", $total;
?>

