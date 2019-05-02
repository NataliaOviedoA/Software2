<?php

namespace App\Models;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection as Collection;

class TwitterAccount extends Model
{

    public $account;
    protected $client;

    public static function getTweets($account)
    {
        try {
            $client = new Client([
                'base_uri' => env("TWITTER_URL", ""),
                'timeout' => 200.0,
            ]);
            $response = $client->request('GET', "/init?screen_name=".$account, ['verify' => false]);
            $respuesta = json_decode(utf8_encode($response->getBody()->getContents()), true);
            $collection = Collection::make($respuesta);
            return $collection;
        } catch (GuzzleException $e) {
            return "TwitterAccount.getTweets: " . $e;
        }
    }

}
