<?php
//*******************************************************************************************
function afficheFormulaireModificationAccueil(){
	
// connexion BDD
	// requete pour récuperer les infos a modifier
	$madb = new PDO('sqlite:bdd/bdd.sqlite');
	$requete="SELECT * FROM administration WHERE id = 'Accueil'";
	$resultat = $madb->query($requete);
	$tab_modif = $resultat->fetch(PDO::FETCH_ASSOC);

?>
<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
<fieldset> 
<legend>Accueil</legend>
<label for="id_mail">Image : </label><input type="text" name="imageAccueil" id="id_image_modif" required size="20" value="<?php  echo $tab_modif["image"]; ?>" />
<label for="id_mail">Taille : </label><input type="text" name="TailleAcceuil" placeholder="max 43%"  id="id_image_modif" size="20" value="<?php  echo $tab_modif["titre"]; ?>" /><br/>
<label for="id_pass">Texte : </label><br><textarea name="textAccueil" id="id_text" rows="8" cols="70"><?php echo $tab_modif["contenu"]; ?></textarea><br/>
<input type="submit" name="ValiderModifier" value="Modifier"/>
</fieldset>
</form>
<?php
echo "<br/>";	

}
//*******************************************************************************************
function afficheFormulaireModificationEvenements(){
	
// connexion BDD
	// requete pour récuperer les infos a modifier
	$madb = new PDO('sqlite:bdd/bdd.sqlite');
	$requete="SELECT * FROM administration WHERE id = 'Evenements'";
	$resultat = $madb->query($requete);
	$tab_modif = $resultat->fetch(PDO::FETCH_ASSOC);

?>
<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
<fieldset> 
<legend>Evenements</legend>
<label for="id_mail">Image : </label><input type="text" name="imageEvenements" id="id_image_modif" required size="20" value="<?php  echo $tab_modif["image"]; ?>" />
<label for="id_mail">Taille : </label><input type="text" name="TailleEvenement" id="id_image_modif" size="20" value="<?php  echo $tab_modif["titre"]; ?>" /><br/>
<label for="id_pass">Texte : </label><br><textarea name="textEvenements" id="id_text" rows="8" cols="70"><?php echo $tab_modif["contenu"]; ?></textarea><br/>
<input type="submit" name="ValiderModifier" value="Modifier"/>
</fieldset>
</form>
<?php
echo "<br/>";	
// var_dump($_POST);
}
//*******************************************************************************************
function afficheFormulaireModificationCompetition($num){
	
// connexion BDD
	// requete pour récuperer les infos a modifier
	$madb = new PDO('sqlite:bdd/bdd.sqlite');
	$Num= $madb->quote($num);
	$requete="SELECT * FROM administration WHERE id = $Num";
	$resultat = $madb->query($requete);
	$tab_modif = $resultat->fetch(PDO::FETCH_ASSOC);

?>
<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
<fieldset> 
<legend><?php echo $num; ?></legend>
<label for="id_mail">Titre : </label><input type="text" name="Titrecompetition" id="id_image_modif" required size="60" value="<?php  echo $tab_modif["titre"]; ?>" /><br/>
<label for="id_pass">Texte : </label><br><textarea name="textComptition" id="id_text" rows="8" cols="70"><?php echo $tab_modif["contenu"]; ?></textarea><br/>
<input type="submit" name="ValiderModifier" value="<?php echo($num); ?>"/>
</fieldset>
</form>
<?php
echo "<br/>";	

}


// Abygaelle CHARLOT BATTELE (Qualifs=23/23, Poussin F.)
// Alexis DEDIEU (Qualifs=6/24, finaliste=5/24, Benjamin H.)
// Lucas FABULET (Qualifs=3/15, finaliste=5/15, Poussin H.)
// Méline GALLARD (Qualifs=7/11, finaliste=4/11, Minime F.)
// Lola GENTILHOMME (Qualifs=1exc/11, podium 3ème place Minime F.)
// Eliot GUEGAN (Qualifs=1exc/15, podium 2ème place Poussin H.)
// Swan LANCELOT (Qualifs=1exc/23, finaliste=4exc/23, Poussin F.)
// Lena LE MOUILLOUR (Qualifs=21/23, Poussin F.)
// Alwenna LE VISAGE (Qualifs=12/23, Poussin F.)
?>