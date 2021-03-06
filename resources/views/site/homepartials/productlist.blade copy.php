<!-- /new_arrivals --> 
<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
				<div id="horizontalTab">
					<div class="resp-tabs-container">
					<!--/tab_one-->
						<div class="tab1">

                        @forelse($category->products as $product)
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
                                        @if ($product->images->count() > 0)
										<img src="{{ asset('storage/'.$product->images->first()->full) }}" alt="" class="pro-image-front">
										<img src="{{ asset('storage/'.$product->images->first()->full) }}" alt="" class="pro-image-back">
                                        @else
                                            <div class="img-wrap padding-y"><img src="https://via.placeholder.com/176" alt=""></div>
                                        @endif
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ route('product.show', $product->slug) }}" class="link-product-add-cart">Ürün Detayı</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
									</div>
									<div class="item-info-product ">
										<h4><a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a></h4>
									</div>
								</div>
							</div>
                        @empty
                            <p>No Products found in {{ $category->name }}.</p>
                        @endforelse


							<div class="clearfix"></div>
						</div>
						<!--//tab_one-->


					</div>
				</div>	
			</div>
		</div>
	<!-- //new_arrivals --> 