<?php
//clé
$mykey='';
//fichier à lire
$fichier=file('ListeMots.txt');

$tableau = array($fichier);
//boucle pour parcourir en récupérant l'index ety le contenu de la ligne'

echo '<table>';
for($i = 1; $i < 11; $i++) {
    echo '<tr>';
    for($j = 1; $j+1 < 11; $j++) {
        echo '<td>';foreach ($fichier as $numligne => $contligne) {
    $rand=rand(1,48837);
    //index baser sur 0
    
    //on récupère l'index et on l'affiche
 //   $mot=var_dump($fichier[$rand]-1);
    //fonctions str_split censer décomposer le mot en lettre en lui donnant un index par lettre
    
    $mot=str_split($fichier[$rand]);
    print_r($mot);
    if ($numligne==NULL){
        echo "<img src='noire.jpg'>";
    }
    break;
}echo '</td>';
        
        
    }
    echo '</tr>';
}
echo '</table>';
?>
<style>
td{
    border: solid black;
}
img {
    width: 50%;
}
</style>
