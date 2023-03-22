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
	
		<h2>Étlap</h2>
		<div>
			<table>
				<tr>
					<th>Pizza</th>
					<th>Ár</th>
					<th style="width: 15%;">Rendelés</th>
				</tr>
				
<?php
	$csat = mysqli_connect('localhost', 'root', '', 'pizza');
	$query = 'SELECT * FROM pizza';
	$result = mysqli_query($csat, $query);
	while($vege= mysqli_fetch_array($result))
	if($vege){
			echo'<tr>
				<td>'.$vege["nev"].'<br>('.$vege["osszetev"].')</td>
				<td>'.$vege["ar"].'</td>
				<td>Darabszám:<br>
					<form method="POST"><input name="darab" id="darab" maxlength="3">
					<button type="submit" name="kosar" id="kosar" value="'.$vege["id"].'">Kosár</button></form></td>
			</tr>';
	}
?>
<?php
				if(isset($_POST["kosar"])){
					$csatlak = mysqli_connect('localhost', 'root', '', 'kosar');
					$rendid= $_POST["kosar"];
					$rendarab= $_POST["darab"];
					$querrry = "INSERT INTO kosar (id, rendid, darabsz) VALUES (NULL, '$rendid', '$rendarab');";
					mysqli_query($csatlak, $querrry);
					unset($_POST["kosar"]);
					unset($_POST["darab"]);
					$_SESSION["kosarba"] = "igen";
				}
?>
			</table>
		</div>
	</content>
	<section style="padding: 30px;"></section>
	
	<footer>
		<ul>
			<li><a>Tel.: +36(69) 302 589</a></li>
			<li><a>E-mail: pizza@pizza.hu</a></li>
		</ul>
	</footer>
	
</body>
</html>