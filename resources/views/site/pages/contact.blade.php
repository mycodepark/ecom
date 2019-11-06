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
									<p>Telefon </p><span>{{ $contact->phone }}</span>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Mail </p><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Adres</p><span>{{ $contact->adress }}</span>
								</div>
								<div class="clearfix"> </div>
							</div>
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

    <div class="contact-w3-agile1 map" data-aos="flip-right">
		   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe>
	   </div>
 <!--//contact-->

 @stop
