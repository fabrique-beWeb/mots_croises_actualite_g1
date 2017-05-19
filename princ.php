<?php

require_once 'grille.php';
require_once 'mot.php';


$grille=new Grille();
$grille->init();
echo $grille->init();
echo "Mot à trouver (".$grille->getListeMot().") :\n";
echo $grille->getListeMot("\n");
echo $rendus->getRendus();

?>