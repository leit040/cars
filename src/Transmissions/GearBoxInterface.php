<?php

namespace Leit040\Cars\Transmissions;


interface GearBoxInterface
{
    public function getDirection(): string;

    public function setTransmissionPosition(string $position);

    public function GetTransmissionPosition(): string;

    public function getGearBoxType(): string;
}