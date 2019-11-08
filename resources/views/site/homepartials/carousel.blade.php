<!-- banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			@php
			 $items = $carousels->count();
			 for ($i = 0; $i <= $items-1; $i++){
			@endphp
			<li data-target="#myCarousel" data-slide-to="{{ $i }}" class="{{ $i === 0 ? 'active' : '' }}"></li>
			@php } @endphp
		</ol>
		<div class="carousel-inner" role="listbox">
			@foreach($carousels as $carousel)
			<div class="item {{ $carousel->id === 1 ? 'active' : '' }}" style="background-image:url({{ asset('storage/'.$carousel->image) }})"> 
				<div class="container">
					<div class="carousel-caption">
						<h3><span>{{ $carousel->name }}</span></h3>
						<p>{{ $carousel->description }}</p>
						<a class="hvr-outline-out button2" href="{{ route('category.show', 'yataklar') }}">Alışverişe Başla </a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
    </div> 
	<!-- //banner -->