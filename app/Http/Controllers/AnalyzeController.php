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

        $account = $_REQUEST['account'];

        /* Obtiene los Tweets de la cuenta */
        $tweets = TwitterAccount::getTweets($account);

        /* Realiza el formate según el formato de Personality Insights */
        $formatedTweets = PersonalityInsights::formatTweets($tweets);

        /* Crea el archivo json */
        $fileName = $account . '_' . time() . '.json';
        File::put(storage_path($fileName), json_encode($formatedTweets));

        /* Realiza y devuelve el resultado del análisis */
        $insights = PersonalityInsights::getTweetsInsights($fileName);

        /* Obtiene los Tweets formateados para la vista */
        $timeline = TwitterAccount::formatTweets($tweets);

        $result = array("insights" => json_decode($insights), "tweets" => $timeline);
        echo json_encode($result);

//        return PersonalityInsights::getTweetsInsights($fileName);
    }
}
