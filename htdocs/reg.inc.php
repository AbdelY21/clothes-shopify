	<?php include "header.php" ?>
	<?php include "mainPHP.php"; ?>
	<main>
		<?php 

		if(isset($_POST['submit'])){

			$connect = verbindung_Datenbank();


			$vorname = $_POST['vorname'];
			$nachname = $_POST['nachname'];
			$strasse = $_POST['strasse'];
			$plz = $_POST['plz'];
			$stadt = $_POST['stadt'];
			$username = $_POST['benutzername'];
			$email = $_POST['email'];
			$passwort = $_POST['password'];
			$password_check = $_POST['password_check'];

			/* Säubert den String vor Hackerangriffen*/
			$vorname = mysqli_real_escape_string($connect, $vorname);
			$nachname = mysqli_real_escape_string($connect, $nachname);
			$strasse = mysqli_real_escape_string($connect, $strasse);
			$plz = mysqli_real_escape_string($connect, $plz);
			$stadt = mysqli_real_escape_string($connect, $stadt);
			$username = mysqli_real_escape_string($connect, $username);
			$email = mysqli_real_escape_string($connect, $email);
			$passwort = mysqli_real_escape_string($connect, $passwort);
			$password_check = mysqli_real_escape_string($connect, $password_check);



			$sqlab_user ="SELECT user_bnt FROM user WHERE user_bnt = '$username'";
			$result = mysqli_query($connect, $sqlab_user);

			$num = mysqli_num_rows($result);
			/* Eingaben des Users überprüfen*/
			if($num>0){
				echo"<div class='alert'>";
				echo'Dieser Benutzername existiert bereits<br>';
				echo"<a href='registrieren.php'>Zurück zur Registration</a><br>";
				echo"</div>";
				

			}else if(empty($vorname)|| empty($nachname)|| empty($strasse)|| empty($plz)|| empty($username)|| empty($email)||empty($passwort)|| empty($password_check)|| empty($vorname)){
				/*Zurück zur Registration*/
				header("Location: ../registrieren.php");
			}elseif($passwort !== $password_check){
				echo"<div class='alert'>";
				echo" Die Passwörterstimmen nicht überein bitte nocheinmal.<br>";
				echo"<a href='registrieren.php'>Zurück zur Registration</a><br>";
				echo"</div>";		
			}else{
				
				/* Passwort hashen*/
				$passwort = password_hash($passwort, PASSWORD_BCRYPT, array('cost' => 10));
				
				$img = 'user_logo.jpg';
				/* Einfügen in die Datenbank*/
				$sqlab= "INSERT INTO user (user_vn, user_nn, user_str, user_plz, use_std, user_bnt, user_email, user_pw, user_img)";
				$sqlab.=" VALUES ('$vorname', '$nachname', '$strasse', '$plz', '$stadt', '$username', '$email', '$passwort' , '$img')";

				$sql = mysqli_query($connect, $sqlab);
				if($sql == true){
					echo"<div class='alert'>";
					echo "Registrierung erfolgreich<br>";
					echo"<a href='index.php'>Zurück zur Startseite</a><br>";
					echo"</div>";
				}

				/*Fehler rückgabe Datenbank */
				if(!$sql){
					die('Query FAILD'. mysqli_error($connect));
				}

				

	//ende if abfrage
			}

//ende isset	
		}
		?>
		
	</main>
	<?php include "footer.php" ?>