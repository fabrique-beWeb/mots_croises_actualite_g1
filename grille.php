<?php

class Grille {
  const LONGUEUR_MOT_MIN= 1;//longueur minimum des mots
  const LONGUEUR_MOT_MAX = 10;//longueur max des mots
  const TAILLE_GRILLE = 100;//taille grille
  const NB_CASE_NOIR_MIN = 10;
  const NB_CASE_NOIR_MAX = 14;


  private $taille;//longueur du coté de la grille
  private $case;//case de la grille contenant une lettre
  public $listmot;//liste des mots à trouver
  private $tableauCOL;//tableau des numéros des colonnes avec les index
  private $fichiermot;//fichier contenant les mots
  private $msgerror;//string contenant le message d'erreur

  public function __construct($taille=self::TAILLE_GRILLE) {
    $this->msgerror='';

    if($taille<self::LONGUEUR_MOT_MIN|| $taille>self::LONGUEUR_MOT_MAX) {
      $this->msgerror='taille doit etre entre'.self::LONGUEUR_MOT_MIN.'et'.self::LONGUEUR_MOT_MAX;
      echo $this->msgerror;
      return;
    }
    $this->taille=$taille;
      $this->listmot=array();
      $this->case=array_fill(0,$this->taille*$this->taille,'');
      $this->fichiermot=fopen('ListeMots.txt','r+');
      //index des colonnes dans 2 grilles verticalement pour éviter que sa dépasse
      $this->tableauCOL=array();
      for ($i=0; $i<(2*$this->taille*$this->taille); $i++) {
        $this->tableauCOL[$i]=self::COL($i);
      }

  }
public function __destruct(){
  if($this->msgerror!='') {
    return;
  }
//  $this->fichiermot->close();
}
public function getListeMot($end=' '){
  //Retourne la liste des mots à trouver dans la grille par ordre alphabétique
  //$end: séparateur de mots définis
  if($this->msgerror='') {
    return;
  }
  $arr=array();
  foreach($arr as $mot) {
    $label=$mot->getLabel();
      $arr[]=$label;
  }
    sort($arr);
    $r='';
    foreach($arr as $label){
      $r.=$label.$fin;
    }
    return $r;
}
public function getNbMots() {
  return count($this->listmot);
}




public function init(){

  //Crée une nouvelle grille
  if($this->msgerror!='') {
    return;
  }
  $taille2=$this->taille*$this->taille;
  $i=rand(0,$taille2-1);//on part d'une case au hasard
  //on parcourt toutes les cases
  $cpt=0;
  while($cpt<$taille2) {
    $this->placeWord($i);
    $cpt++;
    $i++;
    if($i==$taille2){}
      $i=0;
    }
  }//génération de la grille

// public function CaseNoir($case){
//     $casen=new case(
//       $start,-1,rand(0,3),''(rand(0,1)==1)
//     );
//     $inc=1;
  private function getCaseNoir($remplis) {
    $black = new CaseNoir(
      $start,-1,'');
      $inc=1;
      $placement=rand(self::NB_CASE_NOIR_MIN,$this->label);
      while($this->label!==empty($remplis)) {
        $black->setStart($black->getStart()-1);
        break;
      }


  }

  private function placerMot($start) {

    //Place les mots dans la case de départ $start, de manière random à la vertical ou à l'horizontal
    //nouveau mot, case de départ qu'on appelle $start
    $mot = new Mot(
      $start,//index de la case de départ
      -1,//fin suivant l'orientation et la longueur du mot
      rand(0,3),//orientation
      '');//libellé tiré au dernier moment
      $inc=1;//incrémentation
      $longueur=rand(self::LONGUEUR_MOT_MIN,$this->taille);//longueur d'un mot au hasard, de LONGUEUR_MOT_MIN à taille

      switch($mot->setOrientation()){
        case Mot::HORIZONTAL:
          $inc=1;
          $mot->setEnd($mot->getStart()+$longueur-1);
          //si le mot est placé sur 2 lignes on décale à gauche
          while($this->tableauCOL[$mot->getEnd()]<$this->tableauCOL[$mot->getStart()]) {
            $mot->setStart($mot->getStart()-1);
          }
          break;

          case Mot::VERTICAL:
          $inc=$this->taille;
          $mot->setEnd($mot->getStart()+($longueur*$this->taille)-$this->taille);
          //si le mot dépasse de la grille en bas, on décale vers le haut
          while($mot->getEnd()>($this->taille*$this->taille)-1) {
            $mot->setStart($mot->getStart()-$this->taille);
            $mot->setEnd($mot->getStart()+($longueur*$this->taille)-$this->taille);
          }
          break;
      }
    }


    private function COL($x) {
        // IN : (int $x) = index de la case
        // OUT : (int) numéro de la colonne, de 1 à $this->_size
        return ($x % $this->taille)+1;
        }

    private function getRandomMot($longueur) {
        // IN (Int) : longueur du mot $len
        // OUT (String) : un mot au hasard de longueur $len
       foreach ($fichiermot as $motgrille) {
         if($this->motgrille == $longueur) {
          $this->motgrille=array();
            for($i=0;;$i++){
              if($i>$longueur) {
                break;
              }
            }


            }

                  }
                  return $this->motgrille[]=$motsfinit;
       }
       public function addRendus(){

         $r.='<style type="text/css">
                table.gridtable {
                    font-family: verdana,arial,sans-serif;
                    font-size:16px;
                    color:#333333;
                    border-width: 1px;
                    border-color: #666666;
                    border-collapse: collapse;
                    }
                table.gridtable, td {
                    border-width: 0px;
                    padding: 8px;
                    border-style: solid;
                    border-color: #666666;
                    background-color: #ffffff;
                    }
                </style>'.PHP_EOL;
            $r.='<table class="gridtable">'.PHP_EOL;
            foreach($this->case as $lettre) {
                if($cpt==0) {$r.='<tr>';}
                if($lettre=='') {$r.='<td>'.chr(rand(65,100)).'</td>';}
                else {$r.='<td>'.$lettre.'</td>';}
                $cpt++;
                if($cpt==$this->taille) {$r.='</tr>'.PHP_EOL; $cpt=0;}
                }
            $r.='</table>'.PHP_EOL;
            var_dump($r);

       }


        }