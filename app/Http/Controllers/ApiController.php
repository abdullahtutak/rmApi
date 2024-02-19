<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CharactersModel; 
use App\Models\EpisodeModel; 
use App\Models\LocationModel; 
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
   
    // Episode
    public function episodeIndex()
    {
        $episodes = EpisodeModel::all();
        return response()->json($episodes);
    } 

    public function getSingleEpisode($id)
    {
      $episodeLocation = EpisodeModel::where('episode_id',$id)->first();
      return response()->json($episodeLocation);
    }

    public function multiEpisode(Request $request, $id)
    {
        $rules = [
            'id' => 'required|regex:/^\d+(,\d+)*$/'
        ];

        $messages = [
            'id.regex' => 'Episode IDs must consist of numbers separated by commas.'
        ];

        $validator = Validator::make(['id' => $id], $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 400, [], JSON_UNESCAPED_UNICODE);
        } else {
            $ids = explode(',', $id);
            $data = EpisodeModel::whereIn('episode_id', $ids)->get();
            return response()->json($data);
        }
    }

    public function getFilterEpisode(Request $request)
    {
      $episode_id = $request->query('episode_id');
      $name = $request->query('name');
      $air_date = $request->query('air_date');
      $episode = $request->query('episode');
      $url = $request->query('url');

      $EpisodeQuery = EpisodeModel::query();
      if ($episode_id) {
        $EpisodeQuery->where('location_id', $episode_id);
      }
      if ($name) {
      $EpisodeQuery->where('name', $name);

      }

      if ($air_date) {
      $EpisodeQuery->where('type', $air_date);
      }

      if ($episode) {
      $EpisodeQuery->where('episode', $episode);
      }

  

     if ($url) {
      $EpisodeQuery->where('url', $url);
      }

     $episode = $EpisodeQuery->get();

      return response()->json($episode);
    }

    

     // Location
    public function locationIndex()
    {
        $locations = LocationModel::all();
        return response()->json($locations);
    }

    public function getSingleLocation($id)
    {
      $singleLocation = LocationModel::where('location_id',$id)->first();
      return response()->json($singleLocation);
    }

    public function multiLocation(Request $request, $id)
    {
        $rules = [
            'id' => 'required|regex:/^\d+(,\d+)*$/'
        ];

        $messages = [
            'id.regex' => 'Location IDs must consist of comma-separated numbers.'
        ];

        $validator = Validator::make(['id' => $id], $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 400, [], JSON_UNESCAPED_UNICODE);
        } else {
            $ids = explode(',', $id);
            $data = LocationModel::whereIn('location_id', $ids)->get();
            return response()->json($data);
        }
    }

    public function getFilterLocation(Request $request)
    {
      $location_id = $request->query('location_id');
      $name = $request->query('name');
      $type = $request->query('type');
      $dimension = $request->query('dimension');
      $url = $request->query('url');

      $LocationQuery = LocationModel::query();
      if ($location_id) {
        $LocationQuery->where('location_id', $location_id);
      }
      if ($name) {
      $LocationQuery->where('name', $name);

      }

      if ($type) {
      $LocationQuery->where('type', $type);
      }

      if ($dimension) {
      $LocationQuery->where('dimension', $dimension);
      }

   

     if ($url) {
      $LocationQuery->where('url', $url);
      }

     $location = $LocationQuery->get();

      return response()->json($location);
    }



        // Character
    public function charactersIndex()
    {
        $characters = CharactersModel::all();
        return response()->json($characters);
    }

    public function getSingleCharacter($id)
    {
        $singleCharacter = CharactersModel::find($id);
        return response()->json($singleCharacter);
    }

    public function getFilterCharacter(Request $request)
    {
      $name = $request->query('name');
      $status = $request->query('status');
      $species = $request->query('species');
      $gender = $request->query('gender');
     
      $charactersQuery = CharactersModel::query();
      if ($name) {
      $charactersQuery->where('name', $name);

      }

      if ($status) {
      $charactersQuery->where('status', $status);
      }

      if ($species) {
      $charactersQuery->where('species', $species);
      }

     if ($gender) {
     $charactersQuery->where('gender', $gender);
     }

     $characters = $charactersQuery->get();

      return response()->json($characters);
    }

    public function multiCharacters(Request $request, $id)
    {
        $rules = [
            'id' => 'required|regex:/^\d+(,\d+)*$/'
        ];

        $messages = [
            'id.regex' => 'The character Id should consist of comma-separated numbers.'
        ];

        $validator = Validator::make(['id' => $id], $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 400, [], JSON_UNESCAPED_UNICODE);
        } else {
            $ids = explode(',', $id);
            $data = CharactersModel::whereIn('id', $ids)->get();
            return response()->json($data);
        }
    }
}
