<?php
// src/MessageHandler/CommandMessageHandler.php
namespace App\MessageHandler;

use App\Message\CommandMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class CommandMessageHandler implements MessageHandlerInterface
{
    public function __invoke(CommandMessage $message)
    {
        // ... do some work - like generating a report PDF based on the command!
        dump($message->getCommand());
        dump($message->getDescription());
    }
}