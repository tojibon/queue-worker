<?php
// src/Controller/CommandMessageQueueController.php
namespace App\Controller;

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
        //Dispatching a static command message
        $message = new CommandMessage('generate:pdf', 'A command to generate reporting PDF!');
        $bus->dispatch($message);

        dd($message);
    }
}
