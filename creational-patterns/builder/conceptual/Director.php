<?php
/**
 * Director Class
 */



use AircraftBuilder;

// The director is only responsible for executing the building
// steps in a particular sequence. It's helpful when producing
// products according to a specific order or configuration.
// Strictly speaking, the director class is optional, since the
// client can control builders directly.
class Director{
    private AircraftBuilder $aircraftBuilder;

    // The director works with any builder instance that the
    // client code passes to it. This way, the client code may
    // alter the final type of the newly assembled product.
    public function __construct(AircraftBuilder $aircraftBuilder)
    {
        $this->aircraftBuilder = $aircraftBuilder;
    }

    // The director can construct several product variations
    // using the same building steps.
    public function construct(bool $isPassenger){
        $this->aircraftBuilder.buildCockpit();
        $this->aircraftBuilder.buildEngine();
        $this->aircraftBuilder.buildWings();

        if($isPassenger) $this->aircraftBuilder.buildBathrooms();
    }

    // .. another method to construct another variant of the product if any

}