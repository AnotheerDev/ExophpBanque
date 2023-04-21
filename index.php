<h1>Exercice Banque</h1>

<p>Les exercices suivants ont pour objectif de vous faire construire des classes et d'instancier des objets
y répondant, comportant les propriétés et méthodes nécessitées par les consignes. Prêtez attention 
aux détails, testez souvent votre code et ne vous souciez pas du rendu visuel de vos affichages, ce 
n'est pas le but premier de l'exercice.</p>

<h2>Résultat</h2>

<?php

require "Compte.php";
require "Titulaire.php";



// création des objets $accounts et $titulaire1 :

$titulaire1 = new Titulaire("DARMANIN", "Gerald", "11-10-1982", "Paris", []);
$accounts1 = new Compte("Livret A", 10, "€" , $titulaire1);
$accounts2 = new Compte("PEL", 90, "€" , $titulaire1);
$accounts3 = new Compte("Compte courant", 4, "€" , $titulaire1);



//
$titulaire1->afficherComptes();
echo "------------------------------------<br>";
echo $accounts1->getInfos();
echo $accounts1->crediter(50);
echo $accounts2->debiter(60);
echo "------------------------------------<br>";
$titulaire1->afficherComptes();
$accounts1->virement($accounts3, 50);