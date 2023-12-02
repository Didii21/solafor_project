<?php

session_start();

if( isset($_SESSION['id']) && !empty($_SESSION['id']) ){

    header("location:connecter.php");
    exit;

}else{
      
 } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>nav</title>
</head>
<body>
    <div class="banner">
       <div class="navbar">
        <h2 class="so">SOLAFOR-energie</h2>
        <ul>
            <li><b><a href="index.php">Accueil</a></b></li>
            <li><b><a href="apropo.php">A propos</a></b></li>
            <li><b><a href="catalogue.php">Catalogue</a></b></li>
            <!-- <li><b><a href="job.php">Jobs</a></b></li> -->
            <li><b><a href="contact.php">Contacts</a></b></li>
            <li><b><a href="pconnexion.php">Admin</a></b></li>
        </ul>
        
        </div>
       </div> 
 <marquee behavior="" direction="">Bienvenue sur le site officiel de Solafor-energie</marquee>   
 <!-- <video src="vid.mp4">Le soleil est le plus grand cadeau que la terre nous a offert</video> -->
  <h1 class="cont">A propos de nous</h1>
    <div class="propo">
<h2>SOLAFOR Energy SaRL est une entreprise burkinabé crée en 2015 et dont le siège social est basé à Bobo-Dioulasso.
Il est à la fois un Bureau d’Etude et une entreprise specialisée dans la  réalisation de projets de production d’énergie à base de sources renouvelables, à savoir le solaire photovoltaïque , le solaire thermique , la biomasse, les groupes électrogènes (conçus ou modifiés de sortes qu’il puissent fonctionner à base d’huiles de plantes produites localement – en lieu et place des carburants importés et polluants) etc.</h2>
<div class="outil1">

</div>
    </div>
    <button><a href="apropo.php">En savoir plus</a></button>
    <video src=""></video>

  <h1 class="cont">Quelques outils solaires</h1>  
    <div class="outils">
        <div class="outi">
<div class="outil1">
<img class="unit" src="M1.avif" alt="">
<img class="unit" src="m4.avif" alt="">
<img class="unit" src="m2.avif" alt="">
</div>
<div class="outil1">
<img class="unit" src="M1.avif" alt="">
<img class="unit" src="m4.avif" alt="">
<img class="unit" src="m2.avif" alt="">
</div>
</div>
<div class="outil2">
<h1>Un panneau solaire est un dispositif plat d'environ 1 m2 qui s'installe sur votre toiture. Il est destiné à récupérer l’énergie du rayonnement solaire pour la transformer en chaleur. <br>
    Les panneaux photovoltaïques captent l’énergie gratuite du soleil pour la transformer en électricité ou en chaleur. Il s’agit d’une solution rentable, en plus d’être respectueuse de l’environnement.</h1>
</div>
    </div>
    <button ><a href="catalogue.php">Consulter</a></button>
  <h1 class="cont">Nos emplois</h1>
  <img src="succes.avif" alt="" style=" margin-left: 350px";>
  <div class="boss">
        <H1>Grace à son travail acharné et à ses dévoués employés, SOLAFOR-energy a participé à de nombreuses commémorations dont "la nuit du solaire". La troisième catégorie était dénommée « prix de l’excellence de la meilleure initiative de développement du secteur ». L’entreprise Solafor Energy et Security system SARL a remporté le 1er prix dans cette catégorie et est repartie avec un trophée, une attestation et une somme de 350 000 FCFA. Quant au 2e prix, il a été décerné à l’association Jeune acteurs de l’énergie qui est également repartie avec une enveloppe de 150 000FCFA et une attestation.</H1>
  </div>
  <button> <a href="job.php">Emplois actifs</a></button>
  <h1 class="cont">SOLAFOR-energie vous accompagne</h1>
    <div class="contac">
 <h1>Ensembles vers un monde solaire</h1>
 <div class="job1">
 <h1>Les panneaux solaires produisent ce qu'on appelle une énergie verte. Une énergie bénéfique pour notre environnement car elle ne rejette aucun produit polluant comme le CO2 et donc réduit notre empreinte carbone. De plus, elle ralentit considérablement le réchauffement climatique. <br> <br> <br>
 </h1>
</div>
 <h1>Siège Social:
Secteur 5,Zone Résidentielle B.|01 BP 2643 Bobo-Dioulasso 01,Burkina Faso <br>
☎: 70 57 11 66 ou 76 62 50 18. <br>
Email : solafor.energy@gmail.com ou solafor@gmx.com</h1>
    </div>
    <button><a href="contact.php">Contactez-nous</a></button>
    
    <div class="footer">
    <div class="footer1">
    <div class="solafor">SOLAFOR-energie</div>
    <h1>Solar force !!</h1>
    </div>
    <div class="footer2">
    <div class="foot1">
        <H1>Fonctionnalités</H1><br>
        <p>Renseignements</p><br>
        <p>Orientation</p><br>
        <p></p>
    </div>
    <div class="foot1">
        <H1>Utilisateurs</H1><br>
        <p>Entreprises</p><br>
        <p>Public</p><br>
        <p>Acheteurs</p><br>
    </div>
    <div class="foot1">
        <H1>Addresse</H1><br>
        <p>+226 67629827</p><br>
        <p>Chadiitraore@gmail.com</p><br>
        <p>LinkedIn : Saadia Traore</p><br>
    </div>
    </div>
</div> 
</body>
</html>