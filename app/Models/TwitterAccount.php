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

    public function __construct($account)
    {
        $this->account = $account;
        $this->client = new Client([
            'base_uri' => env("TWITTER_URL", ""),
            'timeout' => 200.0,
        ]);
    }

    public function getTweets()
    {
        try {
            $response = $this->client->request('GET', "/init?screen_name=".$this->account, ['verify' => false]);
//            echo $response->getBody()->getContents();
            $respuesta = json_decode($response->getBody()->getContents());
//            return $respuesta;
            $collection = Collection::make($respuesta);
            return $collection;
        } catch (GuzzleException $e) {
            return "TwitterAccount.getTweets: " . $e;
        }
    }

}
