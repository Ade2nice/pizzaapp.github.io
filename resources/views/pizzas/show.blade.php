@extends('layouts.layout')
<link href="/css/main.css" rel="stylesheet">
@section('content')
<h1 id="orderfor"> ORDER FOR {{$pizza->name}} </h1>
<div class="wrapper pizza-details" >
<div >
<p class="type" id="pizzadetails">Type - {{$pizza->type}}</p>
<p class="base "id="pizzadetails">Base - {{$pizza->base}}</p>
<p class="toppings"id="pizzadetails">Extra Toppings</p>
<ul id="pizzadetails">
@foreach ($pizza->toppings as $topping)
    <li>{{$topping}}</li>
@endforeach
</div>

</ul>
<form action="/pizzas/{{$pizza->id}} " class="" method ="POST">
@csrf
@method('DELETE')
<button class="" id="comporder">Complete Order</button>
</form>
</div>
 <a href="/pizzas" class="back"> <- BACK TO ALL PIZZAS </a>

@endsection('content')
