<?php include('fonction.php');
	
		entete();
?>


	<form method="post" action="formulairerecu.php">
	<p>
	<label for="nomvisiteur"> Nom * </label>
	<input type="text" name="nom" id="nomvisiteur" size="37">
	</p>
	<p>
	<label for="prenomvisiteur"> Prénom * </label>
	<input type="text" name="prenom" id="prenomvisiteur" size="34">
	</p>
	<p>
	<label for="email"> Email * </label>
	<input type="email" name="email" id="emailvisiteur" size="36">
	</p>
	<p>
	<label for="tel"> Téléphone </label>
	<input type="tel" name="tel" id="tel" size="10">
	</p>
	<p>
	<label for="choix"> Demande * </label>
	<select onclick="">
			<option>Bug</option>
			<option>Amélioration</option>
			<option>Autre</option>
	</select>
	</p>
	<p>
	<label for="visite"> Première visite * </label>
	<label> Oui </label>
	<input type="radio" name="premierevisite" value="Oui" id="Oui"/>
	<label> Non </label>
	<input type="radio" name="premierevisite" value="Non" id="Non"/>
	</p>
	<p>
	<label for="message"> Message * </label>
	<br/>
	<br/>
	<textarea name="lemessage" id="lemessage"></textarea>
	</p>
	<p>
	<input type="submit" name="Envoi" id="Envoi"/>
	</p>
	</form>
</body>
<footer>
		<h5>&copy; RM 2014, Rémi et Cédric Groupe 2</h5>	
	</footer>
</html>
