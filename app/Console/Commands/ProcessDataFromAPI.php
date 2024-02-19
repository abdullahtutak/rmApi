<?php

namespace App\Console\Commands;
use App\Models\CharactersModel; 
use App\Models\LocationModel; 
use App\Models\EpisodeModel; 
use Illuminate\Support;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class ProcessDataFromAPI extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rickandmorty:getdata';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://rickandmortyapi.com/api/character');
        $data = json_decode($response->getBody(), true);
      
       
       $forData = $data['results'];
        foreach($forData as $val){
           
            $addData = new CharactersModel();
            $addData->name = $val['name'];
            $addData->type = '';
            $addData->last_location = $val['location']['name'];
            $addData->first_see = $val['origin']['name'];
            $addData->status = $val['status'];
            $addData->species = $val['species'];
            $addData->gender = $val['gender'];
            $addData->image = $val['image'];

            $addData->save();
        }


       
        $client = new Client();
        $response = $client->request('GET', 'https://rickandmortyapi.com/api/location');
        $data = json_decode($response->getBody(), true);
      
       
       $forData = $data['results'];
        foreach($forData as $val){
           
            $addData = new LocationModel();
            $addData->location_id = $val['id'];
            $addData->name = $val['name'];
            $addData->type = $val['type'];
            $addData->dimension = $val['dimension'];
            
            $addData->residents = json_encode($val['residents'],JSON_UNESCAPED_SLASHES);
            $addData->url = $val['url'];
            $addData->save();
        }


          
        $client = new Client();
        $response = $client->request('GET', 'https://rickandmortyapi.com/api/episode');
        $data = json_decode($response->getBody(), true);
        

       
       $forData = $data['results'];
        foreach($forData as $val){

           

            $addData = new EpisodeModel();
            $addData->episode_id = $val['id'];
            $addData->name = $val['name'];
            $addData->air_date = $val['air_date'];
            $addData->episode = $val['episode'];
            
            $addData->characters = json_encode($val['characters'],JSON_UNESCAPED_SLASHES);
            $addData->url = $val['url'];
            $addData->save();
        }

    }
}
