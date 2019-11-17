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
            $info2 = "Ada lagi yang bisa Gea bantu?";
            $newData = strtolower($data);
            $array = explode(' ',$newData);

            $count = count($array);
            $checker = 0;

            if (strpos($newData, 'pegadaian') !== false && strpos($newData, 'produk') === false) {
                $info = "Gea jelasin ya tentang Pegadaian, Pegadaian adalah sebuah BUMN sektor keuangan Indonesia yang bergerak pada tiga lini bisnis perusahaan yaitu pembiayaan, emas dan aneka jasa.<br>".$info2;
            } 
            elseif (strpos($newData, 'produk') !== false) {
                $info = "Oke, Gea kasih tau. Pegadaian punya banyak sekali produk yang menarik, kamu bisa kunjungi link yang Gea kasih dibawah ini untuk tau lebih banyak masing - masing produk.<br> <a href='https://sahabatpegadaian.com/produk-pegadaian' title='Produk Pegadaian' target='_blank'>Produk Pegadaian</a> <br>".$info2;
            }
            elseif (strpos($newData, 'simulasi') !== false) {
                $info = "Oke, ada 3 produk yang bisa kamu coba simulasi. Akses halaman simulasi dengan memilih menu navbar simulasi diatas untuk tahu hasilnya. <br>".$info2;
            }
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
