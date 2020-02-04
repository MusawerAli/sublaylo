@extends('master')
@section('select-cities')

<!-- end start screen -->

									<!-- start section -->
				<section class="section section--review w3-sand jarallax">
					<div class="container">
						<div class="section-heading section-heading--center" data-aos="fade">
							<h2 class="__title">Select City <span></span></h2>

							<p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
						</div>

						<!-- start counters -->
						<div class="counter">
							<div class="__inner">
								<div class="row justify-content-sm-center">
									<!-- start item -->
									<div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
										<div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="150">
											<div class="d-table">
												<div class="d-table-cell align-middle">
													<i class="__ico">
														<img class="img-fluid  lazy" src="img/blank.gif" data-src="img/ico/ico_count_8.png" alt="demo" />
													</i>
												</div>

												<div class="d-table-cell align-middle">
													<p class="__count js-count" data-from="0" data-to="8">8</p>

													<p class="__title">Cities</p>
												</div>
											</div>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
										<div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="300">
											<div class="d-table">
												<div class="d-table-cell align-middle">
													<i class="__ico">
														<img class="img-fluid  lazy" src="img/blank.gif" data-src="img/ico/ico_count_9.png" alt="demo" />
													</i>
												</div>

												<div class="d-table-cell align-middle">
													<p class="__count js-count" data-from="0" data-to="50">50</p>

													<p class="__title">ShopeKeepers</p>
												</div>
											</div>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
										<div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="450">
											<div class="d-table">
												<div class="d-table-cell align-middle">
													<i class="__ico">
														<img class="img-fluid  lazy" src="img/blank.gif" data-src="img/ico/ico_count_10.png" alt="demo" />
													</i>
												</div>

												<div class="d-table-cell align-middle">
													<p class="__count js-count" data-from="0" data-to="500">500</p>

													<p class="__title">Register Customers</p>
												</div>
											</div>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
										<div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="600">
											<div class="d-table">
												<div class="d-table-cell align-middle">
													<i class="__ico">
														<img class="img-fluid  lazy" src="{{asset('assets/img/blank.gif')}}" data-src="img/ico/ico_count_11.png" alt="demo" />
													</i>
												</div>

												<div class="d-table-cell align-middle">
													<p class="__count js-count" data-from="0" data-to="1232">1232</p>

													<p class="__title">Total Orders</p>
												</div>
											</div>
										</div>
									</div>
									<!-- end item -->
								</div>
							</div>
						</div>
						<!-- end counters -->
					</div>
					<br>
					<div class="container-fluid px-md-0">
						<!-- start product preview -->
						<div class="product-preview product-preview--style-1">
							<div class="__inner">
								<div class="row">
									<!-- start item -->
									<div class="col-12 col-sm-6 col-lg-3">
										<div class="__item">
											<figure  class="__image">
												<img class="lazy" src="{{asset('assets/img/blank.gif')}}" data-src="{{asset('assets/img/cities/bwp.webp')}}" alt="bahawalpur" title="bahawalpur"/>
											</figure>

											<div class="__content">
												<h3 class="__title">Bahawalpur</h3>

												<a class="__link" href="{{route('find-city', ['city'=>'bahawalpur']) }}"></a>
											</div>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-6 col-lg-3">
										<div class="__item">
											<figure class="__image">
												<img class="lazy" src="img/blank.gif" data-src="{{asset('assets/img/cities/islamabad.webp')}}" alt="islamabad" title="islamabad"/>
											</figure>

											<div class="__content">
												<h3 class="__title">Islamabad</h3>

												<a class="__link" href="{{route('find-city', ['city'=>'Islamabad']) }}"></a>
											</div>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-6 col-lg-3">
										<div class="__item">
											<figure class="__image">
												<img class="lazy" src="img/blank.gif" data-src="{{asset('assets/img/cities/lahore.webp')}}" alt="demo" />
											</figure>

											<div class="__content">
												<h3 class="__title">Lahore</h3>

												<a class="__link" href="{{route('find-city', ['city'=>'lahore']) }}"></a>
											</div>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-6 col-lg-3">
										<div class="__item">
											<figure class="__image">
												<img class="lazy" src="img/blank.gif" data-src="{{asset('assets/img/cities/karachi.webp')}}" alt="demo" />
											</figure>

											<div class="__content">
												<h3 class="__title">Karachi</h3>

												<a class="__link" href="#"></a>
											</div>
										</div>
									</div>
									<!-- end item -->
								</div>

							</div>
						</div>
						<!-- end product preview -->
					</div>
				</section>
				<!-- end section -->


@endsection
