<?php

use Workshop\State;

require_once 'vendor/autoload.php';

$commandBus = new \Workshop\CommandBus();
$process = new \Workshop\Process($commandBus);

$state = $process->handle(new \Workshop\Events\ReservationFailed('123'),new \Workshop\State());

print_r($state);
print_r(unserialize($state, [State::class]));
die;