<?php

namespace App\Models;
use GuzzleHttp\Client;

use Illuminate\Database\Eloquent\Model;

class Checker extends Model
{
    public function green_checker($code)
    {
        $client = new Client();
        $res = $client->request('GET', 'https://get.dgc.gov.it/v1/dgc/signercertificate/status', ['verify' => false]);
        $data = $res->getBody();
        return json_decode($data);
    }
}
