@extends('site.homeapp')
@section('title', 'Mağazalarımız')
@section('content')


<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
	<div class="container">
        <h3>FABRİKA SATIŞ MAĞAZALARIMIZ<span></span></h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">
                    <ul class="w3_short">
                        <li><a href="{{ url('/') }}">ANASAYFA</a><i>|</i></li>
                        <li>MAĞAZALARIMIZ</li>
                    </ul>
                </div>
        </div>
	   <!--//w3_short-->
	</div>
</div>
<!-- /banner_bottom_agile_info -->
	@foreach($outlets as $outlet)
    <div class="banner_bottom_agile_info">
	    <div class="container">
			<div class="agile_ab_w3ls_info">
				<div class="col-md-6 ab_pic_w3ls">
					<img src="{{ asset('storage/'.$outlet->image) }}" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-6 ab_pic_w3ls_text_info">
					<h5>{{ $outlet->name }}<span></span> </h5>
					<p>{{ $outlet->description }}</p>
				</div>
			</div>

			<div class="col-md-6 address-grid">
				<div class="mail-agileits-w3layouts">
					<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
					<div class="contact-right">
						<p>TELEFON </p><span>{{ $outlet->phone }}</span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="mail-agileits-w3layouts">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<div class="contact-right">
						<p>ADRES</p><span>{{ $outlet->adress }}</span>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
			<hr>

		</div> 
    </div>
	@endforeach


@stop
