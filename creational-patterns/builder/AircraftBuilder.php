<?php
/**
 * Abstract Builder
 */

 use IAircraft;

 abstract class AircraftBuilder {

   public function buildEngine(){

   }

   public function buildWings(){

   }

   public function buildCockPit(){

   }

   public function buildBathrooms(){

   }

   abstract public function getResult(): IAircraft;
 }