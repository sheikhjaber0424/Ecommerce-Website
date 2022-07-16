@extends('master') 
@section('content')

<div class="container custom-product">
<div class="trending">

    <h3 class="mb-5" style="text-decoration: underline">Seached items</h3>

    
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