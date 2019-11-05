<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{data}', function ($bot, $data) {
            $info2 = "Ada lagi yang bisa dibantu?";
            $array = explode(' ', $data);

            $count = count($array);
            $checker = 0;

            for($i=0; $i<$count; $i++){
              if($array[$i]=='produk') $checker++;
              elseif($array[$i]=='pegadaian') $checker++;
            }

            if($checker==2) $info = "Produk Pegadaian yang ada saat ini adalah KCA, Gadai, Amanah, Emas. ".$info2;
            else $info = "Maaf, saya tidak memahami maksud anda. ".$info2;

            $bot->reply($info);
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
