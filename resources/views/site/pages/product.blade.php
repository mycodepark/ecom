@extends('site.mixapp')
@section('title', $product->name)
@section('content')

<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
	<div class="container">
        <h3>{{ $product->name }}<span></span></h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">
                    <ul class="w3_short">
                        <li>
                            <a href="{{ url('/') }}">ANASAYFA</a><i>|</i>KATEGORİLER<i>|</i>{{$product->categories['0']['name']}}<i>|</i>
                        {{ $product->name }}</li>
                    </ul>
                </div>
        </div>
	   <!--//w3_short-->
	</div>
</div>

            <div class="row">
                <div class="col-sm-12">
                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif
                </div>
            </div>


  <!-- banner-bootom-w3-agileits -->
  <div class="banner-bootom-w3-agileits">
	<div class="container">
	     <div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					
					<ul class="slides">
                    @if ($product->images->count() > 0)
                    @foreach($product->images as $image)
						<li data-thumb="{{ asset('storage/'.$image->full) }}">
							<div class="thumb-image"> <img src="{{ asset('storage/'.$image->full) }}" data-imagezoom="true" class="img-responsive"> </div>
						</li>
                        @endforeach
                        @endif

						
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3>{{ $product->name }}</h3>
                    <br>
                    <dl class="row">
                        <dt class="col-sm-3">Ürün Kodu</dt>
                        <dd class="col-sm-9">{{ $product->sku }}</dd>
                    </dl>
                    <div class="mb-3">
                        @if ($product->sale_price > 0)
                            <var class="price h3 text-danger">
                                <span class="num" id="productPrice">{{ $product->sale_price }}</span> <span class="currency">{{ config('settings.currency_symbol') }}</span>
                                <del class="price-old"> {{ $product->price }} {{ config('settings.currency_symbol') }}</del>
                            </var>
                        @else
                            <var class="price h3 text-success">
                                <span class="num" id="productPrice">{{ $product->price }}</span> <span class="currency">{{ config('settings.currency_symbol') }}</span>
                            </var>
                        @endif
                    </div>
					
					

		      </div>
	 			<div class="clearfix"> </div>
				<!-- /new_arrivals --> 
	<div class="responsive_tabs_agileits"> 
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>AÇIKLAMA</li>
							<li>BİLGİLER</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
					   <div class="tab1">
							<div class="single_page_agile_its_w3ls">
							  <h6>{{ $product->name }}</h6>
							   <p>{!! $product->description !!}</p>
							</div>
						</div>
						<!--//tab_one-->
						   <div class="tab2">
							<div class="single_page_agile_its_w3ls">
							  <h6>TEKNİK ÖZELLİKLER</h6>
							   <p>{!! $product->description !!}</p>
							</div>
						</div>
					</div>
				</div>	
			</div>
	<!-- //new_arrivals --> 
	  	<!--/slider_owl-->



@stop
@push('scripts')


<!-- js -->
<script type="text/javascript" src="{{ asset('frontend/home/js/jquery-2.1.4.min.js') }}"></script>
<!-- //js -->
<script src="{{ asset('frontend/home/js/modernizr.custom.js') }}"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="{{ asset('frontend/home/js/minicart.min.js') }}"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
	<!-- single -->
<script src="{{ asset('frontend/home/js/imagezoom.js') }}"></script>
<!-- single -->
<!-- script for responsive tabs -->						
<script src="{{ asset('frontend/home/js/easy-responsive-tabs.js') }}"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- FlexSlider -->
<script src="{{ asset('frontend/home/js/jquery.flexslider.js') }}"></script>
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
<!-- //script for responsive tabs -->	

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('frontend/home/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/home/js/jquery.easing.min.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
<script type="text/javascript" src="{{ asset('frontend/home/js/bootstrap.js') }}"></script>
@endpush

