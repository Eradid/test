
<?php
function competition_1(){
?>
<div class="competition_1 competition_res text-center">
<h5><?php echo recupTitre("competition1");?></h5>
<p id="text_competition"><?php echo recupText("competition1");?></p>
</div>
<?php
}
function competition_2(){
?>
<div class="competition_2 competition_res text-center">
<h5><?php echo recupTitre("competition2");?></h5>
<p id="text_competition"><?php echo recupText("competition2");?></p>
</div>
<?php
}
function competition_3(){
?>
<div class="competition_3 competition_res text-center">
<h5><?php echo recupTitre("competition3");?></h5>
<p id="text_competition"><?php echo recupText("competition3");?></p>
</div>
<?php
}
function competition_4(){
?>
<div class="competition_4 competition_res text-center">
<h5><?php echo recupTitre("competition4");?></h5>
<p id="text_competition"><?php echo recupText("competition4");?></p>
</div>
<?php
}
function seance_baby(){
?>
Baby 4/6 ans <br> 11h - 12h
<?php
}
function seance_perf(){
?>
Cours perf <br> 18h30 - 20h00								   
<?php
}
function seance_mercredi(){
?>
10/11 ans <br> 17h30 - 19h
<?php
}
function seance_adultesA(){
?>
Adultes autonomes <br> 19h30 - 21h00							   
<?php
}
function seance_jeudi1(){
?>
7/8 ans <br> 17h - 18h15
<?php
}
function seance_jeudi2(){
?>
9/10 ans<br> 18h15 - 19h30								   
<?php
}
function seance_ados(){
?>
11/15 ans <br> 18h30 - 20h00
<?php
}
function seance_adultes(){
?>
Adultes autonomes et debutants <br> 19h30 - 22h00
<?php
}


// function compteExiste($login,$pass){
// $retour = false ;
// $madb = new PDO('sqlite:bdd/bdd.sqlite'); 
// $login= $madb->quote($login);
// $pass = $madb->quote($pass);
// $requete = "SELECT login,password FROM comptes WHERE login LIKE ".$login." AND password LIKE ".$pass ;	
// $resultat = $madb->query($requete);
// $tableau_assoc = $resultat->fetchAll(PDO::FETCH_ASSOC);
// if (sizeof($tableau_assoc)!=0) $retour = true;	
// return $retour;
// }
// function isAdmin($login){
// $retour = false ;
// $madb = new PDO('sqlite:bdd/bdd.sqlite');
// $login= $madb->quote($login);
// $requete = "SELECT status FROM comptes WHERE login LIKE ".$login;
// $resultat = $madb->query($requete);
// $tableau_assoc = $resultat->fetch(PDO::FETCH_ASSOC);
// if($tableau_assoc["status"]=="admin") $retour=true;

// return $retour;		
// }


// function recupText($id){
	// $res = "";
	// $madb = new PDO('sqlite:bdd/bdd.sqlite');
	// $id= $madb->quote($id);
	// $requete = "SELECT contenu FROM administration WHERE id=$id";
	// $resultat = $madb->query($requete);
	// $retour = $resultat->fetch(PDO::FETCH_ASSOC);
	// $text=explode( '
// ', $retour["contenu"] );
	// for($i = 0;$i < count($text);$i++){
		// $text[$i]=$text[$i]."<br>";
		// $res = $res.$text[$i];
	// }
	// return $res;
// }
// function recupTitre($id){
	// $res = "";
	// $madb = new PDO('sqlite:bdd/bdd.sqlite');
	// $id= $madb->quote($id);
	// $requete = "SELECT titre FROM administration WHERE id=$id";
	// $resultat = $madb->query($requete);
	// $retour = $resultat->fetch(PDO::FETCH_ASSOC);
	// $text=explode( '
// ', $retour["titre"] );
	// for($i = 0;$i < count($text);$i++){
		// $text[$i]=$text[$i];
		// $res = $res.$text[$i];
	// }
	// return $res;
// }
// function recupImage($id){
	// $res = "";
	// $madb = new PDO('sqlite:bdd/bdd.sqlite');
	// $id= $madb->quote($id);
	// $requete = "SELECT image FROM administration WHERE id=$id";
	// $resultat = $madb->query($requete);
	// $retour = $resultat->fetch(PDO::FETCH_ASSOC);
	// $res = "images/".$retour["image"];
	// return $res;
// }

// function modif($id,$image,$text,$titre){
	// $retour=0;
	// $madb = new PDO('sqlite:bdd/bdd.sqlite');
	// $id= $madb->quote($id);
	// $image= $madb->quote($image);
	// $text= $madb->quote($text);
	// $titre= $madb->quote($titre);

	// $req="UPDATE administration SET image=$image, contenu=$text, titre=$titre WHERE id = $id";
	// $res=$madb->exec($req);
	// if($res) $retour=1;	
		
	// return $retour;
	
// }
// function modifcomp($id,$titre,$text){
	// $retour=0;
	// $madb = new PDO('sqlite:bdd/bdd.sqlite');
	// $id= $madb->quote($id);
	// $titre= $madb->quote($titre);
	// $text= $madb->quote($text);

	// $req="UPDATE administration SET titre=$titre, contenu=$text WHERE id = $id ";
	// $res=$madb->exec($req);
	// if($res) $retour=1;	
		
	// return $retour;
	
// }

// function listeBDD()	{
// try{
// $retour = false ;
// $madb = new PDO('sqlite:bdd/bdd.sqlite');
// $requete = "SELECT  * FROM administration";	
// $resultat = $madb->query($requete);
// $tab_BDD = $resultat->fetchAll(PDO::FETCH_ASSOC);

// if(sizeof($tab_BDD) ) $retour = $tab_BDD;
	
// }

// catch(Exception $e)	{
	
	// echo "<p>Le site est en maintenance</p>";
	// die();
// }
	
// return $retour;
// }
function afficheTableau($tab){
echo '<table>';	
echo '<tr>';// les entetes des colonnes qu'on lit dans le premier tableau par exemple
foreach($tab[0] as $colonne=>$valeur){		echo "<th>$colonne</th>";		}
echo "</tr>\n";
// le corps de la table
foreach($tab as $ligne){
	echo '<tr>';
	foreach($ligne as $cellule)		{		echo "<td>$cellule</td>";		}
	echo "</tr>\n";
	}
echo '</table>';
}

function formater_saisie($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}





function redirect($url,$tps)
{
    $temps = $tps * 10;

    echo "<script type=\"text/javascript\">\n"
    . "<!--\n"
    . "\n"
    . "function redirect() {\n"
    . "window.location='" . $url . "'\n"
    . "}\n"
    . "setTimeout('redirect()','" . $temps ."');\n"
    . "\n"
    . "// -->\n"
    . "</script>\n";

}
?>	
			   
								   
								   
								   
								   
								   
								   
								   