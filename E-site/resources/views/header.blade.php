<?php 
use App\Http\Controllers\ProductController;

$cart_count = 0;
if(Session::has('user'))
{
  $cart_count = ProductController::cartItem();
}

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">DigiTech</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="/">Home</a>           
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-layout-text-sidebar-reverse"></i> Categories
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <form action="/categories" class="d-flex">
                  <input style="width:350px" class="form-control ms-2 d-none" type="text" name="query" value="mobile" placeholder="Search" aria-label="Search">
                  <button class="dropdown-item" type="submit">Mobile</button>
                </form>
  
              </li>

              

              <li><hr class="dropdown-divider"></li>
              <li>
                  <form action="/categories" class="d-flex">
                  <input style="width:350px" class="form-control ms-2 d-none" type="text" name="query" value="tv" placeholder="Search" aria-label="Search">
                  <button class="dropdown-item" type="submit">Tv</button>
                  </form>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li><form action="/categories" class="d-flex">
                <input style="width:350px" class="form-control ms-2 d-none" type="text" name="query" value="fridge" placeholder="Search" aria-label="Search">
                <button class="dropdown-item" type="submit">Fridge</button>
                </form></li>
            </ul>
          </li>

          
         
         
          
        </ul>
        <form action="/search" class="d-flex">
          <input style="width:350px" class="form-control ms-2" type="text" name="query"  placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nn">
          @if (Session::has('user'))  
          
          <li class="nav-item dropdown" >
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             {{ Session::get('user')['name']}}
           </a>
           <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
             <li><a class="dropdown-item" href="/logout">Logout</a></li>
             
           </ul>
         </li>
         <li class="nav-item mx-2">
          <a class="nav-link active" aria-current="page" href="/userOrders">Orders</a>           
       </li>
       
         
         
         <a class="" data-mdb-toggle="tooltip" title="Check Cart" style="text-decoration: none; color:black" href="/shoppingCart"><li class ="nav-item mt-2"><i class="fa fa-shopping-cart text-muted"></i>  cart({{ $cart_count }})</li></a>
           @else
           
           <li style="margin-right: 3px"><a  href="/login"><button type="button" class="btn btn-dark">Login</button></a></li>
           <li style="margin-right: 3px"><a  href="/register"><button type="button" class="btn btn-dark">Register</button></a></li>
         @endif


        

        


        </ul>

        
        
        
      </div>
    </div>
  </nav>
