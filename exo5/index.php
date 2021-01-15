<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex5</title>
</head>

<body>
    <!-- Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur avec la fonction var_dump.
Donner une valeur à cette variable et l'afficher. -->
    <?php

    settype($varint, 'int'); //Cette version permet d'initialiser une variable VIDE.
    // Similaire a "$varint=(int)10.32" mais cette version initialise forcement avec une valeur.
    var_dump($varint);
    $varint = 11;
    echo '<br>', $varint;

    ?>
</body>

</html>