@extends('master') 
@section('content')

<html lang="en"><head>
        <title>Carousel Template · Bootstrap v5.0</title>

        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>



    <style>
    

    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    


<main>

    <div class="container custom-slider">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  
    <div class="carousel-inner">
     
    @foreach ($products as $item)
        
   
      <div class="carousel-item {{ $item['id']==1?'active':'' }}">
        
        <img  class="bd-placeholder-img" src="{{ $item['gallery'] }}" alt="">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1 class="text-dark hdiv">{{ $item['name'] }}</h1>
            <div class="text-dark hdiv ">{{ $item['description'] }}</div>
           
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>


</main>

      
  

</body></html>

@endsection