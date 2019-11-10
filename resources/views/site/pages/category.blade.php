@extends('site.mixapp')
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
                        <li><a href="{{ url('/') }}">ANASAYFA</a><i>|</i>KATEGORİLER<i>|</i></li>
                        <li>{{ $category->name }}</li>
                    </ul>
                </div>
        </div>
	   <!--//w3_short-->
	</div>
</div>

<section class="section-content bg padding-y">
    <div class="container">
        <div id="code_prod_complex">
            <div class="row">
                @forelse($category->products as $product)
                    <div class="col-md-4">
                        <figure class="card card-product">
                            @if ($product->images->count() > 0)
                                <div class="img-wrap padding-y"><img src="{{ asset('storage/'.$product->images->first()->full) }}" alt=""></div>
                            @else
                                <div class="img-wrap padding-y"><img src="https://via.placeholder.com/176" alt=""></div>
                            @endif
                            <figcaption class="info-wrap"  >
                            <a style="color:red; " href="{{ route('product.show', $product->slug) }}"><h4 class="title" style="text-align:center; background-color:#2fdab8; padding:5px 0 5px 0 ">{{ $product->name }}</h4></a>
                            </figcaption>
                            <div class="bottom-wrap" style="float: right;">
                                <a href="{{ route('product.show', $product->slug) }}" class="btn btn-sm btn-success float-right">Ürün Detayı</a>
                                <!--
                                @if ($product->sale_price != 0)
                                    <div class="price-wrap h5">
                                        <span class="price"> {{ config('settings.currency_symbol').$product->sale_price }} </span>
                                        <del class="price-old"> {{ config('settings.currency_symbol').$product->price }}</del>
                                    </div>
                                @else
                                    <div class="price-wrap h5">
                                        <span class="price"> {{ config('settings.currency_symbol').$product->price }} </span>
                                    </div>
                                @endif
                                -->
                            </div>
                        </figure>
                    </div>
                @empty
                    <p>No Products found in {{ $category->name }}.</p>
                @endforelse
            </div>
        </div>
    </div>
</section>
@stop




