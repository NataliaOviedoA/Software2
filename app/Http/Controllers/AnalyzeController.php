<?php

namespace App\Http\Controllers;

use DarrynTen\PersonalityInsightsPhp\PersonalityInsights;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AnalyzeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // Set the endpoint URL
        $url = 'https://gateway.watsonplatform.net/personality-insights/api';

        // Set the image uri
        //example : $file = file_get_contents('./my_profile.jpg');
//        $file = File::get(storage_path('profile.txt'));
        $file = File::get(storage_path('sample.txt'));

        //cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url."/v3/profile?version=2017-10-13"); //Endpoint URL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1); //POST
        curl_setopt($ch, CURLOPT_USERPWD, "apikey:ELwOs5B7yHT31E_rklYAVFhiIOF7vW2gyT4bVeZ4zw1t");
//        curl_setopt($ch, CURLOPT_USERPWD,"'Personality Insights-sw2':'ELwOs5B7yHT31E_rklYAVFhiIOF7vW2gyT4bVeZ4zw1t'");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $file); //Parameters
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/plain;charset=utf-8", "Accept: application/json"));




        // Execute the cURL command
        $result = curl_exec($ch);

        // Erro
        if (curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
        }
        echo $result;

        // Close the command
        curl_close($ch);


//        $config = [
//            'username' => 'Personality Insights-sw2',
//            'password' => 'ELwOs5B7yHT31E_rklYAVFhiIOF7vW2gyT4bVeZ4zw1t'
//        ];
//
//        // Get an instance
//        $instance = new PersonalityInsights($config);
//
//        // Add some text
//        $text = File::get(storage_path('sample.txt'));
////        echo $text;
//        $instance->addText($text);
//
//        // Get the insights
//        $insights = $instance->getInsights();
//
//        dd($insights);

//        return view('dashboard');
    }
}
