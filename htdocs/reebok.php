<?php include "header.php" ?>
<?php include "mainPHP.php" ?>
<main>
	<?php
	$connect = verbindung_Datenbank();	

	$sqlab = "SELECT * FROM clothes WHERE clothes_marke = 'Reebok'";
	$result = mysqli_query($connect, $sqlab);

	$num = mysqli_num_rows($result);
	?>
	<div class="treffer">
		<?php
		echo"$num Clothes stehen bereit<br>";
		?>
	</div>
	<div class="allClothes">
		<table >
			<tr>
				<td>Bild</td>
				<td>Marke</td>
				<td>Collection</td>
				<td>Groesse</td>
				<td>Sex</td>
				<td>Farbe</td>
                <td>Preis</td>
			</tr>
			<?php
			while($dsatz = mysqli_fetch_assoc($result)){
                $clothes_bild =	$dsatz['clothes_bild'];
                $clothes_marke =	$dsatz['clothes_marke'];
                $clothes_collection =	$dsatz['clothes_collection'];
                $clothes_groesse =		$dsatz['clothes_groesse'];
                $clothes_sex =	$dsatz['clothes_sex'];
                $clothes_farbe =	$dsatz['clothes_farbe'];
                $clothes_preis =	$dsatz['clothes_preis'];
				echo "<div id='allClothesIn'>";
				echo"<tr>";
				?>
				<td class="bild_clothes"><img  src="Clothes/<?php echo $clothes_bild ?> "></td>
				<?php
                echo"<td>$clothes_marke</td> 
				<td>$clothes_collection</td> 
				<td>$clothes_groesse </td> 
				<td>$clothes_sex </td> 
				<td>$clothes_farbe</td>
				<td>$clothes_preis €</td>";
				echo "</tr>";
				echo "</div>";
			}
			?>
		</table>
	</div>
</main>
<?php include "footer.php" ?>