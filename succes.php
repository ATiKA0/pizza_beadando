<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Pizza</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta http-equiv="refresh" content="3;url=http://atika00707.dynu.net/index.php" />
</head>
<body>
	<h1>Pizza</h1>
<?php
	$current_page = $_GET['g'];
	if($current_page == 1){
		echo'<div class="container">
				<div>A regisztráció sikeres!</div>
			</div>';}
	else{
		echo'<div class="container-f">
				<div>Valami hiba történt! Próbálja meg újra!</div>
			</div>';
	}
?>
</body>
</html>