<?php 

/* Exercice 1:
Écrivez un programme pour afficher le nombre, de 4 à 12 en utilisant la boucle PHP. Vous pouvez utiliser soit la boucle « for » ou « while » */
// Exercice 1
for ($i = 4;$i < 13 ; $i++){
    echo $i . "<br>";
};
echo "<br>";
/* 
Exercice 2:
Écrivez un programme pour afficher des nombres de 10 à 1 en utilisant une fonction récursive. */
// Exercice 2
 function decrement($n) 
     {
     if($n > 0)
     {
       echo $n ."\n";
       decrement($n - 1);
     }
   }
	decrement(11);
 echo "<br>";
/*  Exercice 3
Modifier le code ci-dessous pour calculer la moyenne des notes. */
//  Exercice 3
   $note_maths = 15;
   $note_francais = 12;
   $note_histoire_geo = 9;
   $moyenne = ($note_maths + $note_francais + $note_histoire_geo) / 3;
   echo 'La moyenne est de '.$moyenne.' / 20.';
echo "<br>";
/* Exercice 4
Calculer le prix TTC du produit. */
// Exercice 4 Prix HT×(1+Taux de TVA)

  $prix_ht = 50;
  $tva = 20;
  $prix_ttc = $prix_ht *(1+($tva / 100));
  
echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';
echo "<br>";
/* Exercice 5
Déclarer une variable $test qui contient la valeur 42. En utilisant la fonction var_dump(), faire en sorte que le type de la variable $test soit string et que la valeur soit bien de 42. */
// Exercice 5
$var = "42" ;
var_dump($var);
echo "<br>";
/* Exercice 6
Déclarer une variable $sexe qui contient une chaîne de caractères. Créer une condition qui affiche un message différent en fonction de la valeur de la variable. */
// Exercice 6
$sexe = "men";
$sexe = "women";


if($sexe == "men"){
 echo "You are a men";
}elseif ($sexe == "women"){
 echo "you are a women";
};
echo "<br>";
/* // Exercice 7
Déclarer une variable $budget qui contient la somme de 1 553,89 €. Déclarer une variable $achats qui contient la somme de 1 554,76 €. Afficher si le budget permet de payer les achats. */
// Exercice 7

$budget = 1553.89;
$achats = 1554.76;
if($budget >= $achats) :
   echo 'Le budget ('.$budget.' €) permet de payer tous les achats ('.$achats.' €).';
else :
   echo 'Le budget ('.$budget.' €) ne permet pas de payer tous les achats ('.$achats.' €).';
endif;
echo "<br>";
/* Exercice 8
Déclarer une variable $age qui contient la valeur de type integer de votre choix. Réaliser une condition pour afficher si la personne est mineure ou majeure. */
//  Exercice 8

$age = 19;
if($age >= 18)
   echo 'Vous êtes majeur.';
else
   echo 'Vous êtes mineur.';





?>