@extends('master') 
@section('content')

<div class="container mt-5 mb-5 main-detail">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="images p-3">
                            
                            <div class="thumbnail text-center"> <img onclick="change_image(this)" src="{{ $product['gallery'] }}" width="80%"> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <a href="/"><i class="fa fa-solid fa-arrow-left"></i></a> <span class="ml-1"></span> </div> <i class="fa fa-shopping-cart text-muted"></i>
                            </div>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand"><h2>{{  $product['name']}}</h2></span>
                               
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price"><h3>{{ $product['price'] }}</h3></span>
                                    
                                </div>
                            </div>
                            <p class="about">{{ $product['description'] }}</p>
                           
                            <div class="cart mt-4 align-items-center"> 
                                <button style="margin-top: 50px" class="btn btn-primary text-uppercase mr-2 px-4">Add to cart</button> 

                                <button  style="width: 140px;margin-top:50px" class="btn btn-success   text-uppercase mr-2 px-4">Buy Now</button>
                            </div>
                            <div class="cart mt-4 align-items-center"> 
                                &nbsp; <i class="fa fa-heart text-muted"></i>  &nbsp; &nbsp; <i class="fa fa-share-alt text-muted"></i> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection