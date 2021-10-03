<?php
namespace  Leit040\Cars\Transmissions;
use Exception;
use Leit040\Cars\Transmissions\GearBoxInterface;

abstract class GearBox implements GearBoxInterface
{
    protected string $transmissionPosition='N';
    protected string $gearBoxType;
    protected static array $positions = ['1','2','3','4','5','6','D','R','N'];
    protected string $serialNumber;



    public function __construct(string $gearBoxType){
        $this->gearBoxType = $gearBoxType;

            }

    public function getDirection(): string
    {

      return  match($this->GetTransmissionPosition()){
          'N', 'P' => 'car is standing still ',
          '1','2','3','4','5','6','D' => 'the car runs forward',
          'R'=>'the car runs back',
          default => "I don't know your gear box position"
      };
    }


    public function setTransmissionPosition(string $position):void
    {
        if(in_array($position,static::$positions)){
        $this->transmissionPosition = $position;
        exit;
        }
        throw new Exception('Unknown gearbox position ');
    }

    public function GetTransmissionPosition(): string
    {
        return $this->transmissionPosition;
    }

    public function getGearBoxType(): string
    {
        return $this->gearBoxType;
    }

    /**
     * @return string
     */
    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }
}