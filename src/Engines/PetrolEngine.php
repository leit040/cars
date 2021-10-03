<?php
namespace Leit040\Cars\Engines;
use Leit040\Cars\Engines\Engine;

class PetrolEngine extends Engine
{

    public function __construct(string $winCode)
    {
        $this->winCode = $winCode;
        parent::__construct('Petrol', 195, 3,5);
    }


}