@extends('master') 
@section('content')

<section >

    <div class="container">
      <div class="products text-center" style="padding: 20px;margin:30px 0px;"> 
        <h3 class="mb-5 text-center" style="font-size:40px" >All Products</h3>   
  
        @foreach ($products as $item) 
       
        <div class="card " style="width: 15rem;display:inline-block;margin-left:20px;margin-top:30px;padding:10px">
          <a href="/detail/{{ $item['id'] }}" ><img class="card-img-top " src="{{ asset('storage/'.$item['gallery']) }}" alt="Card image cap" width="200"  height="250"></a>
          <div class="card-body">
              <a href="/detail/{{ $item['id'] }}" style="color: black; text-decoration:none"><h6>{{ $item['name'] }}</h6></a>
            <p class="card-text fw-bold">{{ $item['price'] }}</p>
           
          </div>
        </div>
       
  
          @endforeach  
        </div>

         
       <div class="d-flex justify-content-center my-4">
        {{  $products->links()}}
        
      </div>
       
      </div>
   
  
    </section>

@endsection