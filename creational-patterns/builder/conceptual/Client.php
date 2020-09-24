<?php
/**
 * Client Class
 */

use Director;
use F16Builder;

// The client code creates a builder object, passes it to the
// director and then initiates the construction process. The end
// result is retrieved from the builder object.
class Client{

    public function main(){
        F16Builder $f16Builder = new F16Builder();
        Director $director = new Director($f16Builder);
        $director->construct(false);

        // The final product is often retrieved from a builder
        // object since the director isn't aware of and not
        // dependent on concrete builders and products.
        IAircraft f16 = $f16Builder.getResult();
    }
}