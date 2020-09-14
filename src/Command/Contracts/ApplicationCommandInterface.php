<?php
// src/Command/Contracts/ApplicationCommandInterface.php
namespace App\Command\Contracts;

interface ApplicationCommandInterface {
    public function getCommand();
    public function getDescription();
}
