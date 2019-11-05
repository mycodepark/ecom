<!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
		<h3 class="wthree_text_info">ÜRÜNLERİMİZ <span></span></h3>
		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
			@foreach($categories as $category)
			@if($category->slug == "yatak")
			<a href="{{ route('category.show', $category->slug) }}">
			   <div class="bb-left-agileits-w3layouts-inner grid">
					<figure class="effect-roxy">
						<img src="{{ asset('storage/'.$category->image) }}" alt="{{$category->name}}" class="img-responsive" />
						<figcaption>
							<h3><span>{{$category->name}}</span></h3>
							<p>%50'ye varan indirim</p>
						</figcaption>			
					</figure>
			    </div>
			</a>
			@endif
			@endforeach
		</div>
		<div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
			@foreach($categories as $category)
			@if($category->slug == "baza")
		    <a href="{{ route('category.show', $category->slug) }}">
				<div class="bb-middle-agileits-w3layouts grid">
					<figure class="effect-roxy">
						<img src="{{ asset('storage/'.$category->image) }}" alt="{{$category->name}}" class="img-responsive" />
						<figcaption>
							<h3><span>{{$category->name}}</span></h3>
							<p>%50'ye varan indirim</p>
						</figcaption>			
					</figure>
				</div>
			</a>
			@endif
			@endforeach
			@foreach($categories as $category)
			@if($category->slug == "baslik")
			<a href="{{ route('category.show', $category->slug) }}">
		     	<div class="bb-middle-agileits-w3layouts forth grid">
					<figure class="effect-roxy">
						<img src="{{ asset('storage/'.$category->image) }}" alt="{{$category->name}}" class="img-responsive">
						<figcaption>
							<h3><span>{{$category->name}}</span></h3>
							<p>%50'ye varan indirim</p>
						</figcaption>		
					</figure>
				</div>
			</a>
			@endif
			@endforeach
		<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--/grids-->
<!--
      <div class="agile_last_double_sectionw3ls">
            <div class="col-md-6 multi-gd-img multi-gd-text ">
					<a href="womens.html"><img src="images/bot_1.jpg" alt=" "><h4>Flat <span>50%</span> offer</h4></a>
					
			</div>
			 <div class="col-md-6 multi-gd-img multi-gd-text ">
					<a href="womens.html"><img src="images/bot_2.jpg" alt=" "><h4>Flat <span>50%</span> offer</h4></a>
			</div>
			<div class="clearfix"></div>
	   </div>
	   -->							
<!--/grids-->