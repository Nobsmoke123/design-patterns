<?php
/**
 * Client Class
 */

// The client code creates a builder object, passes it to the
// director and then initiates the construction process. The end
// result is retrieved from the builder object.
use Director;

class Client {
    
    public function main(){
        
        Director $director = new Director();

        CarBuilder $builder = new CarBuilder();
        $director.constructSportsCar($builder);
        Car $car = $builder.getProduct();

        CarManualBuilder $builder = new CarManualBuilder();
        $director.constructSportsCar($builder);

        // The final product is often retrieved from a builder
        // object since the director isn't aware of and not
        // dependent on concrete builders and products.
        Manual $manual = $builder.getProduct();
    }
}