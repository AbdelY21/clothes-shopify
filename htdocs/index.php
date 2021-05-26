<?php include "header.php" ?>
<main>
	<img src="Logos/Shopify_Logo.jpg" id="index_logo">
	<form action="index.inc.php" method="post">
		<div id="detail_suche">
			<div class="container">
				<h3>Marken</h3>
				<div id="index_marken">
					<!-- <input type="checkbox" name="marke[]" value="Nike"> Nike
					<input type="checkbox" name="marke[]" value="Adidas"> Adidas
					<input type="checkbox" name="marke[]" value="Puma"> Puma
					<input type="checkbox" name="marke[]" value="Reebok"> Reebok -->

                    <input type="radio" id="nr" name="Marke" value="Nike">
                    <label for="nr"> Nike</label>
                    <input type="radio" id="ar" name="Marke" value="Adidas">
                    <label for="ar"> Adidas</label>
                    <input type="radio" id="pr" name="Marke" value="Puma">
                    <label for="pr"> Puma</label>
                    <input type="radio" id="rr" name="Marke" value="Reebok">
                    <label for="rr"> Reebok</label>
				</div>
			</div>

			<div class="container">
				<h3>Kleidung</h3>
				<div id="index_collection">
					<select name="collection">
                        <option value="Bitte auswählen"> Bitte auswählen </option>
						<option value="T-Shirts"> T-Shirts </option>
						<option value="Pullover"> Pullover </option>
						<option value="Jacke"> Jacke </option>
						<option value="Hoodies - Sweatshirts"> Hoodies - Sweatshirts </option>
					</select>
				</div>
			</div>
			<div class="container">
				<h3>Größe</h3>
				<div id="index_groesse">
                    <select name="groesse">
                        <option value="Bitte eine Größe auswählen"> Bitte eine Größe auswählen </option>
                        <option value="S"> S</option>
                        <option value="M"> M</option>
                        <option value="L"> L</option>
                        <option value="XL"> XL</option>
                    </select>
				</div>		
			</div>
			<div class="container">
				<h3>Farbe</h3>
				<div id="index_farbe">
                    <select name="farbe">
                        <option value="Bitte die Farbe auswählen"> Bitte die Farbe auswählen</option>
                        <option value="Weiss"> Weiss</option>
                        <option value="Schwarz"> Schwarz</option>
                        <option value="Grau"> Grau</option>
                        <option value="Blau"> Blau</option>
                    </select>
				</div>		
			</div>
			<div class="container">
				<h3>Geschlecht</h3>
				<div id="index_ks">
					<!--<input type="checkbox" name="sex[]" value="Men"> Männer
					<input type="checkbox" name="sex[]" value="Women"> Frauen-->

                    <input type="radio" id="mr" name="Sex" value="Men">
                    <label for="mr"> Männer</label>
                    <input type="radio" id="fr" name="Sex" value="Women">
                    <label for="fr"> Frauen</label>
				</div>
			</div>
            <div class="container">
                <h3>Preis</h3>
                <div id="index_preis">
                    <label>Von:</label>
                    <select name="preis">
                        <option value="0">0 &euro;</option>
                        <option value="10">10 &euro;</option>
                        <option value="20">20 &euro;</option>
                        <option value="30">30 &euro;</option>
                        <option value="40">40 &euro;</option>
                        <option value="50">50 &euro;</option>
                        <option value="60">60 &euro;</option>
                        <option value="70">70 &euro;</option>
                        <option value="80">80 &euro;</option>
                        <option value="90">90 &euro;</option>
                        <option value="100">100 &euro;</option>
                        <option value="110">110 &euro;</option>
                        <option value="120">120 &euro;</option>
                        <option value="130">130 &euro;</option>
                        <option value="140">140 &euro;</option>
                        <option value="150">150 &euro;</option>
                    </select>
                    <label>Bis:</label>
                    <select name="preis_bis">
                        <option value="10">10 &euro;</option>
                        <option value="20">20 &euro;</option>
                        <option value="30">30 &euro;</option>
                        <option value="40">40 &euro;</option>
                        <option value="50">50 &euro;</option>
                        <option value="60">60 &euro;</option>
                        <option value="70">70 &euro;</option>
                        <option value="80">80 &euro;</option>
                        <option value="90">90 &euro;</option>
                        <option value="100">100 &euro;</option>
                        <option value="110">110 &euro;</option>
                        <option value="120">120 &euro;</option>
                        <option value="130">130 &euro;</option>
                        <option value="140">140 &euro;</option>
                        <option value="150">150 &euro;</option>
                    </select>
                </div>
            </div>
			<input type="submit" name="submit" value="Suchen" class="button">
		</div>
	</form>
</main>
<?php include "footer.php" ?>
