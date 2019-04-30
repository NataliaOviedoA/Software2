<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\TwitterAccount;

class AnalyzeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('analyze');
    }

    public function analizarCuenta()
    {

//        $account = $_REQUEST['account'];
//
//        $twitterAccount = new TwitterAccount($account);
//        $tweets = $twitterAccount->getTweets();
//        dd($tweets);
//        return;

//        $file = File::get(storage_path('sample.txt'));
//
//        //cURL
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, env('WATSON_URL', "") . "/v3/profile?version=2017-10-13");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($ch, CURLOPT_POST, 1); //POST
//        curl_setopt($ch, CURLOPT_USERPWD, "apikey:".env("WATSON_API_KEY",""));
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $file); //Parameters
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/plain;charset=utf-8", "Accept: application/json"));
//
//        // Execute the cURL command
//        $result = curl_exec($ch);
//
//        // Error
//        if (curl_errno($ch)) {
//            echo 'Error: ' . curl_error($ch);
//        }
//        echo $result;
//
//        // Close the command
//        curl_close($ch);
    }
}
