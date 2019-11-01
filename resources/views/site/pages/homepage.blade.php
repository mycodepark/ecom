@extends('site.app')
@section('title', 'Homepage')
@section('content')
    <div class="container">
        <h2>Homepage</h2>
        @foreach($products as $product)
            <img src="{{ asset('storage/'.$product->images->first()->full) }}" alt="">
        @endforeach
    </div>

   



@stop
