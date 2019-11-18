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
            elseif (strpos($newData, 'produk') !== false && strpos($newData, 'pegadaian') !== false) {
                $info = "Oke, Gea kasih tau. Pegadaian punya banyak sekali produk yang menarik, kamu bisa kunjungi link yang Gea kasih dibawah ini untuk tau lebih banyak masing - masing produk.<br> <a href='https://sahabatpegadaian.com/produk-pegadaian' title='Produk Pegadaian' target='_blank'>Produk Pegadaian</a> <br>".$info2;
            }
            elseif (strpos($newData, 'simulasi') !== false) {
                $info = "Oke, ada 3 produk yang bisa kamu coba simulasi. Akses halaman simulasi dengan memilih menu navbar <i><b>Simulasi</b></i> diatas untuk tahu hasilnya. <br>".$info2;
            }
            elseif (strpos($newData, 'harga') !== false) {
                if (strpos($newData, 'emas') !== false){
                    $info = "Gea kasih tahu ya, untuk harga emas saat ini <b>1 gram</b> sebesar <b>704.000</b> Rupiah, untuk info lebih lanjut kakak, bisa cek di menu navbar bagian <i><b>Info Harga Pasar</b></i> di atas <br>".$info2;
                }
                else if (strpos($newData, 'kendaraan') !== false || strpos($newData, 'mobil') !== false || strpos($newData, 'motor') !== false){
                    $info = "Oke, untuk mengetahui info harga kendaraan tersebut, kamu bisa cek dalam menu <b><i>Info Harga Pasar</i></b> di atas<br>".$info2;
                } 
                else {
                    $info = "Untuk harga apa ya yang kakak maksud ?";
                }
            }
            else $info = "Maaf, Gea belum mengerti maksud kakak. <br>".$info2;

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
