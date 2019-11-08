@extends('site.homeapp')
@section('title', 'Anasayfa')
@section('content')

    @include('site.homepartials.carousel')
    @include('site.homepartials.menu')
    @include('site.homepartials.content')

@stop
