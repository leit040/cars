<?php

namespace Leit040\Cars\Cars;

interface MovableInterface
{
public function getType():string;

public function getMaxSpeed():int;

public function getFuelType():string;

public function getSpeed():int;

public function getEngineType():string;


}