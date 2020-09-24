<?php
/**
 * Base Interface Builder
 */

// The builder interface specifies methods for creating the
// different parts of the product objects.
interface Builder {

    // The reset method clears the object being built.
    public function reset();

    // Set the number of seats in the car.
    public function setSeats();

     // Install a given engine.
    public function setEngine();

    // Install a trip computer.
    public function setTripComputer();

    // Install a global positioning system.
    public function setGPS();
}