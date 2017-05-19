<?php


class Mot {

   const HORIZONTAL = 0;
    const VERTICAL = 1;


   private $orientation; // orientation du mot
    private $label; // intitulé du mot
    private $start; // index de la case de départ
    private $fin; // index de la case d'arrivée

   public function construct($start,$fin,$orientation,$label) {
        $this->start=$start;
        $this->fin=$fin;
        $this->orientation=$orientation;
        $this->label=$label;
        }

   public function setStart($start) {
        $this->start=$start;
        }

   public function setFin($fin) {
        $this->fin=$fin;
        }

   public function setLabel($label) {
        $this->label=$label;
        }


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

   }
?>