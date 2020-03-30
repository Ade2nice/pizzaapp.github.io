@extends('layouts.layout')
@section('content')


<style>
h1
{
text-align:center;
color:#eee;
font-family:fantasy;
font-size:3.5em;
}
h4{
    text-align:center;
    color:#eee;
}
.orderP{
    postion:center;
    
}
.center{
    text-align:center;
    padding-top:8.5%;
    
}
h3{
    color:white;

}
</style>
<body>

<div class="center">
<h1 class="animated slideInUp"> PIZZA HOME IS COMING SOON </h1>
<h4> Waiting is not easy but try this time </h4>

<div class="animated bounceInLeft delay-5s">
<h1> {{session ('mssg')}} </h1>
</div>

<button class="btn btn-success btn-sm orderP"><a href="/pizzas/create"> 
<div class="spinner-grow text-light" role="status">
  <span class="sr-only">Loading...</span>
</div></i><br>
<h3> ORDER A PIZZA <h3> </a></button>
</div>

@endsection('content')
</body>