<?php include "header.php" ?>
<main>
	<div class="clothesplus">
        <form action="clothesplus.inc.php" method="post" enctype="multipart/form-data">
			<select name="marke">
				<option value="Nike">Nike</option>
				<option value="Adidas">Adidas</option>
				<option value="Reebok">Reebok</option>
				<option value="Puma">Puma</option>
			</select>

            <select name="sex">
                <option value="Men">Männer</option>
                <option value="Women">Frauen</option>
            </select>

            <select name="collection">
                <option value="T-Shirts">T-Shirts</option>
                <option value="Pullover">Pullover</option>
                <option value="Jacke">Jacke</option>
                <option value="Hoodies - Sweatshirts">Hoodies - Sweatshirts</option>
            </select>

            <select name="farbe">
                <option value="Weiss">Weiss</option>
                <option value="Schwarz">Schwarz</option>
                <option value="Grau">Grau</option>
                <option value="Blau">Blau</option>
            </select>

            <select name="groesse">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>

			<!-- <input type="text" name="sex" placeholder="Sex">
			<input type="text" name="collection" placeholder="Collection">
			<input type="farbe" name="preis" placeholder="Farbe">
			<input type="text" name="groesse" placeholder="Groesse">-->
			<input type="text" name="preis" placeholder="Preis">


		</div>
		<div id="insert_pic">
			<h3>Hier Bild einfügen</h3>
			<input type="file" name="upload_img" id="upload_img">
			<p><input class="button" type="submit" name="submit" value="Clothes Plus"></p>
		</div>
	</form>
	

	
</main>
<?php include "footer.php" ?>