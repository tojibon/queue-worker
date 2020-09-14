<?php
// src/Command/ReportPdfCommand.php
namespace App\MessageCommand;

use App\MessageCommand\Contracts\ApplicationCommandInterface;

class ReportPdfCommand implements ApplicationCommandInterface
{
    protected static $command = 'app:generate-report-pdf';
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
        return 'This command allows you to create a PDF report...';
    }
}
