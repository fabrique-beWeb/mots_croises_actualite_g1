<?php

class Grille {
  const LONGUEUR_MOT_MIN= 1;
  const LONGUEUR_MOT_MAX = 10;
  const TAILLE_GRILLE = 100;


  private $taille;
  private $case;
  private $listmot;
  private $tableauCOL;
  private $fichiermot;
  private $msgerror;

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

      $this->tableau=array();
      for ($i=0; $i<(2*$this->taille*$this->taille); $i++) {
        $this->tableau[$i]=self::tableau($i);
      }

  }
public function __destruct(){
  if($this->msgerror!='') {
    return;
  }
  $this->fichiermot->close();
}
public function getListeMots($end='  '){
  if($this->msgerror='') {
    return;
  }
  $arrCOL=array();
  foreach($this->listmot as $mot) {
    $label=$mot->getLabel();
      if($mot->isReversed()){
        $label=strrev($label);
      }
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
  if($this->msgerror!='') {
    return;
  }
  $taille2=$this->taille*$this->taille;
  $i=rand(0,$taille2-1);

  $cpt=0;
  while($cpt<$taille2) {
    $this->placeWord($i);
    $cpt++;
    $i++;
    if($i==$taille2){}
      $i=0;
    }
  }

public function CaseNoir($case){
    $casen=new case(
      $start,-1,rand(0,3),''(rand(0,1)==1)
    );
    $inc=1;


  private function placerMot($start) {
    $mot = new Mot(
      $start,-1,rand(0,3),'',(rand(0,1)==1)
      );
      $inc=1;
      $longueur=rand(self::LONGUEUR_MOT_MIN,$this->taille);

      switch($mot->setOrientation()){
        case Mot::HORIZONTAL:
          $inc=1;
          $mot->setEnd($mot->getStart()+$longueur-1);
          while($this->tableau[$mot->getEnd()]<$this->tableau[$mot->getStart()]) {
            $mot->setStart($mot->getStart()-1);
          }
          break;

          case Mot::VERTICAL:
          $inc=$this->taille;
          $mot->setEnd($mot->getStart()+($longueur*$this->taille)-$this->taille);
          while($mot->getEnd()>($this->taille*$this->taille)-1) {
            $mot->setStart($mot->getStart()-$this->taille);
            $mot->setEnd($mot->getStart()+($longueur*$this->taille)-$this->taille);
          }
          break;
      }
      $s='';
      $flag=false;
      for ($i=$mot->getStart();$i<$mot->getEnd();$i+=$inc) {
        if($this->case[$i]=='') {
          $s.='_';}
          else {
            $s.=$this->case[$i];
            $flag=true;
          }
        }
        if(!$flag){
          $mot->setLabel($this->getMotRandom($longueur));
          if($mot->isReversed()){
            $mot->setLabel(strrev($mot->getLabel()));
          }
          else{
            if(strpos($s,'_')===false) {
              return;
            }

            $word->setLabel($this->getMotComme($s));
            $mot>setReverse(false);

            $this->addMot($mot);
          }
        }

      }

  }
