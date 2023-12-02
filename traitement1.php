<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=solafor', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

$Nom = $_POST["nom"];
$Prenom = $_POST["prenom"];
$Email = $_POST["email"];
$mot_de_passe = $_POST["mot_de_passe"];




// .......................................................................
$req = $bdd->prepare('INSERT INTO inscription( nom, prenom,
email, mot_de_passe, statut) VALUES(:Nom, :Prenom, :Email, :mot_de_passe, :utilisateur)');
$request->execute;
if($request->rowCount() ==1)      
{
'Nom'==$nom;
'Prenom'==$Prenom;
'Email'== $Email;
'mot_de_passe'==$mot_de_passe;
}

echo 'Les données sont sauvegardées !';



header('Location: pconnexion.php');
  exit();

?>