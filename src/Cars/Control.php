<?php

namespace Leit040\Cars\Cars;

trait Control
{
    private float $pressureRatio = 0;
    private bool $headlightsStatus = false;
    private string $steeringPosition = "straight";
    private string $gearBoxPosition = "N";

    public function setPressureRatio(int $ratio):bool
    {
        if ($ratio>0 && $ratio<=1) {
            $this->pressureRatio = $ratio;
        return true;
        }
        return false;
    }

    public function getDirection():string{

        return $this->steeringPosition;
    }

    public function getEngineStatus():bool{
        return $this->engine->getEngineStatus();
    }

    public function engineOn():void{
        $this->engine->engineOn();
    }

    public function engineOff():void{
        $this->engine->engineOff();
    }

    public function getHeadlightsStatus():bool{
        return $this->headlightsStatus;
    }

    public function headlightsOn():void{
        $this->headlightsStatus = true;
    }

    public function headlightsOff():void{
        $this->headlightsStatus = false;
    }

    public function turnSteering(string $direction):bool{
        if($direction=="straight" ||$direction=="left" ||$direction=="right") {
            $this->steeringPosition = $direction;
            return true;
        }
    return false;
    }


    public function setGearBoxPosition(string $position):bool{
        try {$this->gearBox->setTransmissionPosition($position);
            } catch (\Exception $exception){
             echo $exception->getMessage().PHP_EOL;
             return false;
        }
    return true;
    }

    public function getSpeed(): int
    {
    return 60;
    // Тут должна быть логика расчета скорости исходя из передачи, степени нажатия педали и оборотов двигателя, но мне лень...
    }


}