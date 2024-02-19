<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Bootstrap Starter Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>


#left-area {
        height: 100vh;
        overflow-y: auto;
        background-color: #f8f9fa; 
        border-right: 1px solid #dee2e6; 
        position: fixed;
    }

    .text{
        color: #1e272e;
    }

      </style>
</head>
<body>
    
    <nav  class="navbar navbar-expand-lg navbar-light bg-light" style="position: :fixed;" >
        <div  class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">
              <img src="{{ asset('images/rmicon.png') }}" alt="Logo" width="50" height="40">
            </a>
            <!-- Diğer navbar içeriği buraya gelecek -->
          </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
         
          <div>
            
          </div>
          <ul class="navbar-nav ml-auto"> 
            <li class="nav-item">
                <a class="navbar-brand" href="{{route('docs')}}">Docs</a>
            </li>
            
        
        </ul>
        </div>
      </nav>


      <div class="container-fluid" >
        <div class="row">
            <!-- Sol alan -->
            <div class="col-md-2 p-0" id="left-area" >
                <!-- İçerik -->
                <div class="p-4">

                    <h4>Info</h4>
                    <p>Postman Collection </p>
                    <p>Unit Tests </p>
                  
                </div>
                <div class="p-4">
                   
                 <h4>Character</h4>
                 <a style="text-decoration: none;" href="#characterSchema"><p style="color: black; ">Character schema</p></a>
                    <a style="text-decoration: none;" href="#allCharacter"><p style="color: black">Get all characters</p></a>
                    <a style="text-decoration: none;" href="#singleCharacter">  <p style="color: black" >Get a single character</p></a>
                    <a  style="text-decoration: none;" href="#multipleCharacters"><p style="color: black">Get multiple characters</p></a>
                    <a  style="text-decoration: none;" href="#filterCharacters"><p style="color: black">Filter characters</p></a>
                </div>
                   
                    <div class="p-4">
                    <h4>Location</h4>
                   <a style="text-decoration: none;" href="#locationSchema"><p style="color: black; ">Location schema</p></a> 
                  <a  style="text-decoration: none;" href="#allLocation">  <p style="color: black; "> Get all locations</p></a>
                  <a style="text-decoration: none;" href="#singleLocation"> <p style="color: black; ">Get a single location</p></a> 
                    <a style="text-decoration: none;" href="#multipleLocation"><p style="color: black; ">Get multiple locations</p></a>
                   <a style="text-decoration: none;" href="#filterLocation"> <p style="color: black; ">Filter locations</p></a>
                </div>
                  
                    <div class="p-4" style="margin-bottom:12%">
                     
                    <h4>Episode</h4>
                    <a style="text-decoration: none;" href="#episodeSchema"><p style="color: black; ">Episode schema</p></a> 
                    <a style="text-decoration: none;" href="#allEpisode"><p style="color: black; ">Get all episodes</p></a> 
                    <a style="text-decoration: none;" href="#singleEpisode"><p style="color: black; ">Get a single episode</p></a> 
                    <a style="text-decoration: none;" href="#multipleEpisode"><p style="color: black; ">Get multiple episodes</p></a> 
                    <a style="text-decoration: none;" href="#filterSchema"><p style="color: black; ">Filter episodes</p></a> 
                   
                 
                </div>

                  

                
            </div>


            <div class="container">
                <div class="row justify-content-center mb-5">
                  <h1 class="text">The Rick and Morty <br> API Documentation </h1>
                </div> 
                <h3 id="characterSchema">Character schema</h3>
                <div class="row justify-content-center">
                    
                    <table class="table" style="margin-top:1%">
                        <thead>
                          <tr>
                            <th>Key</th>
                            <th>Type</th>
                            <th>Description</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>id</td>
                            <td>int</td>
                            <td>The id of the character.</td>
                          </tr>
                          <tr>
                            <td>name</td>
                            <td>string</td>
                            <td>The name of the character.</td>
                          </tr>
                          <tr>
                            <td>status</td>
                            <td>string</td>
                            <td>The status of the character ('Alive', 'Dead' or 'unknown').</td>
                          </tr>
                          <tr>
                            <td>species</td>
                            <td>string</td>
                            <td>The species of the character.</td>
                          </tr>
                          <tr>
                            <td>type</td>
                            <td>string</td>
                            <td>The type or subspecies of the character.</td>
                          </tr>
                          <tr>
                            <td>gender</td>
                            <td>string</td>
                            <td>The gender of the character ('Female', 'Male', 'Genderless' or 'unknown').</td>
                          </tr>
                          <tr>
                            <td>origin</td>
                            <td>object</td>
                            <td>Name and link to the character's origin location.</td>
                          </tr>
                          <tr>
                            <td>location</td>
                            <td>object</td>
                            <td>Name and link to the character's last known location endpoint.</td>
                          </tr>
                          <tr>
                            <td>image</td>
                            <td>string (url)</td>
                            <td>Link to the character's image. All images are 300x300px and most are medium shots or portraits since they are intended to be used as avatars.</td>
                          </tr>
                          <tr>
                            <td>episode</td>
                            <td>array (urls)</td>
                            <td>List of episodes in which this character appeared.</td>
                          </tr>
                          <tr>
                            <td>url</td>
                            <td>string (url)</td>
                            <td>Link to the character's own URL endpoint.</td>
                          </tr>
                          <tr>
                            <td>created</td>
                            <td>string</td>
                            <td>Time at which the character was created in the database.</td>
                          </tr>
                        </tbody>
                      </table>
                      

                </div>

                <div id="allCharacter" class="row justify-content-left mt-5">
                    <h3>Get all characters</h3> 
                    
                </div>

                <div class="row justify-content-left">
                    <p>You can access the list of characters by using the <span style=" color:#202329; background-color: #1b1f230d ">/character</span> endpoint.</p>
                        
                   
                </div>

                <div  style="text-align: center; background-color: #202329; border-radius:12px;" class="row justify-content-left">
                    <h5 style="color: #4cff8f; margin-top:10px; margin-left:15%; ">Get</h5>
                    <h5 style="color: white; margin-top:10px; margin-left:2%;">https://rickandmortyapi.com/api/character</h5>
                </div>


                <div style="text-align: center; background-color: #202329; margin-top:2%; border-radius:12px; height:4% " class="row justify-content-left">
                  <p style="text-align: left; color:white; margin-left:15%; margin-bottom:12%;"><br>
                    [<br> 
                    {<br>
                      "<b style="color: #4cff8f">id</b>": 703, <br>
                      "<b style="color: #4cff8f">name</b>": "Rick Sanchez",<br>
                      "<b style="color: #4cff8f">status</b>": "Alive",<br>
                      "<b style="color: #4cff8f">species</b>": "Human",<br>
                      "<b style="color: #4cff8f">type</b>": "",<br>
                      "<b style="color: #4cff8f">gender</b>": "Male",<br>
                      "<b style="color: #4cff8f">last_location</b>": "Citadel of Ricks",<br>
                      "<b style="color: #4cff8f">first_see</b>": "Earth (C-137)",<br>
                      "<b style="color: #4cff8f">image</b>": "https://rickandmortyapi.com/api/character/avatar/1.jpeg",<br>
                      
                   } <br>
                    ] <br> <br><br>
                  </p>
              </div>


              <div id="singleCharacter" class="row justify-content-left mt-5">
                <h3>Get a single character</h3> 
                
            </div>

            <div class="row justify-content-left mb-3">
              You can get a single character by adding the
               <span style=" color:#202329; background-color: #1b1f230d "> /id </span> 
                <span style=" color:#202329; background-color: #1b1f230d "></span> as a parameter:   
    <span style=" color:#202329; background-color: #1b1f230d "> /character/2 </span>
                   
               
            </div>

            <div style="text-align: center; background-color: #202329; border-radius:12px;" class="row justify-content-left">
                <h5 style="color: #4cff8f; margin-top:10px; margin-left:15%; ">Get</h5>
                <h5 style="color: white; margin-top:10px; margin-left:2%;">https://rickandmortyapi.com/api/character/706</h5>
            </div>


            <div style="text-align: center; background-color: #202329; margin-top:2%; border-radius:12px; height:4% " class="row justify-content-left">
              <p style="text-align: left; color:white; margin-left:15%; margin-bottom:12%;"><br>
                [<br> 
                {<br>
                  "<b style="color: #4cff8f">id</b>": 706, <br>
                  "<b style="color: #4cff8f">name</b>": "Beth Smith",<br>
                  "<b style="color: #4cff8f">status</b>": "Alive",<br>
                  "<b style="color: #4cff8f">species</b>": "Human",<br>
                  "<b style="color: #4cff8f">type</b>": "",<br>
                  "<b style="color: #4cff8f">gender</b>": "Female",<br>
                  "<b style="color: #4cff8f">last_location</b>": "Earth (Replacement Dimension)",<br>
                  "<b style="color: #4cff8f">first_see</b>": "Earth (Replacement Dimension)",<br>
                  "<b style="color: #4cff8f">image</b>": "https://rickandmortyapi.com/api/character/avatar/4.jpeg",<br>
                  
               } <br>
                ] <br> <br><br>
              </p>
          </div>
          <div id="multipleCharacters" class="row justify-content-left mt-5">
            <h3>Get multiple characters</h3> 
            
        </div>

        <div class="row justify-content-left mb-3">
          You can get multiple characters by adding an array of
           <span style=" color:#202329; background-color: #1b1f230d "> /id </span> 
            <span style=" color:#202329; background-color: #1b1f230d ">/character/1,2,3</span> 
               
           
        </div>

        <div style="text-align: center; background-color: #202329; border-radius:12px;" class="row justify-content-left">
            <h5 style="color: #4cff8f; margin-top:10px; margin-left:15%; ">Get</h5>
            <h5 style="color: white; margin-top:10px; margin-left:2%;">https://rickandmortyapi.com/api/character/703,704</h5>
        </div>


        <div style="text-align: center; background-color: #202329; margin-top:2%; border-radius:12px; height:7% " id="multipleCharacters" class="row justify-content-left">
          <p style="text-align: left; color:white; margin-left:15%; margin-bottom:12%;"><br>
            [<br> 
            {<br>
              "<b style="color: #4cff8f">id</b>": 703, <br>
              "<b style="color: #4cff8f">name</b>": "Rick Sanchez",<br>
              "<b style="color: #4cff8f">status</b>": "Alive",<br>
              "<b style="color: #4cff8f">species</b>": "Human",<br>
              "<b style="color: #4cff8f">type</b>": "",<br>
              "<b style="color: #4cff8f">gender</b>": "Male",<br>
              "<b style="color: #4cff8f">last_location</b>": "Citadel of Ricks",<br>
              "<b style="color: #4cff8f">first_see</b>": "Earth (C-137)",<br>
              "<b style="color: #4cff8f">image</b>": "https://rickandmortyapi.com/api/character/avatar/1.jpeg",<br>
              
           } ,<br>
           {<br>
            "<b style="color: #4cff8f">id</b>": 718, <br>
            "<b style="color: #4cff8f">name</b>": "Amish Cyborg",<br>
            "<b style="color: #4cff8f">status</b>": "Dead",<br>
            "<b style="color: #4cff8f">species</b>": "Alien",<br>
            "<b style="color: #4cff8f">type</b>": "",<br>
            "<b style="color: #4cff8f">gender</b>": "Male",<br>
            "<b style="color: #4cff8f">last_location</b>": "Earth (Replacement Dimension)",<br>
            "<b style="color: #4cff8f">first_see</b>": "unknown",<br>
            "<b style="color: #4cff8f">image</b>": "https://rickandmortyapi.com/api/character/avatar/16.jpeg",<br>
            
         } ,<br>
            ] 
          </p>
      </div>

      <div class="row justify-content-left mt-5" id="filterCharacters">
        <h3>Filter characters</h3> 
        
    </div>
      <div class="row justify-content-left mb-3">
        You can also include filters in the URL by including additional query parameters. To start filtering add a ? followed by the query 
        <span style=" color:#202329; background-color: #1b1f230d ">    < query>=< value> </span> If you want to chain several queries in the same call,
         use   <span style=" color:#202329; background-color: #1b1f230d "> & </span>  followed by the query.
       
             
         
      </div>

      <div style="text-align: center; background-color: #202329; border-radius:12px;" class="row justify-content-left">
          <h5 style="color: #4cff8f; margin-top:10px; margin-left:15%; ">Get</h5>
          <h5 style="color: white; margin-top:10px; margin-left:2%;">https://rickandmortyapi.com/api/character/?name=rick&status=alive</h5>
      </div>


      <div style="text-align: center; background-color: #202329; margin-top:2%; border-radius:12px; height:4% " id="multipleCharacters" class="row justify-content-left">
        <p style="text-align: left; color:white; margin-left:15%; margin-bottom:12%;"><br>
          [<br> 
          {<br>
            "<b style="color: #4cff8f">id</b>": 703, <br>
            "<b style="color: #4cff8f">name</b>": "Rick Sanchez",<br>
            "<b style="color: #4cff8f">status</b>": "Alive",<br>
            "<b style="color: #4cff8f">species</b>": "Human",<br>
            "<b style="color: #4cff8f">type</b>": "",<br>
            "<b style="color: #4cff8f">gender</b>": "Male",<br>
            "<b style="color: #4cff8f">last_location</b>": "Citadel of Ricks",<br>
            "<b style="color: #4cff8f">first_see</b>": "Earth (C-137)",<br>
            "<b style="color: #4cff8f">image</b>": "https://rickandmortyapi.com/api/character/avatar/1.jpeg",<br>
            
         } ,<br>
        
          ] 
        </p>
    </div>
 <br>
    <h3 id="locationSchema">Location schema
    </h3>
    <div class="row justify-content-center">
        
        <table class="table" style="margin-top:1%">
            <thead>
              <tr>
                <th>Key</th>
                <th>Type</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>id</td>
                <td>int</td>
                <td>The id of the character.</td>
              </tr>
              <tr>
                <td>name</td>
                <td>string</td>
                <td>The name of the character.</td>
              </tr>
              <tr>
                <td>type</td>
                <td>string</td>
                <td>The type or subspecies of the character.</td>
              </tr>
              <tr>
                <td>dimension</td>
                <td>string</td>
                <td>The dimension in which the location is located.</td>
              </tr>
             
              <tr>
                <td>residents</td>
                <td>array (urls)</td>
                <td>List of character who have been last seen in the location. </td>
              </tr>
              <tr>
                <td>url</td>
                <td>string (url)</td>
                <td>Link to the location's own endpoint.</td>
              </tr>
             
            </tbody>
          </table>
          

    </div>
    
    <div id="allLocation" class="row justify-content-left mt-5">
      <h3>Get all locations      </h3> 
      
  </div>

  <div class="row justify-content-left">
      <p>You can access the list of characters by using the <span style=" color:#202329; background-color: #1b1f230d ">/location</span> endpoint.</p>
          
     
  </div>

  <div style="text-align: center; background-color: #202329; border-radius:12px;" class="row justify-content-left">
      <h5 style="color: #4cff8f; margin-top:10px; margin-left:15%; ">Get</h5>
      <h5 style="color: white; margin-top:10px; margin-left:2%;">https://rickandmortyapi.com/api/location</h5>
  </div>


  <div style="text-align: center; background-color: #202329; margin-top:2%; border-radius:12px; height:4% " class="row justify-content-left">
    <p style="text-align: left; color:white; margin-left:15%; margin-bottom:12%;"><br>
      [<br> 
      {<br>
        "<b style="color: #4cff8f">location_id</b>": 1, <br>
        "<b style="color: #4cff8f">name</b>": "Earth (C-137)",<br>
        "<b style="color: #4cff8f">type</b>": "Planet",<br>
        "<b style="color: #4cff8f">dimension</b>": "Dimension C-137",<br>
        "<b style="color: #4cff8f">residents</b>": " [<br>
          https://rickandmortyapi.com/api/character/38, <br>
          https://rickandmortyapi.com/api/character/45, <br>
          // ...
          <br>
          
          ]",<br>
        "<b style="color: #4cff8f">url</b>": "https://rickandmortyapi.com/api/location/1",<br>
      
        
     } <br>
      ] <br> <br><br>
    </p>
