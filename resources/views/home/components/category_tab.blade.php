<div class="category-tab">
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
                                @foreach($categories as $key => $categoryItem)
								<li class="{{$key == 0 ?'active':''}}"><a href="#category_tab_{{$categoryItem->id}}" data-toggle="tab">{{$categoryItem->name}}</a></li>
                                @endforeach
							</ul>
						</div>
						<div class="tab-content">
                        @foreach($categories as $key => $categoryItemProduct)
							<div class="tab-pane fade {{$key == 0 ? 'active in':''}}" id="category_tab_{{$categoryItemProduct->id}}" >
                                @foreach($categoryItemProduct->products as $productItemTabs)
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{$productItemTabs->feature_image_path}}" alt="" />
												<h2>{{number_format($productItemTabs->price)}}</h2>
												<p>{{$productItemTabs->name}}</p>
												<a href="#" data-url="{{route('addToCart',['id' => $productItemTabs->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
                                @endforeach
							</div>
                        @endforeach
						</div>
					</div>