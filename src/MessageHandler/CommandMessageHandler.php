<?php
// src/MessageHandler/CommandMessageHandler.php
namespace App\MessageHandler;

use App\Message\CommandMessage;
use App\MessageCommand\Contracts\LoggingOnCommandInterface;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class CommandMessageHandler implements MessageHandlerInterface
{
    /**
     * @var KernelInterface
     */
    private $kernel;

    /**
     * CommandMessageHandler constructor.
     */
    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    public function __invoke(CommandMessage $message)
    {
        // ... do some work - like generating a report PDF based on the command!
        dump('Processing command: ' . $message->getCommand());
        if ($message->getCommandMessageInstance() instanceof LoggingOnCommandInterface ) {
            dump('Command logging Channel: ' . $message->getCommandMessageInstance()->getLogger());
            // Log you information on a custom Logger Channel named: $message->getCommandMessageInstance()->getLogger()
        }
        dump($message->getDescription());
        $this->processCommandMessage($message);
    }

    private function processCommandMessage(CommandMessage $message)
    {
        $application = new Application($this->kernel);
        $application->setAutoExit(false);

        $params = $message->getParams();
        $options = $message->getOptions();

        $input = [
            'command' => $message->getCommand(),
            //...$params,
            //...$options,
            // (optional) define the value of command arguments
            //'fooArgument' => 'barValue',
            // (optional) pass options to the command
            //'--message-limit' => $messages,
        ];

        if (!empty($params)) {
            foreach ($params as $name => $value) {
                $input[$name] = $value;
            }
        }

        if (!empty($options)) {
            foreach ($options as $name => $value) {
                $input[$name] = $value;
            }
        }

        $input = new ArrayInput($input);

        // You can use NullOutput() if you don't need the output
        $output = new BufferedOutput();
        $application->run($input, $output);

        // return the output, don't use if you used NullOutput()
        $content = $output->fetch();
        dump('CMD Input: ' . json_encode($input));
        dump('CMD Output: ' . $content);
    }
}