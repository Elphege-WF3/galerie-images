<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Galerie Images</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- COMMENTAIRE HTML -->
</head>

<body>
    <header>
        <img class="header__img" src="./assets/img/logo.jpeg" alt="logo">
        
        <nav>
            <!-- <a href="index.php">Accueil</a>
            <a href="galerie.php">Galerie</a> -->

            <!-- AJOUTER DU CODE PHP POUR PRODUIRE LE MEME CODE HTML POUR LES BALISES a -->

            <!-- // // tableau associatif
// $a = [
//     // "cle"        => "valeur"
//     "index.php"     => 'Accueil',
//     "galerie.php"   => 'Galerie',
// ];
// foreach($a as $cle => $valeur)
// {
//     echo 
//     <<<html
//         <a href="$cle">$valeur</a>

//     html;
// } -->

            <!-- ## EXERCICE: AJOUTER LA CLASSE .active SUR LE MENU ACTUEL


    QUAND ON CLIQUE SUR UN LIEN DU MENU
    ON ARRIVE SUR LA PAGE CORRESPONDANTE
    ET ON VEUT QUE LE MENU QUI CORRESPOND A LA PAGE AIT UNE CLASSE active

    (NE PAS OUBLIER D'AJOUTER LE CSS POUR LA CLASSE .active)
    (par exemple: changer la couleur de fond...) -->

            <?php
// tableau associatif
$a = [
    // "cle"        => "valeur"
    "index.php"     => 'Accueil',
    "galerie.php"   => 'Galerie',
];
foreach($a as $cle => $valeur)
{
    // JE TESTE SI $valeur EST EGAL A $titre
    if ($valeur == $titre) 
    {
        echo 
        <<<html
            <a class="active" href="$cle">$valeur</a>

        html;
    
    }
    else
    {
        echo 
        <<<html
            <a class="" href="$cle">$valeur</a>
    
        html;

    }
}
?>

        </nav>
    </header>
    <main>
        <h1><?php echo $titre ?></h1>