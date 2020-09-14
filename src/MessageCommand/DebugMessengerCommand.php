<?php
// src/Command/DebugMessengerCommand.php
namespace App\MessageCommand;

use App\MessageCommand\Contracts\ApplicationCommandInterface;

class DebugMessengerCommand implements ApplicationCommandInterface
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

    public function setOptions(string $name)
    {
        $this->options[] = $name;
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
