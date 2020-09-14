<?php
// src/Command/Contracts/ApplicationCommandInterface.php
namespace App\Command\Contracts;

interface ApplicationCommandInterface
{
    public function setParams(string $name, string $value);

    public function getParams(): array;

    public function setOptions(string $name);

    public function getOptions(): array;

    public function getCommand();

    public function getDescription();
}
