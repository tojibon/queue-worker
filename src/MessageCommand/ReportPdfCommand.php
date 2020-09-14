<?php
// src/Command/ReportPdfCommand.php
namespace App\MessageCommand;

use App\MessageCommand\Contracts\ApplicationCommandInterface;
use App\MessageCommand\Contracts\LoggingOnCommandInterface;

class ReportPdfCommand extends ApplicationCommand implements LoggingOnCommandInterface
{
    protected static $command = 'app:generate-report-pdf';
    private $params = [];
    private $options = [];
    private $logger = 'report';

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

    public function setLogger(string $name)
    {
        $this->logger = $name;
    }

    public function getLogger(): string
    {
        return $this->logger;
    }
}
