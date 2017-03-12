<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
</head>
<body>
<?php 
if (!empty($_POST['submit'])) {
	$_SESSION['username'] = $_POST['username'];
	echo "Hello, ".$_SESSION['username'];
	echo '<a href="login1.php">next</a>';
} else {
	$_SESSION['count'] = rand(10,20);
echo " Брой хвърляния: "  . $_SESSION['count']. "<br>";
	$_SESSION['money'] = rand(50,100);
echo "Начална сума: " . $_SESSION['money'];
?>
	<form action="game.php" method="post">
	username<input type="text" name="username">
	password<input type="password" name="password">
	<!-- <input type="hidden" name="count" value="<?php echo $count?> "> -->
	<input type="submit" name="submit" value="login">		
	</form>

	<?php
}


	?>
</body>
</html>