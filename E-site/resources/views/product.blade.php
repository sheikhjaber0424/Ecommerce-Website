@extends('master') 
@section('content')

    <div class="container custom-product">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  
    <div class="carousel-inner">
     
    @foreach ($products as $item)
        
   
      <div class="carousel-item {{ $item['id']==1?'active':'' }}">
        
       <a href="detail/{{ $item['id'] }}">
        <img  class="bd-placeholder-img" src="{{ $item['gallery'] }}" alt="">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1 class="text-dark" style="text-decoration: none">{{ $item['name'] }}</h1>
            <div class="text-dark">{{ $item['description'] }}</div>
           
          </div>
        </div>
      </a>
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


  <div class="trending">

    <h3 class="mb-5" style="text-decoration: underline">New Products</h3>

    
    @foreach ($products as $item)
        
    
     
      <div class="trending-item">
        <a href="detail/{{ $item['id'] }}"  style="text-decoration: none">
        <img  class="trending-image" src="{{ $item['gallery'] }}" alt="">
        <div class="">
          <h5 class="text-dark hdiv">{{ $item['name'] }}</h5>
         
        </div>
      </a>
      </div>
      @endforeach  
    </div>
  </div>

  



      
  



@endsection