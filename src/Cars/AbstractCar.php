<?php

namespace Leit040\Cars\Cars;

use Leit040\Cars\Engines\EngineInterface;
use Leit040\Cars\Transmissions\GearBoxInterface;

abstract class AbstractCar implements MovableInterface
{
    use Control, legalization;

    protected EngineInterface $engine;
    protected GearBoxInterface $gearBox;
    protected string $carType;
    protected int $maxSpeed;

    public function __construct(GearBoxInterface $gearBox, EngineInterface $engine)
    {
        $this->engine = $engine;
        $this->gearBox = $gearBox;

    }

    public function getType(): string
    {
        return $this->carType;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function getFuelType(): string
    {
        return $this->engine->getFuelType();
    }


    public function getEngineType(): string
    {
        return $this->engine->getType();
    }
}