
@extends('master') 
@section('content')


<section class="h-100 gradient-custom" style="min-height: 850px !important">
  <div class="container py-5" >
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h3 class=" mb-0 text-center">Wishlist</h3>
          </div>
          <div class="card-body">
           
            
            @foreach ($wishProducts as $item)
                
            
            <div class="row" >
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light" >

                  <a href="/detail/{{ $item->id }}">
                    <img src="{{ $item->gallery }}" class="w-100" alt="Blue Jeans Jacket" />
                  </a>
                 
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <a href="/detail/{{ $item->id }}" class="text-decoration-none text-dark"><p><strong>{{ $item->name }}</strong></p> </a>
                <p>{{ $item->description }}</p>
                <p class="fw-bold">Price : {{ $item->price }}</p>

                <form class="d-inline-block" action="/addToCart" method="POST">
                  @csrf
                  <input type="hidden" name="product_id" value="{{ $item->id }}">
                  <div class="cart  text-start"> 
                      <button type="submit" style="width:203px" class="btn btn-success text-uppercase px-4"><i class="fa fa-shopping-cart text-muted"></i> Add to cart</button>     
                  </div>    
                                                 
              </form>
                <a href="/wishRemove/{{ $item->wishlist_id }}"><button type="button" style="height: 38px" class="btn btn-danger btn-sm me-1  d-inline-block" data-mdb-toggle="tooltip"
                    title="Remove item">
                    <i class="fas fa-trash"></i>
                  </button>   
                </a>
               
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

