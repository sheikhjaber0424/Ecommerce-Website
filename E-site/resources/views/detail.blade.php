@extends('master') 
@section('content')

<section >
<div class="container mt-5 mb-5 " style="margin-bottom:50px ">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="images p-3">                           
                            <div class="thumbnail text-center"> <img  src="{{ $product['gallery'] }}" width="80%"> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <a href="/"><i class="fa fa-solid fa-arrow-left"></i></a> <span class="ml-1"></span> </div> <i class="fa fa-shopping-cart text-muted"></i>
                            </div>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand"><h2>{{  $product['name']}}</h2></span>
                               
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price" ><h3 style="font-family: Arial, Helvetica, sans-serif">{{ $product['price'] }}</h3></span>
                                    
                                </div>
                            </div>
                            <p class="about">{{ $product['description'] }}</p>

                            <form action="/addToCart" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                                <div class="cart mt-4 text-start"> 
                                    <button type="submit" style="margin-top: 50px;width:203px" class="btn btn-success text-uppercase px-4"><i class="fa fa-shopping-cart text-muted"></i> Add to cart</button>     
                                </div>    
                                                               
                            </form>

                                <a href="/addwishList/{{ $product['id'] }}">
                                    <button type="submit" style="margin-top: 10px" class="btn btn-primary  text-uppercase px-4"><i class="fa fa-heart text-muted"></i> Add to Wishlist</button> 
                                </a>
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
</section>

@endsection