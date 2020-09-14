<?php
// src/Command/DebugMessengerCommand.php
namespace App\MessageCommand;

class DebugMessengerCommand extends ApplicationCommand
{
    protected static $command = 'debug:messenger';
    private $params = [];
    private $options = [];

    public function getCommand()
    {
        return self::$command;
    }

    public function setParams(string $name, string $value)
    {
        $this->params[$name] = $value;
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function setOptions(string $name, string $value)
    {
        $this->options[$name] = $name;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function getDescription()
    {
        return 'The debug:messenger command displays all messages that can be dispatched using the message buses';
    }
}
