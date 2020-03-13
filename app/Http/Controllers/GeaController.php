<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeaController extends Controller
{
    public function getAnswer(Request $request){
      $reqParamArray['sender'] = $request->user;
      $reqParamArray['message'] = $request->inputan;

      $params = $reqParamArray;

      $data = json_encode($params);

      $client = new \GuzzleHttp\Client([
        'headers' => ['Content-Type' => 'application/json']
      ]);

      $response = $client->post('http://localhost:5005/webhooks/rest/webhook',
        ['body' => $data]
      );

      $response = $response->getBody()->getContents();

      $data = json_decode($response);

      return $data;
    }
}
