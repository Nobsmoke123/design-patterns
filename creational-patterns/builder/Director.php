<?php
/**
 * Director Class
 */

use AircraftBuilder;

class Director{
    private AircraftBuilder $aircraftBuilder;

    public function __construct(AircraftBuilder $aircraftBuilder)
    {
        $this->aircraftBuilder = $aircraftBuilder;
    }

    public function construct(bool $isPassenger){
        $this->aircraftBuilder.buildCockpit();
        $this->aircraftBuilder.buildEngine();
        $this->aircraftBuilder.buildWings();

        if($isPassenger) $this->aircraftBuilder.buildBathrooms();
    }

}