<?php
namespace App\Http\Controllers;

use App\Models\Summoner;
use Illuminate\Http\Request;
use Illuminate\View\View;
use RiotAPI\LeagueAPI\LeagueAPI;
use RiotAPI\Base\Definitions\Region;
use Exception;
use Illuminate\Support\Facades\Log;

class SummonerController extends Controller
{
    public function show(Region $region, Summoner $summoner): View
    {

        //  Initialize the library
        $api = new LeagueAPI([
            //  Your API key, you can get one at https://developer.riotgames.com/
            LeagueAPI::SET_KEY    => env('RIOT_API_KEY'),
            //  Target region (you can change it during lifetime of the library instance)
            LeagueAPI::SET_REGION => Region::EUROPE_WEST
        ]);
        
        $champions = array();
        $summoner = $api->getSummonerByName("Syntax Junkyard");
        $matches = $api->getMatchIdsByPUUID($summoner->puuid);
        $mastery = $api->getChampionMasteries($summoner->id);
        foreach ($mastery as $champ) {
            $champions[] = $api->getStaticChampion($champ->championId, false, "en_US", "13.4.1");
        }
        var_dump($summoner);

        return view('summoner',  [
            'summoner' => $summoner,
            'champions' => $champions
        ]);
    }
}
