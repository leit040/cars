<?php
namespace Leit040\Cars;
use Leit040\Cars\Cars\Bus;
use Leit040\Cars\Cars\Car;
use Leit040\Cars\Cars\CustomCar;
use Leit040\Cars\Cars\Electric;
use Leit040\Cars\Engines\DieselEngine;
use Leit040\Cars\Engines\PetrolEngine;
use Leit040\Cars\Transmissions\AutomaticGearbox;
use Leit040\Cars\Transmissions\ManualGearbox;

require_once './vendor/autoload.php';

$gearBoxAutomatic = new AutomaticGearbox('8524582204');
$gearBoxManual = new ManualGearbox('58515315665');
$engineForBus = new DieselEngine('5456456456');

$electricCar = new Electric($gearBoxAutomatic);
$car = new Car($gearBoxManual);

$bus = new Bus($engineForBus, $gearBoxManual);

$customCar = new CustomCar(new ManualGearbox('665663'), new PetrolEngine('54545224848'));
$customCar->setInsurancePolicy('IDE418454545');
$customCar->setRegistrationPlate('AB 85425 IT');
$customCar->setInsurancePolicyExpiration('2022-04-07');

$customCar->engineOn();
$customCar->turnSteering('left');
$customCar->setPressureRatio(0,7);
$customCar->headlightsOn();
echo $customCar->getEngineStatus().PHP_EOL;
echo $customCar->getEngineType().PHP_EOL;


$bus->engineOn();
echo $bus->getEngineStatus().PHP_EOL;