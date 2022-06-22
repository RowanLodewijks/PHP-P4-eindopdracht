<?php
class Vierkant {
    public $x;
    public function __construct($x){
        $this->x = $x;
    }
    public function getX(){
        $this->x;
    }
    public function berekenOppervlakte(){
        $uitkomst = $this->x * $this->x;
        return $uitkomst;
    }
}