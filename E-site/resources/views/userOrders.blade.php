
@extends('master') 
@section('content')


<section class="h-100 gradient-custom" style="min-height: 850px !important">
  <div class="container py-5" >
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center">Orders List</h5>
          </div>
          <div class="card-body">
           
            
            @foreach ($orders as $item)
                
            
            <div class="row" >
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light" >
                  <img src="{{ $item->gallery }}"
                    class="w-100" alt="Blue Jeans Jacket" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>{{ $item->name }}</strong></p>
                <p>{{ $item->description }}</p>
                <p class="fw-bold">Price : {{ $item->price }}</p>
                {{-- <p>Payment Status : {{ $item->status}}</p> --}}
              
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                
              </div>
            </div>
            <hr class="my-4"/>
            
            @endforeach
            
          </div>
          
          
        </div>
      
      
      </div>
   
     
    </div>
  </div>

</section>

@endsection

