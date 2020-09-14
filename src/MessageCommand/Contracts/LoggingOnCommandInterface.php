<?php
// src/Command/Contracts/LoggingOnCommandInterface.php
namespace App\MessageCommand\Contracts;

interface LoggingOnCommandInterface
{
    public function setLogger(string $name);

    public function getLogger(): string;
}
