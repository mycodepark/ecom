@extends('site.homeapp')
@section('title', 'Hakkımızda')
@section('content')


<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
	<div class="container">
        <h3>HAKKIMIZDA<span></span></h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">
                    <ul class="w3_short">
                        <li><a href="index.html">ANASAYFA</a><i>|</i></li>
                        <li>HAKKIMIZDA</li>
                    </ul>
                </div>
        </div>
	   <!--//w3_short-->
	</div>
</div>
<!-- /banner_bottom_agile_info -->
    <div class="banner_bottom_agile_info">
	    <div class="container">
			<div class="agile_ab_w3ls_info">
				<div class="col-md-6 ab_pic_w3ls">
				   	<img src="{{ asset('storage/'.$about->image) }}" alt=" " class="img-responsive" />
				</div>
				 <div class="col-md-6 ab_pic_w3ls_text_info">
				    <h5>{{ $about->name }}<span></span> </h5>
					<p>{{ $about->description }}</p>
				</div>
				  <div class="clearfix"></div>
			</div>    
		 </div> 
    </div>


@stop
