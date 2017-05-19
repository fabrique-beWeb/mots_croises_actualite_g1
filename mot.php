<?php


class Mot {

   const HORIZONTAL = 0;
    const VERTICAL = 1;


   private $orientation; // orientation du mot
    private $label; // intitulé du mot
    private $start; // index de la case de départ
    private $fin; // index de la case d'arrivée
    private $rendus;



   public function construct($start,$fin,$orientation,$label) {
        $this->start=$start;
        $this->fin=$fin;
        $this->orientation=$orientation;
        $this->label=$label;
        }

//setter

   public function setStart($start) {
        $this->start=$start;
        }

   public function setFin($fin) {
        $this->fin=$fin;
        }

   public function setLabel($label) {
        $this->label=$label;
        }

   public function setRendus($rendus) {
       $this->r=$rendus;
   }     

//getter
   public function getStart() {
        return $this->start;
        }

   public function getFin() {
        return $this->fin;
        }

   public function getLabel() {
        return $this->label;
        }

 

   public function getOrientation() {
        return $this->orientation;
        }
    
    public function getRendus() {
        return $this->r;
    }

   }
?>