@extends('master') 
@section('content')

    <div class="container custom-product">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  
    <div class="carousel-inner">
     
    @foreach ($products as $item)
        
   
      <div class="carousel-item {{ $item['id']==1?'active':'' }}">
        
       <a href="detail/{{ $item['id'] }}">
        <img  class="bd-placeholder-img" src="{{ $item['gallery'] }}" alt="">
        <div class="container-md ">
          <div class="row justify-content-end">
          <div class="carousel-caption ">
            <h3 class="text-dark" style="text-decoration: none">{{ $item['name'] }}</h3>
            <div class="text-dark">{{ $item['description'] }}</div>
           
          </div>
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
  </div>


<section class="bg-light">

  <div class="container">
    <div class="products text-center" style="padding: 20px;margin:30px 0px;"> 
      <h3 class="mb-5 text-center" style="font-size:40px" >All Products</h3>   

      @foreach ($products as $item) 
     
        
      <div class="card " style="width: 15rem;display:inline-block;margin-left:20px;margin-top:30px;padding:10px">
        <a href="/detail/{{ $item['id'] }}" ><img class="card-img-top " src="{{ $item['gallery'] }}" alt="Card image cap" width="200"  height="250"></a>
        <div class="card-body">
            <a href="/detail/{{ $item['id'] }}" style="color: black; text-decoration:none"><h6>{{ $item['name'] }}</h6></a>
          <p class="card-text fw-bold">{{ $item['price'] }}</p>
         
        </div>
      </div>
     

        @endforeach  
      </div>
     
    </div>
 

  </section>



@endsection


