<?php include "header.php" ?>
<?php include "mainPHP.php"; ?>

<main>
	<?php	
	if(isset($_POST['submit'])){

		
		$benutzer = $_POST['benutzer'];
		$passwort = $_POST['passwort'];

		$connect = verbindung_Datenbank();

		/* Säubert den String vor Hackerangriffen*/
		$benutzer = mysqli_real_escape_string($connect, $benutzer);
		$passwort = mysqli_real_escape_string($connect, $passwort);

		if(empty($benutzer) || empty($passwort)){
			echo"<div class='alert'>";
			echo 'Eingabe Ungülltig<br>';
			echo"<a href='login.php'>Zurück zum Login</a><br>";
			echo"</div>";
		}else{
			$sqlab = " SELECT * FROM user WHERE user_bnt = '{$benutzer}' ";
			$sqlab2 = " SELECT * FROM clothes WHERE clothes_user = '{$benutzer}' ";

			$result = mysqli_query($connect, $sqlab);
			$result2 = mysqli_query($connect, $sqlab);

			if(!$result){
				die("Querry FAILD".mysqli_error($connect));
			}

			while ($dsatz = mysqli_fetch_assoc($result)) {
				$db_user_id = $dsatz['user_id'];
				$db_user_vn = $dsatz['user_vn'];
				$db_user_nn = $dsatz['user_nn'];		
				$db_user_str = $dsatz['user_str'];
				$db_user_plz = $dsatz['user_plz'];
				$db_user_std = $dsatz['use_std'];
				$db_user_bnt = $dsatz['user_bnt'];
				$db_user_img = $dsatz['user_img'];
				$db_user_pw = $dsatz['user_pw'];
				
			}

			while ($dsatz2 = mysqli_fetch_assoc($result2)) {
				$db_clothes_bild = $dsatz2['clothes_bild'];
			}

			//passwort verifizieren
			if(password_verify($passwort, $db_user_pw)){
				$_SESSION['id'] = $db_user_id;
				$_SESSION['vorname'] = $db_user_vn;
				$_SESSION['nachn'] = $db_user_nn;
				$_SESSION['str'] = $db_user_str;
				$_SESSION['plz'] = $db_user_plz;
				$_SESSION['std'] = $db_user_std;
				$_SESSION['user'] = $db_user_bnt;
				$_SESSION['user_img'] = $db_user_img;
				$_SESSION['clothes_img'] = $db_clothes_bild;
				
				header("Location: index.php");
			}else{
				echo"<div class='alert'>";
				echo"Das Passwort ist falsch <a href='login.php'>Zurück</a>";
				echo"</div>";
			}

		}

	//ende isset
	}
	?>
</main>
<?php include "footer.php" ?>