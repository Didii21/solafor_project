



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenaire">
        <button class="but"><a href="pconnexion.php">Se connecter</a></button>

        <h1>Inscription</h1>
        <form  action="traitement1.php" method="post">
            <input type="text" name="nom"  placeholder="Entrez votre nom">
            <input type="text" name="prenom" placeholder="Entrez votre prenom">
            <input type="email" name="email" placeholder="Entrez votre Email">
            <input type="password" name="mot_de_passe" placeholder="Entrez votre mot de passe">
            <button type="submit"  class="submit">Envoyer</button>
        </form>
        
        
    </div>
</body>
</html>
