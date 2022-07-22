<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commerce site</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</head>


<body>
    @include('header')
    @yield('content')
    @include('footer')
</body>


<style>


@import url('https://fonts.googleapis.com/css2?family=Koulen&display=swap');
   *{
  margin: 0;
  padding: 0;
 }
body{
  font-family: Arial;
 
}
body h1,h3{
  font-family: 'Koulen', cursive;
}
 .custom-login{
  height: 620px;
  padding-top: 100px  
 }

 .navbar-brand{
  font-family: 'Edu VIC WA NT Beginner', cursive;
  color: green;
  font-size: 25px;
 }
 .slider-img{
    height: 400px !important;
 }

 .bd-placeholder-img {
        height: 400px !important;
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      .custom-product{
    height: 600px;
    margin-top: 20px;
    
 }     

.trending-image{
  height: 100px;
  
  
}

.trending-item{
  float: left;
  width:20%;
  margin: 30px 0px;
}

.trending{
  margin-top: 100px;
}

.con{
  margin-top:20px; 
  
}
 

.main-detail{
  height: 530px;
 
} 


.navbar .nn{
 margin-right : 60px;

}

.carousel-inner{
 
}






.gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
</style>
</html>