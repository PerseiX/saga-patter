<?php

namespace Workshop;

use DateTime;
use Workshop\Command\Command;
use Workshop\Command\InformUser;
use Workshop\Command\Reserve;
use Workshop\Command\UnlockAvailability;
use Workshop\Events\Event;
use Workshop\Events\ReservationRequestSent;
use Workshop\Events\Reserved;
use Workshop\Events\ReservationFailed;

class Process
{
    /**
     * @var CommandBus
     */
    private $commandBus;

    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    public function handle(Event $event, State $state): string
    {
        $newState = clone $state;

        switch (get_class($event)) {
            case ReservationRequestSent::class:
                $reservationId = 234;
                $newState
                    ->setValue('event', ReservationRequestSent::NAME)
                    ->setValue('reservationId', $reservationId);

                $this->commandBus->publish(new Reserve($event->getProcessId()));
                break;
            case Reserved::class:
                $newState->setValue('event', Reserved::NAME);
                $this->commandBus->publish(new InformUser($event->getProcessId()));
                break;
            case ReservationFailed::class:
                $newState->setValue('event', ReservationFailed::NAME);
                $reservationId = $state->getValues()['reservationId'];

                $this->commandBus->publish(new UnlockAvailability($event->getProcessId(), $reservationId));
                break;
        }

        $newState->setValue('createdAt', (new DateTime())->format('c'));

        return serialize($newState);
    }
}