</div>
           

<div id="singleLocation" class="row justify-content-left mt-5">
  <h3>Get a single location  </h3> 
  
</div>

<div class="row justify-content-left">
  You can get a single location by adding the <span style=" color:#202329; background-color: #1b1f230d ">id</span>  as a parameter:  <span style=" color:#202329; background-color: #1b1f230d ">/location/3</span>

      
 
</div>
<br>

<div style="text-align: center; background-color: #202329; border-radius:12px;" class="row justify-content-left">
  <h5 style="color: #4cff8f; margin-top:10px; margin-left:15%; ">Get</h5>
  <h5 style="color: white; margin-top:10px; margin-left:2%;">https://rickandmortyapi.com/api/location/1</h5>
</div>


<div style="text-align: center; background-color: #202329; margin-top:2%; border-radius:12px; height:7% " id="multipleCharacters" class="row justify-content-left">
  <p style="text-align: left; color:white; margin-left:15%; margin-bottom:12%;"><br>
    [<br> 
    {<br>
      "<b style="color: #4cff8f">location_id</b>": 1, <br>
      "<b style="color: #4cff8f">name</b>": "Earth (C-137)",<br>
      "<b style="color: #4cff8f">type</b>": "Planet",<br>
      "<b style="color: #4cff8f">dimension</b>": "Dimension C-137",<br>
      "<b style="color: #4cff8f">residents</b>": " [<br>
          https://rickandmortyapi.com/api/character/38, <br>
          https://rickandmortyapi.com/api/character/45, <br>
          // ...
          <br>
      "<b style="color: #4cff8f">url</b>": "https://rickandmortyapi.com/api/location/1",<br>
    
      
   } ,<br>
   {<br>
    "<b style="color: #4cff8f">location_id</b>": 16, <br>
      "<b style="color: #4cff8f">name</b>": "St. Gloopy Noops Hospital",<br>
      "<b style="color: #4cff8f">type</b>": "Space station",<br>
      "<b style="color: #4cff8f">dimension</b>": "unknown",<br>
      "<b style="color: #4cff8f">residents</b>": " [<br>
          https://rickandmortyapi.com/api/character/105, <br>
          https://rickandmortyapi.com/api/character/263, <br>
          // ...
          <br>
      "<b style="color: #4cff8f">url</b>": "https://rickandmortyapi.com/api/location/1",<br>
    
 } ,<br>
    ] 
  </p>
