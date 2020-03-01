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
    $answer = "";

    if(intval($checker->greetings['count']) > 0){
      $answer .= $checker->greetings['kata'];
      if(intval($checker->time['count']) > 0){
        $answer .= ', '.$checker->time['kata'];
      }
      $answer .= ' :)';
    }

    if(intval($checker->how['count']) > 0){
      $answer .= 'how:'.$checker->how['kata'].'; ';
    }

    if(intval($checker->product['count']) > 0){
      $answer .= 'product:'.$checker->product['kata'].'; ';
    }

    if(intval($checker->time['count']) > 0 && intval($checker->greetings['count']) == 0){
      $answer .= $checker->time['kata'].' :)';
    }

    if(intval($checker->verb['count']) > 0){
      $answer .= 'verb:'.$checker->verb['kata'].'; ';
    }

    if($answer=="") return "Maaf, gea ga paham :(";
    return $answer;
  }

  public function checking_vocab($kata){
    $checker = (object)[];
    $checker->greetings['count'] = 0;
    $checker->how['count'] = 0;
    $checker->product['count'] = 0;
    $checker->time['count'] = 0;
    $checker->verb['count'] = 0;

    foreach ($kata as $value) {
      if(!is_null($vocab = $this->count_greetings($value))){
        $checker->greetings['count'] += 1;
        $checker->greetings['kata'] = $vocab->vocab;
      }
      if($jumlah=$this->count_how($value)>0){
        $checker->how['count'] += $jumlah;
        $checker->how['kata'] = $value;
      }
      if($jumlah=$this->count_product($value)>0){
        $checker->product['count'] += $jumlah;
        $checker->product['kata'] = $value;
      }
      if(!is_null($vocab = $this->count_time($value))){
        $checker->time['count'] += 1;
        $checker->time['kata'] = $vocab->vocab;
      }
      if($jumlah=$this->count_verb($value)>0){
        $checker->verb['count'] += $jumlah;
        $checker->verb['kata'] = $value;
      }
    }

    return $checker;
  }

  // Toleransi typo 1 char untuk soundex

  public function count_greetings($value){
    return vocab_greetings::whereRaw('soundex(vocab) like soundex(?)', $value)->first();
  }

  public function count_how($value){
    return vocab_how::where('vocab','=',$value)->count();
  }

  public function count_product($value){
    return vocab_product::where('vocab','=',$value)->count();
  }

  public function count_time($value){
    return vocab_time::whereRaw('soundex(vocab) like soundex(?)', $value)->first();
  }

  public function count_verb($value){
    return vocab_verb::where('vocab','=',$value)->count();
  }
}
