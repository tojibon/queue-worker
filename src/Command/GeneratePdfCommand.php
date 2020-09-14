<?php
// src/Command/GeneratePdfCommand.php
namespace App\Command;

use App\Command\Contracts\ApplicationCommandInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GeneratePdfCommand extends Command implements ApplicationCommandInterface
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:generate-pdf';
    private $params = [];
    private $options = [];

    protected function configure()
    {
        $this
            // the short description shown while running "php bin/console list"
            ->setDescription('Creates a PDF Report.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to create a PDF report...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // ... put here the code to run in your command

        // this method must return an integer number with the "exit status code"
        // of the command. You can also use these constants to make code more readable

        // return this if there was no problem running the command
        // (it's equivalent to returning int(0))
        return Command::SUCCESS;

        // or return this if some error happened during the execution
        // (it's equivalent to returning int(1))
        // return Command::FAILURE;
    }

    public function getCommand()
    {
        return self::$defaultName;
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
}
