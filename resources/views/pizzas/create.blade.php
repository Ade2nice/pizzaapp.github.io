@extends('layouts.layout')
<link href="/css/main.css" rel="stylesheet">

@section('content')

<div class="container pizzaform">
<h1 id="h1order"> ORDER A PIZZA</h1>
<form action="/pizzas" method="POST" class="orderform">
@csrf
<label for="name"> Your Name </label>
<input type="text" id="name" name="name"><br>
<label for="type">Choose Pizza Type </label>
<select name="type" id="type">
<option >None Selected</option>
<option value="margarite">margarite</option>
<option value="Creepy crust">Creepy crust</option>
<option value="Jelly Calm">Jelly Calm</option>
<option value="Veg Crust">Jelly Calm</option>
<option value="Volcano">Jelly Calm</option>
</select><br>
<label for="type">Choose Base Type </label>
<select name="base" id="base">
<option >None Selected</option>
<option value="garlic ">Garlic</option>
<option value="Onion ">Onion</option>
<option value="Peppper">Pepper</option>
<option value="Ginger ">Ginger </option>
<option value="Potato">Potato</option>
</select><br>
<label for="name"> Price</label>
<input type="text" id="price" name="price">
<fieldset>
<label>Extra Topping</label> <br>
<input type="checkbox" name="toppings[]" value="mushroom">Mushroom <br>
<input type="checkbox" name="toppings[]" value="Baked">Baked <br>
<input type="checkbox" name="toppings[]" value="Fried">Fried <br>
<input type="checkbox" name="toppings[]" value="Boiled">Boiled <br>
</fieldset>
<input type="submit" value="Order Pizza">
</form>



</div>
@endsection('content')