</div>

<div class="row justify-content-left mt-5">
  <h3 id="multipleLocation">Get multiple location

  </h3> 
  
</div>

<div class="row justify-content-left">
  <p>You can get multiple location by adding an array of <span style=" color:#202329; background-color: #1b1f230d ">id</span> as parameter:  <span style=" color:#202329; background-color: #1b1f230d ">/location/1,2</span></p>
      
 
</div>

<div style="text-align: center; background-color: #202329; border-radius:12px;" class="row justify-content-left">
  <h5 style="color: #4cff8f; margin-top:10px; margin-left:15%; ">Get</h5>
  <h5 style="color: white; margin-top:10px; margin-left:2%;">https://rickandmortyapi.com/api/location/1,2</h5>
</div>


<div style="text-align: center; background-color: #202329; margin-top:2%; border-radius:12px; height:7% " class="row justify-content-left">
<p style="text-align: left; color:white; margin-left:15%; margin-bottom:12%;"><br>
  [<br> 
  {<br>
    "<b style="color: #4cff8f">location_id</b>": 1, <br>
    "<b style="color: #4cff8f">name</b>": "Earth (C-137)",<br>
    "<b style="color: #4cff8f">type</b>": "Planet",<br>
    "<b style="color: #4cff8f">dimension</b>": "Dimension C-137",<br>
    "<b style="color: #4cff8f">residents</b>": " [<br>
    https://rickandmortyapi.com/api/character/38, <br>
    https://rickandmortyapi.com/api/character/45, <br>
    // ...</b>
    "<b style="color: #4cff8f">url</b>": "https://rickandmortyapi.com/api/episode/1",<br>
    
    <br>
    
 } <br>
 {
  "<b style="color: #4cff8f">episode_id</b>": 2, <br>
  "<b style="color: #4cff8f">name</b>": "Abadango",<br>
  "<b style="color: #4cff8f">air_date</b>": "Cluster",<br>
  "<b style="color: #4cff8f">episode</b>": "unknown",<br>
  "<b style="color: #4cff8f">characters</b>": " [<br>
  https://rickandmortyapi.com/api/character/6, <br>
  https://rickandmortyapi.com/api/character/4, <br>
  // ...</b>
  "<b style="color: #4cff8f">url</b>": "https://rickandmortyapi.com/api/episode/2",<br>
  
  <br>
  
} <br>
  ] <br> <br><br>
