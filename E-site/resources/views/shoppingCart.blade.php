<?php 

$shipping = 100;
$grand_total = $total_price + $shipping;

?>

@extends('master') 
@section('content')


<section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center">Cart items</h5>
          </div>
          <div class="card-body">
            <!-- Single item -->
            
            @foreach ($cartItems as $item)
                
            
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
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
               
                <a href="/removeItem/{{ $item->cart_id }}"><button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <i class="fas fa-trash"></i>
                </button>   
                </a>
               
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
              
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>{{ $item->price }}</strong>
                </p>
                <!-- Price -->
              </div>
            </div>
            <hr class="my-4"/>
            
            @endforeach
            <!-- Single item -->

           

            <!-- Single item -->
           
            <!-- Single item -->
          </div>
          
          
        </div>
      
      
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Amount
                <span>{{ $total_price }} Tk</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Delivery
                <span>{{ $shipping }} Tk</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span data-name="total"><strong>{{ $grand_total }} Tk</strong></span>
              </li>
            </ul>
            <form action="/shoppingCart" method="POST">
              @csrf
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
               
              </div> 

              <button type="submit" class="btn btn-success btn-lg btn-block">
                ORDER NOW
              </button>

            </form>
           
          </div>
        </div>
      </div>
     
    </div>
  </div>

</section>

@endsection

