<?php
namespace Leit040\Cars\Transmissions;

use Leit040\Cars\Transmissions\GearBox;

class AutomaticGearbox extends GearBox implements GearBoxInterface
{
public function __construct(string $serialNumber)
{
    $this->serialNumber = $serialNumber;
    parent::__construct('Automatic');
}

}