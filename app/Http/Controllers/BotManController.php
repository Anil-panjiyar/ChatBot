<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BotManController extends Controller
{
    //
    public function handle()
  {

       $botman = app('botman');
       $botman->hears('{message}', function($botman, $message) {
       if ($message == 'hi')
        {
          $this->askName($botman);
        }
        else
        {
          $botman->reply("heelo");
        }
     });

     $botman->listen();

  }

    /**
     * Place your BotMan logic here.
    */

    public function askName($botman)
    {

        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
        $name = $answer->getText();
        $this->say('Nice to meet you '.$name);

      });

    }
}
