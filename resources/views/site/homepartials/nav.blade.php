
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="{{ Route::currentRouteName() == 'home.show' ? 'menu__item--current' : '' }} menu__item active"><a class="menu__link" href="{{ url('/') }}">Anasayfa <span class="sr-only">(current)</span></a></li>
					<li class="{{ Route::currentRouteName() == 'about.show' ? 'menu__item--current' : '' }} menu__item"><a class="menu__link" href="{{ url('/hakkimizda') }}">Hakkımızda</a></li>
					<li class="menu__item dropdown {{ Route::currentRouteName() == 'category.show' || Route::currentRouteName() == 'product.show' ? 'menu__item--current' : '' }}">
					   <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">Ürünlerimiz <b class="caret"></b></a>
						<ul class="dropdown-menu agile_short_dropdown">
							@foreach($categories as $category)
							@if ($category->id > 1)
								<li><a href="{{ route('category.show', $category->slug) }}">{{ $category->slug }}</a></li>
							@endif
							@endforeach
						</ul>
					</li>
					<li class="{{ Route::currentRouteName() == 'outlet.show' ? 'menu__item--current' : '' }}  menu__item "><a class="menu__link" href="{{ url('/magazalarimiz') }}">Mağazalarımız</a></li>
					<li class="{{ Route::currentRouteName() == 'contact.show' ? 'menu__item--current' : '' }} menu__item"><a class="menu__link" href="{{ url('/iletisim') }}">İletişim</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<!--
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
				
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="display" value="1">
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>  
				
			</div>
		</div>
		-->
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
									<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign In">
						</form>
							 <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
								<li><a href="#" class="facebook">
									  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
									  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
								<li><a href="#" class="twitter"> 
									  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
									  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
								<li><a href="#" class="instagram">
									  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
									  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
								<li><a href="#" class="pinterest">
									  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
									  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
							</ul>
							<div class="clearfix"></div>
							<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
						 <form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="Confirm Password" required=""> 
								<label>Confirm Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign Up">
						</form>
						  	<ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
								<li><a href="#" class="facebook">
									  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
									  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
								<li><a href="#" class="twitter"> 
									  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
									  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
								<li><a href="#" class="instagram">
									  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
									  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
								<li><a href="#" class="pinterest">
									  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
									  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
							</ul>
							<div class="clearfix"></div>
							<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->