</p>
</div>



       
<div class="row justify-content-left mt-5">

  <h3 id="filterLocation">Filter locations  </h3> 
    

</div>

 <br>


<div class="row justify-content-left">
  <ul>
    <li><b>name :</b>filter by the given name.</li>
    <li><b>type :</b>filter by the given type.</li>
    <li><b>dimension :</b>filter by the given dimension.</li>
    <span>If you want to know how to use queries, <a style="text-decoration: none; " href="#filterCharacters"><b style="color: #202329">check here</b></a>
    </span>
  </ul>
 

</div>

<div class="row justify-content-left mt-5">

  <h3 id="episodeSchema">Episode schema  </h3> 
    

</div>
<div class="row justify-content-center">
                    
  <table class="table" style="margin-top:1%">
      <thead>
        <tr>
          <th>Key</th>
          <th>Type</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>episode_id</td>
          <td>int</td>
          <td>	The id of the episode.</td>
        </tr>
        <tr>
          <td>name</td>
          <td>string</td>
          <td>The name of the episode.</td>
        </tr>
        <tr>
          <td>air_date</td>
          <td>string</td>
          <td>The air date of the episode.</td>
        </tr>
        <tr>
          <td>episode</td>
          <td>string</td>
          <td>The code of the episode.</td>
        </tr>
        <tr>
          <td>characters</td>
          <td>array (urls)</td>
          <td>List of characters who have been seen in the episode.</td>
        </tr>
        <tr>
          <td>url</td>
          <td>string (url)</td>
          <td>Link to the episode's own endpoint.</td>
        </tr>
      
      
    
      </tbody>
    </table>
    

