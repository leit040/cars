<?php

namespace Leit040\Cars\Engines;

use JetBrains\PhpStorm\Pure;

class DieselEngine extends Engine
{


public function __construct(string $winCode)
{
    $this->winCode = $winCode;
    parent::__construct('Diesel', 175, 2,5);
}


}