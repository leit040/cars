<?php

namespace Leit040\Cars\Cars;

use Leit040\Cars\Cars\AbstractCar;
use Leit040\Cars\Engines\EngineInterface;
use Leit040\Cars\Engines\PetrolEngine;
use Leit040\Cars\Transmissions\GearBoxInterface;

class Car extends AbstractCar
{

    public function __construct( GearBoxInterface $gearBox)
    {
        $this->carType = 'Car';
        $this->maxSpeed = 180;
        parent::__construct($gearBox,new PetrolEngine('WDE324757328AT'));
    }

}