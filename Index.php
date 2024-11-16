<?php 

// Exercice 1
for ($i = 4;$i < 13 ; $i++){
    echo $i . "<br>";
};
echo "<br>";

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
//  Exercice 3
   $note_maths = 15;
   $note_francais = 12;
   $note_histoire_geo = 9;
   $moyenne = ($note_maths + $note_francais + $note_histoire_geo) / 3;
   echo 'La moyenne est de '.$moyenne.' / 20.';
echo "<br>";
// Exercice 4 Prix HT×(1+Taux de TVA)

  $prix_ht = 50;
  $tva = 20;
  $prix_ttc = $prix_ht *(1+($tva / 100));
  
echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';
echo "<br>";
// Exercice 5
$var = "42" ;
var_dump($var);
echo "<br>";
// Exercice 5
$sexe = "men";
$sexe = "women";


if($sexe == "men"){
 echo "You are a men";
}elseif ($sexe == "women"){
 echo "you are a women";
};
echo "<br>";






?>