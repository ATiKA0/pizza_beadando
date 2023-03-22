<header>

		<h1>Pizza</h1>
		
		<nav>
			<ul>
				<li><a href="index.php">Főoldal</a></li>
				<li><a href="tortenet.php">Történet</a></li>
				<li><a href="etlap.php">Étlap</a></li>
				<li><a href="gallery.php">Galéria</a></li>
				<li><a href="kosar.php">Kosár</a></li>
<?php
	if(isset($_COOKIE["user"])){
		echo'<li><a> Üdvözöllek '.$_COOKIE["user"].' az oldaon!</a></li>
		<li><a href="logout.php">Kijelentkezés</a></li>';
	}
	else{
			echo'<li><a href="javascript:void(0)" onclick= "openForm(1)">Regisztráció</a></li>
			<li><a href="javascript:void(0)" onclick= "openForm(2)">Bejelentkezés</a></li>';
	}
?>
			</ul>
		</nav>
		<div class="form-popup" id="myForm">
		<form action="registration.php" class="form-container" method="POST">
			<h1>Regisztráció</h1>
			
			<label for="inputName">Vezetéknév</label>
			<input type="text" name="first" id="inputName" required>
			<label for="inputName">Keresztnév</label>
			<input type="text" name="last" id="inputName" required>
			<label for="inputEmail">E-mail</label>
			<input type="text" name="email" id="inputEmail" required>
			<label for="inputMessage">Jelszó</label>
			<input type="password" name="pw" id="inputPw" required>

			<button type="submit" class="btn" name="regist">Regisztráció</button>
			<button type="button" class="btn cancel" onclick="closeForm(1)">Bezárás</button>

		  </form>
		</div>
		<div class="form-popup" id="myForm2">
		<form action="login.php" class="form-container" method="POST">
			<h1>Bejelentkezés</h1>

			<label for="inputEmail">E-mail</label>
			<input type="text" name="email" id="inputEmail" required>
			<label for="inputMessage">Jelszó</label>
			<input type="password" name="pw" id="inputPw" required>

			<button type="submit" class="btn" name="login">Bejelentkezés</button>
			<button type="button" class="btn cancel" onclick="closeForm(2)">Bezárás</button>

		  </form>
<?php
	session_start();
	if(isset($_SESSION["message"])){
		echo '<script type="text/javascript">alert("' . $_SESSION['message'] . '");</script>';
		unset($_SESSION['message']);
	}
?>
		</div>
		<script>
		function openForm(a) {
			if(a==1)
			{
				document.getElementById("myForm").style.display = "block";
			}
			else{
				document.getElementById("myForm2").style.display = "block";
			}
		}

		function closeForm(b) {
			if(b==1)
			{
				document.getElementById("myForm").style.display = "none";
			}
			else{
				document.getElementById("myForm2").style.display = "none";
			}
		}
		</script>
	</header>