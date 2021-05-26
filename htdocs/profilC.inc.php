
<?php include "mainPHP.php"?>
<?php include "header.php" ?>
<main>
	<?php
	if(isset($_POST['submit'])){
		$connect = verbindung_Datenbank();

		$sqlab = "update user set"
		." user_nn ='".$_POST['nn']."', "
		." user_vn ='".$_POST['vn']."',"
		." user_str ='".$_POST['str']."', "			
		." user_plz ='".$_POST['plz']."', "
		." use_std ='".$_POST['std']."', "
		." user_email ='".$_POST['email']."'"
		." WHERE user_bnt = '".$_SESSION["user"]."'";

		$sql = mysqli_query($connect, $sqlab);
		$num = mysqli_affected_rows($connect);

		if($num>0){
			echo "<p>Der Datensatz wurde geändert </p>";
			header("Location:index.php");
		}else{
			echo "<p>Der Datensatz wurde nicht geändert</p>";
		}
	}
	?>

	<?php
	if(isset($_POST['update_pw'])){
		$connect = verbindung_Datenbank();

		$alt_pw = $_POST['alt_pw'];
		$neues_pw = $_POST['neues_pw'];
		$neues_pw_check = $_POST['neues_pw_check'];


		/* Säubert den String vor Hackerangriffen*/
		$alt_pw = mysqli_real_escape_string($connect, $alt_pw);
		$neues_pw = mysqli_real_escape_string($connect, $neues_pw);
		$neues_pw_check = mysqli_real_escape_string($connect, $neues_pw_check);

		if(empty($alt_pw) || empty($neues_pw)  || empty($neues_pw_check)){
			echo 'Eingabe Ungülltig<br>';
			echo "<a href='profil.php'>Zur&uuml;ck zum Profil</a>";
		}else{
			$sqlab = " SELECT * FROM user WHERE user_bnt = '".$_SESSION['user']."' ";
			$result = mysqli_query($connect, $sqlab);

			if(!$result){
				die("Querry FAILD".mysqli_error($connect));
			}

			$dsatz = mysqli_fetch_assoc($result);
			$db_user_pw = $dsatz['user_pw'];

			//passwort verifizieren
			if(!password_verify($alt_pw, $db_user_pw)){
				echo 'Altes Passwort stimmt nicht überein<br>';
				echo "<a href='profil.php'>Zur&uuml;ck zum Profil</a>";
			}else if($neues_pw !== $neues_pw_check){
				echo" Die neuen Passwörter stimmen nicht überein.<br>";
				echo"<a href='profil.php'>Zur&uuml;ck zum Profil</a><br>";		
			}else{
				/* Passwort hashen*/
				$neues_pw = password_hash($neues_pw, PASSWORD_BCRYPT, array('cost' => 10));

				$sqlab = "update user set"
				." user_pw ='$neues_pw'"
				." WHERE user_bnt = '".$_SESSION["user"]."'";
				$sqlab = mysqli_query($connect, $sqlab);
				$num = mysqli_affected_rows($connect);
				

				if($num>0){
					header("Location:index.php");
				}else{
					echo "<p>Der Datensatz wurde nicht geändert</p>";
					echo"<a href='profil.php'>Zur&uuml;ck zum Profil</a><br>";
				}

			}
		}
		//ende isset
	}

	?>
</main>
<?php include "footer.php" ?>
