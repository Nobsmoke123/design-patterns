<?php
/**
 * Concrete Builder for product Boeing747Builder
 */

use AircraftBuilder;
use IAircraft;
use Boeing747;

class Boeing747Builder extends AircraftBuilder{

    private Boeing747 $boeing747;
 
    public function buildCockpit() {
 
    }
 
    public function buildEngine() {
 
    }
 
    public function buildBathrooms() {
        
    }
 
    public function buildWings() {
 
    }

    public function getResult(): IAircraft {
        return $this->boeing747;
    }
}