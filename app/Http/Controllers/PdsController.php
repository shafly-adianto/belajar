<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PdsController extends Controller
{
    private function pdsRequest($url, $data, $method = 'POST', $token)
    {
        $data = $data ?? [];
        $token = $token ?? '';

        $baseUrl = PDS_URL . $url;
        $headers = [
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: ' . $token
        ];

        if ($method == 'POST') {
            $process = curl_init($baseUrl);
            curl_setopt($process, CURLOPT_POST, 1);
            curl_setopt($process, CURLOPT_POSTFIELDS, http_build_query($data));
        } else {
            $param = '';
            foreach ($data as $key => $value) {
                $param .= $key . '=' . $value . '&';
            }
            $baseUrl .= '?' . substr($param, 0, -1);

            $process = curl_init($baseUrl);
        }

        curl_setopt($process, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($process, CURLOPT_HEADER, 0);
        curl_setopt($process, CURLOPT_TIMEOUT, 100);
        curl_setopt($process, CURLOPT_PROXY, '');
        curl_setopt($process, CURLOPT_HTTPPROXYTUNNEL, false);
        curl_setopt($process, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt($process, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($process, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);

        Log::info('PDS REQUEST URL : ' . $method . ' ' . $baseUrl);
        Log::info('PDS REQUEST PARAM :', $data);

        $response = json_decode(curl_exec($process), TRUE);

        if ($response) {
            Log::info('PDS RESPONSE :', $response);
        } else {
            Log::info('PDS RESPONSE : NULL');
        }

        curl_close($process);
        return $response;
    }

    public function pdsLogin()
    {
        $token = "";
        $url = '/auth/login';

        $data = [
            'email' => USERNAME,
            'password' => PASSWORD,
            'agen' => 'web',
            'version' => '3'
        ];

        $response = $this->pdsRequest($url, $data, 'POST', $token);
        if ($response) {
            $token = array_key_exists('token',$response)?$response['token']:"";
        }

        return $token;
    }

    public function getHargaEmas()
    {
        $token = $this->pdsLogin();
        $url = '/main/harga_emas';
        $response =  $this->pdsRequest($url, null, 'GET', $token);
        if ($response) {
            Session::put('response', $response);
        }

        return redirect('/simulasiBeliEmas');
    }
}