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

    protected function configure()
    {
        // ...
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

    public function getDescription()
    {
        return 'A static description of command which will generate a reporting PDF!';
    }
}