</div>
<div class="row justify-content-left mt-5">
  <h3 id="allEpisode">Get all episodes
  </h3> 
  
</div>

<div class="row justify-content-left">
  <p>You can access the list of episodes by using the <span style=" color:#202329; background-color: #1b1f230d ">/episode</span> endpoint.</p>
      
 
</div>

<div style="text-align: center; background-color: #202329; border-radius:12px;" class="row justify-content-left">
  <h5 style="color: #4cff8f; margin-top:10px; margin-left:15%; ">Get</h5>
  <h5 style="color: white; margin-top:10px; margin-left:2%;">https://rickandmortyapi.com/api/episode</h5>
</div>


<div style="text-align: center; background-color: #202329; margin-top:2%; border-radius:12px; height:4% " class="row justify-content-left">
<p style="text-align: left; color:white; margin-left:15%; margin-bottom:12%;"><br>
  [<br> 
  {<br>
    "<b style="color: #4cff8f">episode_id</b>": 2, <br>
    "<b style="color: #4cff8f">name</b>": "Lawnmower Dog",<br>
    "<b style="color: #4cff8f">air_date</b>": "December 9, 2013",<br>
    "<b style="color: #4cff8f">episode</b>": "S01E02",<br>
    "<b style="color: #4cff8f">characters</b>": " [<br>
    https://rickandmortyapi.com/api/character/46, <br>
    https://rickandmortyapi.com/api/character/63, <br>
    // ...</b>
    "<b style="color: #4cff8f">url</b>": "https://rickandmortyapi.com/api/episode/2",<br>
    
    <br>
    
 } <br>
  ] <br> <br><br>
