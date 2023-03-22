<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Pizza</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<?php
		include("header.php");
	?>
	<content>
	<?php
		$szam=rand(1,3);
		$tomb = explode(";", file_get_contents('content/article'.$szam.'.cnt'));
		for ( $i = 0 ; $i < 1; $i++)
		{
			echo "<h2>$tomb[0]</h2>";
			echo "<p>$tomb[1]</p>";
		}
?>
	</content>
	<section style="padding: 30px"></section>
	<footer>
		<ul>
			<li><a>Tel.: +36(69) 302 589</a></li>
			<li><a>E-mail: pizza@pizza.hu</a></li>
		</ul>
	</footer>
</body>
</html>
