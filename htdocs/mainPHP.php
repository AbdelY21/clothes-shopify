<main>
	<?php
	
	/* Verbindung mit der Datenbank*/
	function verbindung_Datenbank(){
		$db_host = "localhost";
		$db_user = "root";
		$db_password = "";
		$db_name = "clothes";

		$connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);

		if(!$connect)
			die('Keine Verbindung Datenbank');

		return $connect;
	}
	?>
</main>