</p>
</div>





<div class="row justify-content-left mt-5">
  <h3 id="singleEpisode">Get a single episode
  </h3> 
  
</div>

<div class="row justify-content-left">
  <p>You can get a single episode by adding the <span style=" color:#202329; background-color: #1b1f230d ">id</span> as a parameter:  <span style=" color:#202329; background-color: #1b1f230d ">/episode/5</span> endpoint.</p>
      
 
</div>

<div style="text-align: center; background-color: #202329; border-radius:12px;" class="row justify-content-left">
  <h5 style="color: #4cff8f; margin-top:10px; margin-left:15%; ">Get</h5>
  <h5 style="color: white; margin-top:10px; margin-left:2%;">https://rickandmortyapi.com/api/episode/5</h5>
</div>


<div style="text-align: center; background-color: #202329; margin-top:2%; border-radius:12px; height:4% " class="row justify-content-left">
<p style="text-align: left; color:white; margin-left:15%; margin-bottom:12%;"><br>
  [<br> 
  {<br>
    "<b style="color: #4cff8f">episode_id</b>": 5, <br>
    "<b style="color: #4cff8f">name</b>": "Meeseeks and Destroy",<br>
    "<b style="color: #4cff8f">air_date</b>": "January 20, 2014",<br>
    "<b style="color: #4cff8f">episode</b>": "S01E05",<br>
    "<b style="color: #4cff8f">characters</b>": " [<br>
    https://rickandmortyapi.com/api/character/2, <br>
    https://rickandmortyapi.com/api/character/38, <br>
    // ...</b>
    "<b style="color: #4cff8f">url</b>": "https://rickandmortyapi.com/api/episode/5",<br>
    
    <br>
    
 } <br>
  ] <br> <br><br>
