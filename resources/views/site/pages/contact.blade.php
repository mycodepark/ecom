@extends('site.homeapp')
@section('title', 'İletişim')
@section('content')



<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>İLETİŞİM<span></span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="{{ url('/') }}">ANASAYFA</a><i>|</i></li>
								<li>İLETİŞİM</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

@if(\Session::has('success'))
<div class="alert alert-success" role="alert">
    <strong>Tebrikler! </strong> {!! \Session::get('success') !!}
</div>
@endif
@if(\Session::has('error'))
<div class="alert alert-danger" role="alert">
    <strong>Üzgünüz! </strong> {!! \Session::get('success') !!}
</div>
@endif

   <!--/contact-->
   <div class="banner_bottom_agile_info">
	<div class="container">
	   <div class="agile-contact-grids">
				<div class="agile-contact-left">
					<div class="col-md-6 address-grid">
						<h4>MÜŞTERİ HİZMETLERİ<span></span></h4>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Telefon </p><span>{{ config('settings.default_phone_number') }}</span>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Mail </p><a href="mailto:{{ config('settings.default_email_address') }}">{{ config('settings.default_email_address') }}</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<!--
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Adres</p><span>{{ $contact->adress }}</span>
								</div>
								<div class="clearfix"> </div>
							</div>
							-->
							<ul class="social-nav model-3d-0 footer-social w3_agile_social two contact">
                                <li><a href="{{ config('settings.social_facebook') }}" target="_blank" class="facebook">
                                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                                <li><a href="{{ config('settings.social_instagram') }}" target="_blank" class="instagram">
                                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                            </ul>
					</div>
					<div class="col-md-6 contact-form">
						<h4 class="white-w3ls">İLETİŞİM <span>FORMU</span></h4>
						<form action="{{ route('site.contact.store') }}" method="post">
                        {{ csrf_field() }}
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="name" required="">
								<label>İsim</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" name="subject" required="">
								<label>Konu</label>
								<span></span>
							</div>
							<div class="styled-input">
								<textarea name="message" required=""></textarea>
								<label>Mesaj</label>
								<span></span>
							</div>	 
							<input type="submit" value="GÖNDER">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
       </div>
	</div>


 <!--//contact-->

 @stop
