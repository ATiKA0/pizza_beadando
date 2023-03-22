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
	
		<h2>Kosár</h2>
		<div>
			<table>
<?php
	if(isset($_SESSION["kosarba"])){
		echo'	<tr>
			<th>Pizza</th>
			<th>Ár</th>
			<th style="width: 15%;">Darabszám</th>
			</tr>';
		$csat = mysqli_connect('localhost', 'root', '', 'pizza');
		$query = 'SELECT pizza.nev, pizza.osszetev, pizza.ar, SUM(kosar.darabsz) AS darabok FROM pizza.pizza JOIN kosar.kosar ON pizza.pizza.id=kosar.kosar.rendid GROUP BY pizza.id';
		$result = mysqli_query($csat, $query);
		while($rows=mysqli_fetch_array($result))
			echo'<tr>
				<td>'.$rows["nev"].'<br>('.$rows["osszetev"].')</td>
				<td>'.$rows["ar"].'</td>
				<td>'.$rows["darabok"].'</td>
			</tr>';
			echo'<tr><td></td><td></td><td><form method="POST"><button type="submit" name="torol" id="torol" >Törlés</button></form></td></tr>';
	}
	else{
		echo'<h1>Az Ön kosara üres!</h1>';
	}
	if(isset($_POST["torol"])){
		session_unset();
		$csatlak = mysqli_connect('localhost', 'root', '', 'kosar');
		$tquery='DELETE FROM kosar';
		$ttquery='ALTER TABLE kosar AUTO_INCREMENT = 1';
		mysqli_query($csatlak, $tquery);
		mysqli_query($csatlak, $ttquery);
		mysqli_close($csatlak);
		header("Location:kosar.php");
	}
?>
			</table>
		</div>
	</content>
	</div>
	<footer>
		<ul>
			<li><a>Tel.: +36(69) 302 589</a></li>
			<li><a>E-mail: pizza@pizza.hu</a></li>
		</ul>
	</footer>
</body>
</html>