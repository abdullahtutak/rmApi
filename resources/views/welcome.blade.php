<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Bootstrap Starter Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
  body {
    background-color: rgb(39, 43, 51); 
}

    .container {
      padding-bottom: 120px; 
    }

    .footer {
            background-color: rgb(32, 35, 41);
            color: #fff;
            padding: 20px 0;
            width: 100%;
            text-align: center;
            position: fixed; 
            bottom: 0; 
            left: 0; 
        }

    .card {
      display: flex;
      flex-direction: row;
    }
    .card-img-top {
      width: 200px;
      height: auto;
      object-fit: cover;
    }


      </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
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


     

      <div class="container-fluid">
        <br>
           <h1 style="text-align: center; color: rgb(255, 255, 255) ">The Rick and Morty API
          </h1>
       
        <div class="row bottom-half">
          <div class="col-md-12">
        
<br>
<div class="container">
    <!-- İçerik Satırları -->
    <div class="row">
      <!-- Kart 1 -->
      
      @foreach ($data as $value)
      <div style="" class="col-md-6">
        
        <div class="card mb-4">
          <img src="{{$value['image']}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$value['name']}}</h5>
            <p class="card-title"> 
              @if ($value['status'] == 'Alive')
              
             <span style=" color: rgb(85, 204, 68) "> • </span> {{$value['status']}} 
              @elseif   ($value['status'] == 'Dead')
              <span style=" color: rgb(248, 12, 12) "> • </span> {{$value['status']}} 
              @endif
             
              
              - {{$value['species']}} </p>
            <p class="card-text" style="color: rgb(158, 158, 158)">Last Know Location: <br> <p style="color:rgb(32, 35, 41)">{{$value['last_location']}}</p> </p> 
            <p class="card-text" style="color: rgb(158, 158, 158)">First seen in:  <br> <p style="color:rgb(32, 35, 41)">{{$value['first_see']}}</p></p> <br>
          </div>
        </div>
        
      </div>
      
      @endforeach

      
     
    
    </div>
  </div>
        
  
              
          </div>
        </div>
      </div>
     <!--  <footer class="footer">
        <div class="container">
          <p>The Rick and Morty API
        </p>
          <p>&copy; 2024</p>
        </div>
      </footer>
    -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap JavaScript CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>