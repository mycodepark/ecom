<!-- /new_arrivals --> 
<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
			@forelse($category->products as $product)
				@if($product->status == 1)
				<div class="col-md-3 product-men">
					<div class="men-pro-item simpleCart_shelfItem">
						<div class="men-thumb-item">
							@if ($product->images->count() > 0)
							
								<img src="{{ asset('storage/'.$product->images->first()->full) }}" alt="" class="pro-image-front">
								<img src="{{ asset('storage/'.$product->images->first()->full) }}" alt="" class="pro-image-back">
							
							@else
								<div class="img-wrap padding-y"><img src="https://via.placeholder.com/255x291" alt=""></div>
							@endif
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="{{ route('product.show', $product->slug) }}" class="link-product-add-cart">Ürün Detayı</a>
									</div>
								</div>
								@if($product->featured == 1)
								<span class="product-new-top">Yeni Ürün</span>
								@endif
						</div>
						<div class="item-info-product ">
							<h4><a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a></h4>
							
							<br>
							<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
								<a href="{{ route('product.show', $product->slug) }}">
									<input type="button" name="submit" value="DETAY" class="button" />
								</a>
							</div>


						</div>
					</div>
				</div>
				@endif
			@empty
				<p>No Products found in {{ $category->name }}.</p>
			@endforelse
				<div class="clearfix"></div>

			</div>
		</div>
	<!-- //new_arrivals --> 