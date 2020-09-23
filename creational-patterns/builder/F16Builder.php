<?php
/**
 * Concrete Builder for product F16 
 */

use AircraftBuilder;
use F16;
use IAircraft;

class F16Builder extends AircraftBuilder {
 
    private F16 $f16;
 
    public function buildEngine() {
        // get F-16 an engine
        // f16.engine = new F16Engine();
    }
 
    public function buildWings() {
        // get F-16 wings
        // f16.wings = new F16Wings();
    }
 
    public function buildCockpit() {
        $this->f16 = new F16();
        // get F-16 a cockpit
        // f16.cockpit = new F16Cockpit();
    }
 
    public function getResult(): IAircraft {
        return $this->f16;
    }
}