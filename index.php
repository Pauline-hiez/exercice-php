<?php

// Exercice 1
echo "DWWM - Toulon";

// Exercice 2
$ligne1 = "Formation DWWM";
$ligne2 = "Ville : Toulon";

echo "<br>" . $ligne1;
echo "<br>" . $ligne2;  

// Exercice 3
$apprenants = "Inscrits";
$nombre = 20;

echo "<br>" . $apprenants . " : " . $nombre;

// Exercice 4 
$taux = 95.5;

echo "<br>" . "Taux de réussite : " . $taux . "%";

// Exercice 5
$ouvert = true;
echo "<br>" . "Inscriptions ouvertes : " . ($ouvert ? "oui" : "non");

// Exercice 6
$prenom = "Walter";
$nom = "White";

echo "<br>" . "Bonjour " . $prenom . " " . $nom;

// Exercice 7
$a = 7;
$b = 5;

echo "<br>" . "La somme de 7 et de 5 est de " . ($a + $b);

// Exercice 8
$x = 12;
$y = 4;

echo "<br>" . "Résultat : " . ($x - $y);

// Exercice 9
$n = 25;
$d = 4;

echo "<br>" . "Résultat : " . intdiv($n, $d) . "%";

// Exercice 10
$note1 = 15;
$note2 = 17;
$note3 = 16;
$moyenne = ($note1 + $note2 + $note3) / 3;

echo "<br>" . "Moyenne : " . ($moyenne);

// Exercice 11
$texte = "Aujourd'hui, tu codes en \"PHP\" à DWWM - Toulon";

echo "<br>" . $texte;

// Exercice 12
$prix = 19.99;

echo "<br>" . "Prix : " . $prix . "€";

// Exercice 13
$h1 = "Bienvenue";
$p = "Formation DWWM - Toulon";

// Exercice 14
$date = date("Y");

echo "<br>" . "© " . $date . " Formation DWWM - Toulon";

// Exercice 15
$age = 45;

echo "<br>" . $prenom . " " . $nom . "<br>" . $age . "<br>" . $prix;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Exercice 13 -->

    <h1><?php echo $h1; ?></h1>
    <p><?php echo $p; ?></p>
</body>
</html>


