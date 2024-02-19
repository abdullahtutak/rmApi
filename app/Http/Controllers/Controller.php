<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\CharactersModel; 
use App\Models\LocationModel; 
use App\Models\EpisodeModel; 

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Str;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        
     



        $data = CharactersModel::inRandomOrder()->take(8)->get();
        return view('welcome', compact('data'));
      
       
        
    }

    public function docs (){
            return view('docs');
    }

  
}
