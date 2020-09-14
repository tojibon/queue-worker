<?php
// src/Controller/CommandMessageQueueController.php
namespace App\Controller;

use App\MessageCommand\DebugMessengerCommand;
use App\MessageCommand\ReportPdfCommand;
use App\Message\CommandMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;


class CommandMessageQueueController extends AbstractController
{
    /**
     * @Route("/command/message/queues", name="command_message_queues", methods="get")
     */
    public function index(MessageBusInterface $bus)
    {
        $registerCommand = new ReportPdfCommand();
        //$registerCommand->setParams('arg1', 1);
        $registerCommand->setOptions('--help');
        $registerCommand->setLogger('customLoggerChannel');

        //Dispatching a static command message
        $message = new CommandMessage($registerCommand);
        $bus->dispatch($message);


        $registerCommand = new DebugMessengerCommand();

        //Dispatching a static command message
        $message = new CommandMessage($registerCommand);
        $bus->dispatch($message);

        dd($message);
    }
}
