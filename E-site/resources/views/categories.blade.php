@extends('master') 
@section('content')
<div class="container" style="min-height:900px !important">
  <div class="products text-center" style="padding: 20px;margin:30px 0px;"> 
    <h3 class="mb-5 text-center" style="font-size:40px" >Available Products</h3>   

    @foreach ($products as $item) 
   
      
    <div class="card " style="width: 13rem;display:inline-block;margin-left:20px;margin-top:30px;padding:10px">
      <a href="/detail/{{ $item['id'] }}" ><img class="card-img-top" src="{{ $item['gallery'] }}" alt="Card image cap" height="150"></a>
      <div class="card-body">
          <a href="/detail/{{ $item['id'] }}" style="color: black; text-decoration:none"><h5>{{ $item['name'] }}</h5></a>
        <p class="card-text">{{ $item['price'] }}</p>
       
      </div>
    </div>
   

      @endforeach  
    </div>
  </div>
 @endsection   


