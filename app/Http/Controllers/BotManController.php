<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\vocab_greetings;
use App\vocab_how;
use App\vocab_product;
use App\vocab_time;
use App\vocab_verb;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{data}', function ($bot, $data) {
            $kalimat = strtolower($data);
            $kata = explode(" ", $kalimat);

            $checker = $this->checking_vocab($kata);
            $answer = $this->getting_answer($checker);

            $bot->reply($answer);
        });

        $botman->listen();
    }

    public function getting_answer($checker){
        $answer = "Makna: ";

        if(intval($checker['greetings']) > 0){
            $answer .= 'greetings ';
        }

        if(intval($checker['how']) > 0){
            $answer .= 'how ';
        }

        if(intval($checker['product']) > 0){
            $answer .= 'product ';
        }

        if(intval($checker['time']) > 0){
            $answer .= 'time ';
        }

        if(intval($checker['verb']) > 0){
            $answer .= 'verb ';
        }

        return $answer;
    }

    public function checking_vocab($kata){
        $checker['greetings'] = 0;
        $checker['how'] = 0;
        $checker['product'] = 0;
        $checker['time'] = 0;
        $checker['verb'] = 0;

        foreach ($kata as $value) {
            $checker['greetings'] += $this->count_greetings($value);
            $checker['how'] += $this->count_how($value);
            $checker['product'] += $this->count_product($value);
            $checker['time'] += $this->count_time($value);
            $checker['verb'] += $this->count_verb($value);
        }

        return $checker;
    }

    public function count_greetings($value){
        return vocab_greetings::where('vocab','=',$value)->count();
    }

    public function count_how($value){
        return vocab_how::where('vocab','=',$value)->count();
    }

    public function count_product($value){
        return vocab_product::where('vocab','=',$value)->count();
    }

    public function count_time($value){
        return vocab_time::where('vocab','=',$value)->count();
    }

    public function count_verb($value){
        return vocab_verb::where('vocab','=',$value)->count();
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

    public function handle_backup()
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
}
