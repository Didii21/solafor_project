<?php
    try
    {
        $bdd=new PDO('mysql:host=localhost;dbname=connexion','root','');
        $bdd=new PDO('mysql:host=localhost;dbname=inscription','root','');
        $bdd=new PDO('mysql:host=localhost;dbname=employés','root','');
        $bdd=new PDO('mysql:host=localhost;dbname=produits','root','');
        $bdd=new PDO('mysql:host=localhost;dbname=solafor','root','');
    }
    catch(Exception $e)
    {
        die("Erreur :" .$e->getMessage());
    }
 ?>