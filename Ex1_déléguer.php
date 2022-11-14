<?php
$nom_professeur = "Robert" ;
$prenom_professeur = "Timothee" ;
$lien_script = "EXPL1_avisProfesseur.php?nomProf=$nom_professeur&prenomProf=$prenom_professeur" ;
echo "<a href='$lien_script'> Qui est le plus sévère des professeurs ? </a><br>" ;

$nom_déléguer = "Beaudoux" ;
$prenom_déléguer = "Camille";
$lien_script = "Ex1_déléguer.php?nomProf=$nom_déléguer&prenomdeleguer=$prenom_déléguer" ;
echo "<a href='$lien_script'> Qui est le déléguer ? </a>" ;"
 
   echo "Le déléguer de la classe est M: ".$_GET["nomDel"]. "<br />";
   echo "le déléguer de la classe est: ".$_GET["prenomDel"]. "<br/>";
?>