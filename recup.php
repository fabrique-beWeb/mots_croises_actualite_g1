<?php
//clé
$mykey='';
//fichier à lire
$fichier=file('ListeMots.txt');
$rand=rand(1,48837);
$tableau = array($fichier);
//boucle pour parcourir en récupérant l'index ety le contenu de la ligne'
foreach ($fichier as $numligne => $contligne) {
    
    //index baser sur 0
    
    //on récupère l'index et on l'affiche
 //   $mot=var_dump($fichier[$rand]-1);
    //fonctions str_split censer décomposer le mot en lettre en lui donnant un index par lettre
    
    $mot=str_split($fichier[$rand]);
    print_r($mot);
    break;
}

