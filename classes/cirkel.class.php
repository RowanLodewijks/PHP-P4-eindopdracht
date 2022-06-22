<?php
class Cirkel  extends Figuur {
    public $r = 5;
    public function __construct($r) {
        $this->r = $r;
    }
    public function getR() {
        return $this->r;
    }
    public function berekenOppervlakte(){

        $uitkomst = $this->r * $this->r * $this->pi;
        return $uitkomst;
    }
}