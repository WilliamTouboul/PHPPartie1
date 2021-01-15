<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Créer 5 variables sum, difference, product, quotient, modulo.
Dans la première mettre le résultat de l'opération 3 + 4.
Dans la deuxième mettre le résultat de l'opération 100 - 20.
Dans la troisième mettre le résultat de l'opération 45 - 15. Dans la quatrième mettre le résultat de l'opération 45 / 15. Dans la cinquième mettre le reste de la division entière 75 / 15.

Afficher le contenu des variables. -->

<?php 
$sum = 3+4;
$difference = 100-20;
$product = 45*15;
$quotient = 45/15;
$modulo = 75 % 15;

echo $sum, '<br>',$difference,'<br>',$product,'<br>',$quotient,'<br>',$modulo;
// avec des doubles quotes on peut y declarer les variables.
echo "$sum,$difference,$product,$quotient,$modulo;"

?>








    
</body>
</html>