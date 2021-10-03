<?php

namespace Leit040\Cars\Engines;

use Leit040\Cars\Engines\Engine;

class ElectroEngine extends Engine
{

    public function __construct(string $winCode)
    {
        $this->winCode = $winCode;
        parent::__construct('Electro', 172, 0);
    }


}