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
<h1 class="cata">Ajouter un employé</h1>

        <form action="employés.php" method="post" >
            <div class="">
            <input type="text" name="nom"  placeholder="Entrez le nom"> <br> <br> <br>
            <input type="text" name="prenom" placeholder="Entrez le prenom"> <br> <br> <br>
            </div>
            <div class="">
            <input type="contact" name="contact" placeholder="Entrez son contact"> <br> <br> <br>
            <!-- <input type="submit" value="VALIDER" name="submit" class="submit"> -->
            <button type="submit" style="color:black">Valider</button>
            </div>
        </form>
        </div>
</body>
</html>