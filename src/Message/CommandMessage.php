<?php
// src/Message/CommandMessage.php
namespace App\Message;

use App\Command\Contracts\ApplicationCommandInterface;

class CommandMessage
{
    private $command;

    public function __construct(ApplicationCommandInterface $command)
    {
        $this->command = $command;
    }

    public function getCommand() {
        return $this->command->getCommand();
    }

    public function getDescription() {
        return $this->command->getDescription();
    }
}