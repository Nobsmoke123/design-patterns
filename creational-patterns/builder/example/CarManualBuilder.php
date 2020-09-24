<?php
/**
 * CarManualBuilder
 */

use Builder;
use Manual;

class CarManualBuilder extends Builder{

    private Manual $manual;

    // The reset method clears the object being built.
    public function reset(){

    }

    // Set the number of seats in the car.
    public function setSeats(){

    }

    // Install a given engine.
    public function setEngines(){

    }

    // Install a trip computer.
    public function setTripComputer(){

    }

    // Install a global positioning system.
    public function setGPS(){

    }

    // Concrete builders are supposed to provide their own
    // methods for retrieving results. That's because various
    // types of builders may create entirely different products
    // that don't all follow the same interface. Therefore such
    // methods can't be declared in the builder interface (at
    // least not in a statically-typed programming language).
    //
    // Usually, after returning the end result to the client, a
    // builder instance is expected to be ready to start
    // producing another product. That's why it's a usual
    // practice to call the reset method at the end of the
    // `getProduct` method body. However, this behavior isn't
    // mandatory, and you can make your builder wait for an
    // explicit reset call from the client code before disposing
    // of the previous result.

    public function getProduct(): Manual {
        $product = $this->manual;
        $this->reset();
        return $product;
    }
}