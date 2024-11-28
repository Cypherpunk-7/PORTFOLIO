<?php
require_once
?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <titile> Projets </title>
        <link rel="stylesheet" href="CSS/php.css">
    </head>
    <body>
        <div>
            <h1> PRESENTATION DES PROJETS<h1>
            
            <?php foreach($dataprojets as $projets): ?>
                <h2><?php echo $projets['name']; ?></h2>
                <br>
                <p><?php echo $projets['description']; ?></p>
                <br>
                <h3>Fonctionnalités</h3>
                <ul>
                    <li><?php echo $projets['fonct_1']; ?></li>
                    <li><?php echo $projets['fonct_2']; ?></li>
                    <li><?php echo $projets['fonct_3']; ?></li>
                </ul>
                <br>
                <h3>Compétences<h3>
                <ul>
                    <li><?php echo $projets['comp_1']; ?></li>
                    <li><?php echo $projets['comp_2']; ?></li>
                </ul>
                <br>
                <h3>Logiciels<h3>
                <ul>
                    <li><?php echo $projets['logiciel_1']; ?></li>
                    <li><?php echo $projets['logiciel_2']; ?></li>
                </ul> 
        </div>