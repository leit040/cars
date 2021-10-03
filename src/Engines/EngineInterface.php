<?php

namespace Leit040\Cars\Engines;

interface EngineInterface
{

    public function engineOn():bool;

    public function engineOff():bool;

    public function getEngineStatus():bool;

    public function getType():string;

    public function getFuelType():string;

    public function getPower():int;

    public function getVolume():float;



}