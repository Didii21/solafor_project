<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"  href="inscription.css">
    <title>Document</title>
</head>
<body>
    <div class="contenaire">
<h1 class="cata">Ajouter un produit</h1>
        <form action="produits.php" method="post">
            <div class="">
            <input type="text" name="nom"  placeholder="Entrez le nom du produit"><br> <br> <br>
            <input type="text" name="prix" placeholder="Entrez le prix du produit"> <br> <br> <br>
            <div class="">
            <input type="contact" name="contact" placeholder="Entrez le contact du fournisseur"> <br> <br> <br>
            <button type="submit" style="color:black">Valider</button>
            </div>
        </form>
        </div>
</body>
</html>