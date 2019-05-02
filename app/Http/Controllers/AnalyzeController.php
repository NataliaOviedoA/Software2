<?php

namespace App\Http\Controllers;

use App\Models\PersonalityInsights;
use App\Models\TwitterAccount;
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
        return view('analyze');
    }

    public function analizarCuenta()
    {
        
        return "{
    \"word_count\": 5658,
    \"processed_language\": \"es\",
    \"personality\": [
        {
            \"trait_id\": \"big5_openness\",
            \"name\": \"Openness\",
            \"category\": \"personality\",
            \"percentile\": 0.9714165723184337,
            \"significant\": true,
            \"children\": [
                {
                    \"trait_id\": \"facet_adventurousness\",
                    \"name\": \"Adventurousness\",
                    \"category\": \"personality\",
                    \"percentile\": 0.6910963535171044,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_artistic_interests\",
                    \"name\": \"Artistic interests\",
                    \"category\": \"personality\",
                    \"percentile\": 0.711826096463102,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_emotionality\",
                    \"name\": \"Emotionality\",
                    \"category\": \"personality\",
                    \"percentile\": 0.762975552670148,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_imagination\",
                    \"name\": \"Imagination\",
                    \"category\": \"personality\",
                    \"percentile\": 0.9666390008439846,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_intellect\",
                    \"name\": \"Intellect\",
                    \"category\": \"personality\",
                    \"percentile\": 0.5914799257084854,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_liberalism\",
                    \"name\": \"Authority-challenging\",
                    \"category\": \"personality\",
                    \"percentile\": 0.7144910558233211,
                    \"significant\": true
                }
            ]
        },
        {
            \"trait_id\": \"big5_conscientiousness\",
            \"name\": \"Conscientiousness\",
            \"category\": \"personality\",
            \"percentile\": 0.7178579664955131,
            \"significant\": true,
            \"children\": [
                {
                    \"trait_id\": \"facet_achievement_striving\",
                    \"name\": \"Achievement striving\",
                    \"category\": \"personality\",
                    \"percentile\": 0.42641727929676393,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_cautiousness\",
                    \"name\": \"Cautiousness\",
                    \"category\": \"personality\",
                    \"percentile\": 0.6653814643355187,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_dutifulness\",
                    \"name\": \"Dutifulness\",
                    \"category\": \"personality\",
                    \"percentile\": 0.6988589264634314,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_orderliness\",
                    \"name\": \"Orderliness\",
                    \"category\": \"personality\",
                    \"percentile\": 0.7214567861528793,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_self_discipline\",
                    \"name\": \"Self-discipline\",
                    \"category\": \"personality\",
                    \"percentile\": 0.6665401417586059,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_self_efficacy\",
                    \"name\": \"Self-efficacy\",
                    \"category\": \"personality\",
                    \"percentile\": 0.5986473393494081,
                    \"significant\": true
                }
            ]
        },
        {
            \"trait_id\": \"big5_extraversion\",
            \"name\": \"Extraversion\",
            \"category\": \"personality\",
            \"percentile\": 0.18536891976246467,
            \"significant\": true,
            \"children\": [
                {
                    \"trait_id\": \"facet_activity_level\",
                    \"name\": \"Activity level\",
                    \"category\": \"personality\",
                    \"percentile\": 0.4656232282876429,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_assertiveness\",
                    \"name\": \"Assertiveness\",
                    \"category\": \"personality\",
                    \"percentile\": 0.4633979647478702,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_cheerfulness\",
                    \"name\": \"Cheerfulness\",
                    \"category\": \"personality\",
                    \"percentile\": 0.19989396599027576,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_excitement_seeking\",
                    \"name\": \"Excitement-seeking\",
                    \"category\": \"personality\",
                    \"percentile\": 0.6159137612330049,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_friendliness\",
                    \"name\": \"Outgoing\",
                    \"category\": \"personality\",
                    \"percentile\": 0.46807196239257487,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_gregariousness\",
                    \"name\": \"Gregariousness\",
                    \"category\": \"personality\",
                    \"percentile\": 0.33421421136061624,
                    \"significant\": true
                }
            ]
        },
        {
            \"trait_id\": \"big5_agreeableness\",
            \"name\": \"Agreeableness\",
            \"category\": \"personality\",
            \"percentile\": 0.6244611715908331,
            \"significant\": true,
            \"children\": [
                {
                    \"trait_id\": \"facet_altruism\",
                    \"name\": \"Altruism\",
                    \"category\": \"personality\",
                    \"percentile\": 0.7590163172895554,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_cooperation\",
                    \"name\": \"Cooperation\",
                    \"category\": \"personality\",
                    \"percentile\": 0.7415007929754382,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_modesty\",
                    \"name\": \"Modesty\",
                    \"category\": \"personality\",
                    \"percentile\": 0.7966797792673899,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_morality\",
                    \"name\": \"Uncompromising\",
                    \"category\": \"personality\",
                    \"percentile\": 0.6316047206659237,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_sympathy\",
                    \"name\": \"Sympathy\",
                    \"category\": \"personality\",
                    \"percentile\": 0.38215833789496273,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_trust\",
                    \"name\": \"Trust\",
                    \"category\": \"personality\",
                    \"percentile\": 0.6787543085597298,
                    \"significant\": true
                }
            ]
        },
        {
            \"trait_id\": \"big5_neuroticism\",
            \"name\": \"Emotional range\",
            \"category\": \"personality\",
            \"percentile\": 0.28339561185238815,
            \"significant\": true,
            \"children\": [
                {
                    \"trait_id\": \"facet_anger\",
                    \"name\": \"Fiery\",
                    \"category\": \"personality\",
                    \"percentile\": 0.6225464184596704,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_anxiety\",
                    \"name\": \"Prone to worry\",
                    \"category\": \"personality\",
                    \"percentile\": 0.49471628453655137,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_depression\",
                    \"name\": \"Melancholy\",
                    \"category\": \"personality\",
                    \"percentile\": 0.4095866125268494,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_immoderation\",
                    \"name\": \"Immoderation\",
                    \"category\": \"personality\",
                    \"percentile\": 0.3157428775007677,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_self_consciousness\",
                    \"name\": \"Self-consciousness\",
                    \"category\": \"personality\",
                    \"percentile\": 0.5457720174745258,
                    \"significant\": true
                },
                {
                    \"trait_id\": \"facet_vulnerability\",
                    \"name\": \"Susceptible to stress\",
                    \"category\": \"personality\",
                    \"percentile\": 0.6807442752254252,
                    \"significant\": true
                }
            ]
        }
    ],
    \"needs\": [
        {
            \"trait_id\": \"need_challenge\",
            \"name\": \"Challenge\",
            \"category\": \"needs\",
            \"percentile\": 0.3758669126421804,
            \"significant\": true
        },
        {
            \"trait_id\": \"need_closeness\",
            \"name\": \"Closeness\",
            \"category\": \"needs\",
            \"percentile\": 0.6242627258212706,
            \"significant\": true
        },
        {
            \"trait_id\": \"need_curiosity\",
            \"name\": \"Curiosity\",
            \"category\": \"needs\",
            \"percentile\": 0.9836517134286492,
            \"significant\": true
        },
        {
            \"trait_id\": \"need_excitement\",
            \"name\": \"Excitement\",
            \"category\": \"needs\",
            \"percentile\": 0.2097415857381688,
            \"significant\": true
        },
        {
            \"trait_id\": \"need_harmony\",
            \"name\": \"Harmony\",
            \"category\": \"needs\",
            \"percentile\": 0.5946828830528038,
            \"significant\": true
        },
        {
            \"trait_id\": \"need_ideal\",
            \"name\": \"Ideal\",
            \"category\": \"needs\",
            \"percentile\": 0.49529187314216,
            \"significant\": true
        },
        {
            \"trait_id\": \"need_liberty\",
            \"name\": \"Liberty\",
            \"category\": \"needs\",
            \"percentile\": 0.3160137342702828,
            \"significant\": true
        },
        {
            \"trait_id\": \"need_love\",
            \"name\": \"Love\",
            \"category\": \"needs\",
            \"percentile\": 0.3408257737038934,
            \"significant\": true
        },
        {
            \"trait_id\": \"need_practicality\",
            \"name\": \"Practicality\",
            \"category\": \"needs\",
            \"percentile\": 0.5897940421573342,
            \"significant\": true
        },
        {
            \"trait_id\": \"need_self_expression\",
            \"name\": \"Self-expression\",
            \"category\": \"needs\",
            \"percentile\": 0.2855434496598227,
            \"significant\": true
        },
        {
            \"trait_id\": \"need_stability\",
            \"name\": \"Stability\",
            \"category\": \"needs\",
            \"percentile\": 0.7933459667253602,
            \"significant\": true
        },
        {
            \"trait_id\": \"need_structure\",
            \"name\": \"Structure\",
            \"category\": \"needs\",
            \"percentile\": 0.6568111619189383,
            \"significant\": true
        }
    ],
    \"values\": [
        {
            \"trait_id\": \"value_conservation\",
            \"name\": \"Conservation\",
            \"category\": \"values\",
            \"percentile\": 0.5085164751128559,
            \"significant\": true
        },
        {
            \"trait_id\": \"value_openness_to_change\",
            \"name\": \"Openness to change\",
            \"category\": \"values\",
            \"percentile\": 0.2866898661061655,
            \"significant\": true
        },
        {
            \"trait_id\": \"value_hedonism\",
            \"name\": \"Hedonism\",
            \"category\": \"values\",
            \"percentile\": 0.3001197529500228,
            \"significant\": true
        },
        {
            \"trait_id\": \"value_self_enhancement\",
            \"name\": \"Self-enhancement\",
            \"category\": \"values\",
            \"percentile\": 0.6100805409299312,
            \"significant\": true
        },
        {
            \"trait_id\": \"value_self_transcendence\",
            \"name\": \"Self-transcendence\",
            \"category\": \"values\",
            \"percentile\": 0.6651441611023697,
            \"significant\": true
        }
    ],
    \"warnings\": [
        {
            \"warning_id\": \"JSON_AS_TEXT\",
            \"message\": \"Request input was processed as text/plain as indicated, however detected a JSON input. Did you mean application/json?\"
        }
    ]
}";
//        $account = $_REQUEST['account'];
//
//        /* Obtiene los Tweets de la cuenta */
//        $tweets = TwitterAccount::getTweets($account);
//
//        /* Realiza el formate según el formato de Personality Insights */
//        $formatedTweets = PersonalityInsights::formatTweets($tweets);
//
//        /* Crea el archivo json */
//        $fileName = $account . '_' . time() . '.json';
//        File::put(storage_path($fileName), json_encode($formatedTweets));
//
//        /* Realiza y devuelve el resultado del análisis */
//        echo PersonalityInsights::getTweetsInsights($fileName);
//        return PersonalityInsights::getTweetsInsights($fileName);
    }
}
