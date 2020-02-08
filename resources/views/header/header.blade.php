
					<!-- start header -->

			<header id="top-bar" class="top-bar top-bar--style-3" style="background-image: url({{asset('assets/img/home_img/home_3_bg.jpg')}})">
				<div class="top-bar__bg" style=" background-size: cover;background-repeat: no-repeat;background-position: 40% bottom;background-image: url({{asset('assets/img/top_bar_bg-1.jpg')}})"></div>

				<div class="container position-relative">
					<div class="row">

						<a class="top-bar__logo site-logo" href="index.html">
							<img class="img-fluid" src="img/site_logo.png" alt="demo" />
						</a>

						<a id="top-bar__navigation-toggler" class="top-bar__navigation-toggler top-bar__navigation-toggler--light" href="javascript:void(0);"><span></span></a>

						<div id="top-bar__inner" class="top-bar__inner">
							<div>
								<nav id="top-bar__navigation" class="top-bar__navigation navigation" role="navigation">
									<ul>
										<li class="active has-submenu">
											<a href="/home">Home</a>

											<ul class="submenu">
												<li><a href="index.html">Home 1</a></li>
												<li><a href="index_2.html">Home 2</a></li>
												<li class="active"><a href="index_3.html">Home 3</a></li>
												<li><a href="index_4.html">Home Shop</a></li>
											</ul>
										</li>

										<li>
											<a href="about.html">About</a>
										</li>

										<li class="has-submenu">
											<a href="javascript:void(0);">Pages</a>

											<ul class="submenu">
												<li><a href="services.html">Services</a></li>
												<li><a href="products.html">Products</a></li>
												<li><a href="products_details.html">Product Details</a></li>
												<li><a href="gallery_1.html">Gallery 1</a></li>
												<li><a href="gallery_2.html">Gallery 2</a></li>
												<li><a href="typography.html">Typography</a></li>
												<li><a href="404.html">404 page</a></li>
											</ul>
										</li>

										<li class="has-submenu">
											<a href="javascript:void(0);">Shop</a>

											<ul class="submenu">
												<li><a href="shop_catalog.html">Shop Catalog</a></li>
												<li><a href="single_product.html">Single Product</a></li>
												<li><a href="cart.html">Cart</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="sign_in.html">Sign In/Up</a></li>
											</ul>
										</li>

										@if (!Auth::user())
											<li>
											<a href="/accounts"><span class="fa fa-lock"></span> Accounts</a>
										</li>

										<li class="li-btn">
											<a href="" class="custom-btn custom-btn--style-4 w3-padding w3-right">Sign-in</a>

										</li>
										<li class="li-btn">
                                            <a href="" class="custom-btn custom-btn--style-4 w3-padding w3-left w3-green  w3-hover-green">Search</a>
										</li>
                                    </ul>


										@else
										<li class="active has-submenu">
											<img  src="{{asset('assets/img/')}}/{{Auth::user()->image}}" height="30px" width="30px" alt="profile">
											Profile
											<ul class="submenu">
												<li class="fa fa-first-order"> <a href="index.html">Orders</a></li>
												<li class="fa fa-gear"> <a href="index_2.html"> Setting</a></li>
												<li class="active"><a href="index_3.html">Home 3</a></li>
												<li class="fa fa-sign-out"> <a href="{{route('logout')}}">Logout</a></li>
											</ul>
										</li>

										@endif

										


										

										
									</ul>
								</nav>
							</div>
						</div>

					</div>
				</div>
			</header>


			<!-- end header -->
