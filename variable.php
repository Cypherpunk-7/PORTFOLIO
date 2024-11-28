<?php

// Retrieving Variables Using the MySQL Client
$dataproject = $mysqlClient->prepare('SELECT * FROM projets');
$dataproject->execute();
$dataprojet = $dataproject->fetchAll();