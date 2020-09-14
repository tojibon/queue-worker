<?php
// src/Message/CommandMessage.php
namespace App\Message;

use App\MessageCommand\Contracts\ApplicationCommandInterface;

class CommandMessage
{
    /**
     * @var ApplicationCommandInterface
     */
    private $command;

    /**
     * CommandMessage constructor.
     * @param ApplicationCommandInterface $command
     */
    public function __construct(ApplicationCommandInterface $command)
    {
        $this->command = $command;
    }

    public function getCommandMessageInstance()
    {
        return $this->command;
    }

    public function getCommand()
    {
        return $this->command->getCommand();
    }

    public function getDescription()
    {
        return $this->command->getDescription();
    }

    public function getParams()
    {
        return $this->command->getParams();
    }

    public function getOptions()
    {
        return $this->command->getOptions();
    }
}