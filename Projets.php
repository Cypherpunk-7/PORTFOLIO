<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variable.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets</title> <!-- Correction de la balise title -->
    <link rel="stylesheet" href="CSS/projet.css">
</head>
<body>
<header>
    <!-- Icône hamburger -->
    <div class="menu-icon" id="menu-icon">&#9776;</div>
</header>

    <!-- Menu latéral -->
<nav class="side-nav" id="side-nav">
    <ul class="links">
        <li><a href="index.html"><strong>HOME</strong></a></li>
        <li><a href="Projets.php"><strong>PROJETS</strong></a></li>
    </ul>
</nav>
    <div class="projet">
        <h1>PRESENTATION DES PROJETS</h1> <!-- Fermeture correcte de la balise h1 -->
        <section class="presentation">
        <?php foreach($dataprojet as $projets): ?>
            <h2><?php echo $projets['name']; ?></h2>
            <br>
            <p><?php echo $projets['description']; ?></p>
            <br>
        </section>
        <section class="description">
            <section class="description-groupe">
            <h3>Fonctionnalités</h3>
            <ul>
                <li><?php echo $projets['fonct_1']; ?></li>
                <li><?php echo $projets['fonct_2']; ?></li>
                <li><?php echo $projets['fonct_3']; ?></li>
            </ul>
            <br>
            </section>
            <section class="description-groupe">
            <h3>Compétences</h3> <!-- Fermeture correcte de la balise h3 -->
            <ul>
                <li><?php echo $projets['comp_1']; ?></li>
                <li><?php echo $projets['comp_2']; ?></li>
            </ul>
            <br>
            </section>
            <section class="description-groupe">
            <h3>Logiciels</h3> <!-- Fermeture correcte de la balise h3 -->
            <ul>
                <li><?php echo $projets['logiciel_1']; ?></li>
                <li><?php echo $projets['logiciel_2']; ?></li>
            </ul>
            <br>
            </section>
        </section>
        <?php endforeach; ?> <!-- Vous devez fermer la boucle PHP ici -->
    </div>
    <script src="JS/main.js"></script>
</body>
</html>
