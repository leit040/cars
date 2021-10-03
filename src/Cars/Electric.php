<?php

namespace Leit040\Cars\Cars;

use Leit040\Cars\Cars\AbstractCar;
use Leit040\Cars\Engines\ElectroEngine;
use Leit040\Cars\Engines\EngineInterface;
use Leit040\Cars\Transmissions\GearBoxInterface;

class Electric extends AbstractCar
{
    public function __construct(GearBoxInterface $gearBox)
    {
        $this->carType = 'Electric';
        $this->maxSpeed = 165;
        parent::__construct($gearBox,new ElectroEngine("EL2439853859") );
    }
}