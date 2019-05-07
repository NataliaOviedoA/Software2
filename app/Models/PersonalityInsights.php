<?php
/**
 * Created by PhpStorm.
 * User: Genaro Mauricio
 * Date: 01/05/2019
 * Time: 05:51 PM
 */

namespace App\Models;
use Illuminate\Support\Facades\File;

class PersonalityInsights
{

    public static function formatTweets($tweets)
    {
        $array = [];
        // dd($tweets);
        foreach ($tweets as $tweet){
            $element = [];
            if (array_key_exists("text", $tweet)){
                $element["content"] = $tweet["text"];
                $element["contenttype"] = "text-plain";
                $element["created"] = strtotime($tweet["created_at"]);
                $element["id"] = $tweet["id"];
                $element["language"] = $tweet["lang"];
            }
            $array[] = $element;
        }

        $result = array("contentItems" => $array);
        return $result;
    }

    public static function getTweetsInsights($fileName)
    {
        $file = File::get(storage_path($fileName));

        //cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, env('WATSON_URL', "") . "/v3/profile?version=2017-10-13");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1); //POST
        curl_setopt($ch, CURLOPT_USERPWD, "apikey:" . env("WATSON_API_KEY", ""));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $file); //Parameters
        curl_setopt($ch, CURLOPT_POSTFIELDS, $file); //Parameters
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/plain;charset=utf-8", 'Accept: application/json', 'Content-Language: es'));
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/plain;charset=utf-8", 'Accept: application/json', 'Content-Language: es'));

        // Execute the cURL command
        $result = curl_exec($ch);

        // Error
        if (curl_errno($ch)) {
            return 'Error: ' . curl_error($ch);
        }

        // Close the command
        curl_close($ch);

        return $result;
    }

}