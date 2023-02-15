<?php

declare(strict_types=1);

use Pattern\Solid\Models\Phones;

date_default_timezone_set('Asia/Tashkent');
require './vendor/autoload.php';

try {
    $phones = Phones::getAll();
    dd($phones);
} catch (Exception|Error $exception) {
    dd($exception);
}

//$rectangle = new Rectangle();
//$rectangleTest = new AreaTester($rectangle);
//$rectangleTest->testArea(2, 3); // gives 6 as expecated
//$square = new Square();
//$rectangleTest = new AreaTester($square);
//$rectangleTest->testArea(2, 3); // gives 9 expecated is 6
//$savingAccount = new SavingAccount();
//$savingAccount->setBalance(15000);
//
//$fdAccount = new FixedDepositAccount();
//$fdAccount->setBalance(25000);
//
//$interestCalculator = new InterestCalculator();
//echo $interestCalculator->calculate($savingAccount);
//echo "|";
//echo $interestCalculator->calculate($fdAccount);
//$obj = new \Pattern\Solid\Services\Logger();
//$obj->add('logs');
//$o = new \Pattern\Solid\Services\LogStorage('file.txt');
////    $obj->reset();
//$o->save($obj->toString("\n"));
//$obj = new Shipment();
//$objs = new OrderReturn();
//dd([$objs->calculateLastReturnDay(), $obj->calculateDeliveryDays()]);
//$e = new \Pattern\Solid\Services\CsvValidation();
//$e->validateProduct(['size' => 1, 'color' => 'red', 'type' => 1]);
//$logger = new Logger();
//$logger->add("First log");
//$logger->add("Second log");
//$logger->add("Third log");
//$logger->save("logs.txt");
//echo $logger->toString();
//$exp = new Experience();
//
//$items = [
//    'A', 'B', 'C', 'D', 'E', 'F'
//];
//
//echo "<pre>";
//print_r($exp->map($items, 3));
//print_r($exp->chunk($items, 2));
//print_r($exp->chunkNew($items, 2));