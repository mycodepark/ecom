@extends('site.homeapp')
@section('title', $category->name)
@section('content')
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
	<div class="container">
        <h3>{{ $category->name }}<span></span></h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">
                    <ul class="w3_short">
                        <li><a href="{{ url('/') }}">ANASAYFA</a><i>|</i>ÜRÜNLERİMİZ<i>|</i></li>
                        <li>{{ $category->name }}</li>
                    </ul>
                </div>
        </div>
	   <!--//w3_short-->
	</div>
</div>


@include('site.homepartials.productlist')



@stop




