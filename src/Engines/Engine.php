<?php

namespace Leit040\Cars\Engines;

use Leit040\Cars\Engines\EngineInterface;

abstract class Engine implements EngineInterface
{
    protected bool $engineStatus = false;
    protected string $fuelType;
    protected int $enginePower;
    protected float $engineVolume;
    protected string $winCode;


    public function __construct(string $fuelType, int $enginePower, float $engineVolume)
    {
        $this->fuelType = $fuelType;
        $this->enginePower = $enginePower;
        $this->engineVolume = $engineVolume;

    }

    public function engineOn(): bool
    {
        $this->engineStatus = true;
        return true;
    }

    public function engineOff(): bool
    {
        $this->engineStatus = false;
        return true;
    }

    public function getWinCode(): string
    {
        return $this->winCode;
    }

    public function getEngineStatus(): bool
    {
        return $this->engineStatus;
    }

    public function getType(): string
    {
        return (new \ReflectionClass(get_called_class()))->getShortName();
    }

    public function getFuelType(): string
    {
        return $this->fuelType;
    }

    public function getPower(): int
    {
        return $this->enginePower;
    }

    public function getVolume(): float
    {
        return $this->engineVolume;
    }
}