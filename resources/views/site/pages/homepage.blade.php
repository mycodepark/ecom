@extends('site.homeapp')
@section('title', 'Anasayfa')
@section('content')
    <!--
    <div class="container">
        <h2>Homepage</h2>
        @foreach($products as $product)
            <img src="{{ asset('storage/'.$product->images->first()->full) }}" alt="">
        @endforeach
    </div>
    -->

    @include('site.homepartials.carousel')
    @include('site.homepartials.menu')
    @include('site.homepartials.content')


@stop
