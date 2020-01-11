<?php

  

namespace App\Http\Controllers;

  
use BotMan\BotMan\BotMan;
use App\Http\Conversations\OnboardingConversation;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use Illuminate\Http\Request;
use App\Http\Controllers\BotManController;
use BotMan\BotMan\Messages\Incoming\Answer;

  

class BotManController extends Controller

{

    /**

     * Place your BotMan logic here.

     */

    public function handle()

    {

        $botman = app('botman');
        $botman = resolve('botman');

        $botman->hears('{message}', BotManController::class.'@startConversation');

        $botman->listen();

    }

    public function startConversation(BotMan $bot)
    {
        $bot->startConversation(new OnboardingConversation());
    }
}

