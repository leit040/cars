<?php

namespace Leit040\Cars\Cars;

use Leit040\Cars\Cars\AbstractCar;
use Leit040\Cars\Engines\EngineInterface;
use Leit040\Cars\Transmissions\GearBoxInterface;

class Bus extends AbstractCar
{
    public function __construct(EngineInterface $engine, GearBoxInterface $gearBox)
    {
        $this->carType = 'Bus';
        $this->maxSpeed = 120;
        parent::__construct($gearBox,$engine);
    }

}