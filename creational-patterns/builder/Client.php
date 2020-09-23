<?php
/**
 * Client Class
 */

use Director;
use F16Builder;

class Client{

    public function main(){
        F16Builder $f16Builder = new F16Builder();
        Director $director = new Director($f16Builder);
        $director->construct(false);

        IAircraft f16 = $f16Builder.getResult();
    }
}