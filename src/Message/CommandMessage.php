<?php
// src/Message/CommandMessage.php
namespace App\Message;

class CommandMessage
{
    private $command;
    private $description;

    public function __construct(string $command, string $description = '')
    {
        $this->command = $command;
        $this->description = $description;
    }

    public function getCommand(): string
    {
        return $this->command;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}