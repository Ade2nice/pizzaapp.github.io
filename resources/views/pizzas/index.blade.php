@extends('layouts.layout')
<link href="/css/main.css" rel="stylesheet">
@section('content')


<h1 id="pendingo"> HERE ARE THE PENDING ORDERS</h1>
 <div class="pend">
 @foreach($pizzas as $pizza)
<div class="pizza-icon">
    <img src="/images/pizzass.jpg" alt="no image" height="40" width="40">
 <a href="/pizzas/{{$pizza->id}}">{{$pizza->name}} </a>
</div>
 @endforeach

</div>


@endsection('content')