</p>
</div>


<div class="row justify-content-left mt-5">
  <h3 id="multipleEpisode">Get multiple episodes

  </h3> 
  
</div>

<div class="row justify-content-left">
  <p>You can get multiple episodes by adding an array of <span style=" color:#202329; background-color: #1b1f230d ">id</span> as parameter:  <span style=" color:#202329; background-color: #1b1f230d ">/episode/1,2,3</span></p>
      
 
</div>

<div style="text-align: center; background-color: #202329; border-radius:12px;" class="row justify-content-left">
  <h5 style="color: #4cff8f; margin-top:10px; margin-left:15%; ">Get</h5>
  <h5 style="color: white; margin-top:10px; margin-left:2%;">https://rickandmortyapi.com/api/episode/14,16</h5>
</div>


<div style="text-align: center; background-color: #202329; margin-top:2%; border-radius:12px; height:7% " class="row justify-content-left">
<p style="text-align: left; color:white; margin-left:15%; margin-bottom:12%;"><br>
  [<br> 
  {<br>
    "<b style="color: #4cff8f">episode_id</b>": 14, <br>
    "<b style="color: #4cff8f">name</b>": "Auto Erotic Assimilation",<br>
    "<b style="color: #4cff8f">air_date</b>": "August 9, 2015",<br>
    "<b style="color: #4cff8f">episode</b>": "S02E03",<br>
    "<b style="color: #4cff8f">characters</b>": " [<br>
    https://rickandmortyapi.com/api/character/336, <br>
    https://rickandmortyapi.com/api/character/355, <br>
    // ...</b>
    "<b style="color: #4cff8f">url</b>": "https://rickandmortyapi.com/api/episode/14",<br>
    
    <br>
    
 } <br>
 {
  "<b style="color: #4cff8f">episode_id</b>": 16, <br>
  "<b style="color: #4cff8f">name</b>": "Get Schwifty",<br>
  "<b style="color: #4cff8f">air_date</b>": "August 23, 2015",<br>
  "<b style="color: #4cff8f">episode</b>": "S02E05",<br>
  "<b style="color: #4cff8f">characters</b>": " [<br>
  https://rickandmortyapi.com/api/character/1, <br>
  https://rickandmortyapi.com/api/character/4, <br>
  // ...</b>
  "<b style="color: #4cff8f">url</b>": "https://rickandmortyapi.com/api/episode/16",<br>
  
  <br>
  
} <br>
  ] <br> <br><br>
</p>
</div>
<br><br>
<div class="row justify-content-left">
  <ul>
    <h3 id="filterSchema">Filter episodes </h3> 
    <span>
      Available parameters:
    </span>
    <li><b>name :</b>filter by the given name.</li>
    <li><b>episode :</b>filter by the given episode code.</li>
    <span>If you want to know how to use queries, <a style="text-decoration: none; " href="#filterCharacters"><b style="color: #202329">check here</b></a>
    </span>
  </ul>
 

</div>



          </div>

               
              </div>

              
              <div>
            
          
        </div>
    </div>

     

    
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap JavaScript CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>