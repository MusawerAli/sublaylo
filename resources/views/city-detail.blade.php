@extends('master')
@section('city-detail')
    
<!-- start section -->
<section class="section">
   

    <div class="container">

        <!-- start goods catalog -->
        <div class="goods-catalog">
            <div class="row">
                
                <div class="col-12 col-md-4 col-lg-3">
                    <aside class="sidebar goods-filter">
                        <span class="goods-filter-btn-close js-toggle-filter"><i class="fontello-cancel"></i></span>

                        <div class="goods-filter__inner">
                            <!-- start widget -->
                            <div class="widget widget--search">
                                <form class="form--horizontal" action="#" method="get">
                                    <div class="input-wrp">
                                        <input class="textfield" name="s" type="text" placeholder="Find in {{$city}}" />
                                    </div>

                                    <button class="custom-btn custom-btn--tiny custom-btn--style-1" type="submit" role="button">Find</button>
                                </form>
                            </div>
                            <!-- end widget -->

                            <!-- start widget -->
                          
                            <div class="widget widget--categories">
                                <h4 class="h6 widget-title">CAtegories</h4>

                                <ul class="list">
                                    <li class="list__item">
                                        <a class="list__item__link" href="#">Grocery</a>
                                        <span>(3)</span>
                                    </li>

                                    <li class="list__item">
                                        <a class="list__item__link" href="#">Make-up</a>
                                        <span>(5)</span>
                                    </li>

                                    <li class="list__item">
                                        <a class="list__item__link" href="#">Kryana Items</a>
                                        <span>(2)</span>
                                    </li>

                                    <li class="list__item">
                                        <a class="list__item__link" href="#">Oil</a>
                                        <span>(8)</span>
                                    </li>

                                    <li class="list__item">
                                        <a class="list__item__link" href="#">Floor </a>
                                        <span>(5)</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- end widget -->

                            <!-- start widget -->
                            <div class="widget widget--price">
                                <h4 class="h6 widget-title">Price Filter</h4>

                                <div>
                                    <input type="text" class="js-range-slider" name="my_range" value=""
                                        data-type="double"
                                        data-min="0"
                                        data-max="9000"
                                        data-from="200"
                                        data-to="2000"
                                        data-grid="false"
                                        data-skin="round"
                                        data-prefix="$"
                                        data-hide-from-to="true"
                                        data-hide-min-max="true"
                                    />

                                    <div class="row">
                                        <div class="col-6">
                                            <input class="range-slider-min-value" type="text" value="48" name="min-value" readonly="readonly">
                                        </div>

                                        <div class="col-6">
                                            <input class="range-slider-max-value" type="text" value="365" name="max-value" readonly="readonly">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end widget -->

                            <!-- start widget -->
                            <div class="widget widget--additional">
                                <h4 class="h6 widget-title">Additional</h4>

                                <ul>
                                    <li>
                                        <label class="checkfield">
                                            <input type="checkbox" checked/>
                                            <i></i>
                                            Organic
                                        </label>
                                    </li>

                                    <li>
                                        <label class="checkfield">
                                            <input type="checkbox" />
                                            <i></i>
                                            Fresh
                                        </label>
                                    </li>

                                    <li>
                                        <label class="checkfield">
                                            <input type="checkbox" />
                                            <i></i>
                                            Sales
                                        </label>
                                    </li>

                                    <li>
                                        <label class="checkfield">
                                            <input type="checkbox" />
                                            <i></i>
                                            Discount
                                        </label>
                                    </li>

                                    <li>
                                        <label class="checkfield">
                                            <input type="checkbox" />
                                            <i></i>
                                            Expired
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- end widget -->

                            <!-- start widget -->
                            <div class="widget widget--tags">
                                <h4 class="h6 widget-title">Popular Tags</h4>

                                <ul>
                                    <li><a href="#">Oil</a></li>
                                    <li><a href="#">makeup</a></li>
                                    <li><a href="#">Electronic</a></li>
                                    <li><a href="#">Sugar</a></li>
                                    <li><a href="#">floor</a></li>
                                    
                                </ul>
                            </div>
                            <!-- end widget -->

                            <!-- start widget -->
                            <div class="widget">
                                <div class="row no-gutters align-items-center">
                                    <div class="col">
                                        <button class="custom-btn custom-btn--medium custom-btn--style-1" role="button">Show Products</button>
                                    </div>

                                    <div class="col-auto">
                                        <a class="clear-filter" href="#">Clear all</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end widget -->

                            <!-- start widget -->
                            <div class="widget widget--products">
                                <h4 class="h6 widget-title">Featured products</h4>

                                <ul>
                                    <li>
                                        <div class="row no-gutters">
                                            <div class="col-auto __image-wrap">
                                                <figure class="__image">
                                                    <a href="single_product.html">
                                                        <img class="lazy" src="img/blank.gif" data-src="img/goods_img/5.jpg" alt="demo" />
                                                    </a>
                                                </figure>
                                            </div>

                                            <div class="col">
                                                <h4 class="h6 __title"><a href="single_product.html">Big Banana</a></h4>

                                                <div class="rating">
                                                    <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                    <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                    <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                    <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                    <span class="rating__item"><i class="fontello-star"></i></span>
                                                </div>

                                                <div class="product-price">
                                                    <span class="product-price__item product-price__item--new">2.99 $</span>
                                                    <span class="product-price__item product-price__item--old">4.11 $</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row no-gutters">
                                            <div class="col-auto __image-wrap">
                                                <figure class="__image">
                                                    <a href="single_product.html">
                                                        <img class="lazy" src="img/blank.gif" data-src="img/goods_img/8.jpg" alt="demo" />
                                                    </a>
                                                </figure>
                                            </div>

                                            <div class="col">
                                                <h4 class="h6 __title"><a href="single_product.html">Awesome Peach </a></h4>

                                                <div class="rating">
                                                    <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                    <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                    <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                    <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                    <span class="rating__item"><i class="fontello-star"></i></span>
                                                </div>

                                                <div class="product-price">
                                                    <span class="product-price__item product-price__item--new">10.99 $</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row no-gutters">
                                            <div class="col-auto __image-wrap">
                                                <figure class="__image">
                                                    <a href="single_product.html">
                                                        <img class="lazy" src="img/blank.gif" data-src="img/goods_img/2.jpg" alt="demo" />
                                                    </a>
                                                </figure>
                                            </div>

                                            <div class="col">
                                                <h4 class="h6 __title"><a href="single_product.html">Awesome Brocoli</a></h4>

                                                <div class="rating">
                                                    <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                    <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                    <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                    <span class="rating__item rating__item--active"><i class="fontello-star"></i></span>
                                                    <span class="rating__item"><i class="fontello-star"></i></span>
                                                </div>

                                                <div class="product-price">
                                                    <span class="product-price__item product-price__item--new">5.99 $</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- end widget -->

                            <!-- start widget -->
                            <div class="widget widget--banner">
                                <a href="#"><img class="img-fluid  lazy" src="img/blank.gif" data-src="img/widget_banner_2.jpg" alt="demo" /></a>
                            </div>
                            <!-- end widget -->
                        </div>
                    </aside>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="spacer py-6 d-md-none"></div>

                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <span class="goods-filter-btn-open js-toggle-filter"><i class="fontello-filter"></i>Filter</span>
                        </div>

                        <div class="col-auto">
                            <!-- start ordering -->
                            <form class="ordering" action="#">
                                <div class="input-wrp">
                                    <select class="textfield wide js-select">
                                        <option value="1">Default Sorting</option>
                                        <option value="2">Price. low to high</option>
                                        <option value="3">Price. high to low</option>
                                        <option value="3">Sort by latest</option>
                                    </select>
                                </div>
                            </form>
                            <!-- end ordering -->
                        </div>
                    </div>

                    <div class="spacer py-3"></div>
 <!-- Project Section -->
 <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"> <span>Popular Shops in</span> {{$city}}</h3>
  </div>
                    <!-- start goods -->
                    <div class="goods goods--style-1">

                        <div class="__inner">
                            {{-- <div class="row">
                                <!-- start item -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="__item">
                                        <figure class="__image">
                                            <img class="" width="188" src="{{asset('assets/img/product-img/96_Ghee_1581718693.png')}}" data-src="img/goods_img/1.jpg" alt="demo" />
                                        </figure>

                                        <div class="__content">
                                            <h4 class="h6 __title"><a href="single_product.html">Oranges</a></h4>

                                            <div class="__category"><a href="#">Fruits</a></div>

                                            <div class="product-price">
                                                <span class="product-price__item product-price__item--new">3,80 $</span>
                                            </div>

                                            <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i class="fontello-shopping-bag"></i>Add to cart</a>
                                        </div>

                                        <span class="product-label product-label--sale">Sale</span>
                                    </div>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="__item">
                                        <figure class="__image">
                                            <img class="lazy" width="180" src="img/blank.gif" data-src="img/goods_img/2.jpg" alt="demo" />
                                        </figure>

                                        <div class="__content">
                                            <h4 class="h6 __title"><a href="single_product.html">Brocoli</a></h4>

                                            <div class="__category"><a href="#">Vegetables</a></div>

                                            <div class="product-price">
                                                <span class="product-price__item product-price__item--new">3,35 $</span>
                                            </div>

                                            <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i class="fontello-shopping-bag"></i>Add to cart</a>
                                        </div>

                                        <span class="product-label product-label--new">New</span>
                                    </div>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="__item">
                                        <figure class="__image">
                                            <img class="lazy" width="160" src="img/blank.gif" data-src="img/goods_img/3.jpg" alt="demo" />
                                        </figure>

                                        <div class="__content">
                                            <h4 class="h6 __title"><a href="single_product.html">Red Apple</a></h4>

                                            <div class="__category"><a href="#">Fruits</a></div>

                                            <div class="product-price">
                                                <span class="product-price__item product-price__item--new">0,99 $</span>
                                                <span class="product-price__item product-price__item--old">2200$</span>
                                            </div>

                                            <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i class="fontello-shopping-bag"></i>Add to cart</a>
                                        </div>

                                        <span class="product-label product-label--hot">hot</span>
                                    </div>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="__item">
                                        <figure class="__image">
                                            <img class="lazy" width="190" src="" data-src="img/goods_img/4.jpg" alt="demo" />
                                        </figure>

                                        <div class="__content">
                                            <h4 class="h6 __title"><a href="single_product.html">Strawberry</a></h4>

                                            <div class="__category"><a href="#">Fruits</a></div>

                                            <div class="product-price">
                                                <span class="product-price__item product-price__item--new">2,10 $</span>
                                            </div>

                                            <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i class="fontello-shopping-bag"></i>Add to cart</a>
                                        </div>

                                        <span class="product-label product-label--sale">Sale</span>
                                    </div>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="__item">
                                        <figure class="__image">
                                            <img class="lazy" width="180" src="img/blank.gif" data-src="img/goods_img/5.jpg" alt="demo" />
                                        </figure>

                                        <div class="__content">
                                            <h4 class="h6 __title"><a href="single_product.html">Fresh Banana</a></h4>

                                            <div class="__category"><a href="#">Vegetables</a></div>

                                            <div class="product-price">
                                                <span class="product-price__item product-price__item--new">10,99 $</span>
                                            </div>

                                            <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i class="fontello-shopping-bag"></i>Add to cart</a>
                                        </div>

                                        <span class="product-label product-label--new">New</span>
                                    </div>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="__item">
                                        <figure class="__image">
                                            <img class="lazy" width="180" src="img/blank.gif" data-src="img/goods_img/6.jpg" alt="demo" />
                                        </figure>

                                        <div class="__content">
                                            <h4 class="h6 __title"><a href="single_product.html">Big Pumpkin</a></h4>

                                            <div class="__category"><a href="#">Fruits</a></div>

                                            <div class="product-price">
                                                <span class="product-price__item product-price__item--new">8,15 $</span>
                                            </div>

                                            <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i class="fontello-shopping-bag"></i>Add to cart</a>
                                        </div>

                                        <span class="product-label product-label--hot">hot</span>
                                    </div>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="__item">
                                        <figure class="__image">
                                            <img class="lazy" width="250" src="img/blank.gif" data-src="img/goods_img/7.jpg" alt="demo" />
                                        </figure>

                                        <div class="__content">
                                            <h4 class="h6 __title"><a href="single_product.html">Organic Tomato</a></h4>

                                            <div class="__category"><a href="#">Vegetables</a></div>

                                            <div class="product-price">
                                                <span class="product-price__item product-price__item--old">6,68 $</span>
                                                <span class="product-price__item product-price__item--new">6,12 $</span>
                                            </div>

                                            <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i class="fontello-shopping-bag"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="__item">
                                        <figure class="__image">
                                            <img class="lazy" width="236" src="img/blank.gif" data-src="img/goods_img/8.jpg" alt="demo" />
                                        </figure>

                                        <div class="__content">
                                            <h4 class="h6 __title"><a href="single_product.html">Organic Peach</a></h4>

                                            <div class="__category"><a href="#">Vegetables</a></div>

                                            <div class="product-price">
                                                <span class="product-price__item product-price__item--old">6,68 $</span>
                                                <span class="product-price__item product-price__item--new">6,12 $</span>
                                            </div>

                                            <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i class="fontello-shopping-bag"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="__item">
                                        <figure class="__image">
                                            <img class="lazy" width="188" src="img/blank.gif" data-src="img/goods_img/1.jpg" alt="demo" />
                                        </figure>

                                        <div class="__content">
                                            <h4 class="h6 __title"><a href="single_product.html">Oranges</a></h4>

                                            <div class="__category"><a href="#">Fruits</a></div>

                                            <div class="product-price">
                                                <span class="product-price__item product-price__item--new">3,80 $</span>
                                            </div>

                                            <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i class="fontello-shopping-bag"></i>Add to cart</a>
                                        </div>

                                        <span class="product-label product-label--sale">Sale</span>
                                    </div>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="__item">
                                        <figure class="__image">
                                            <img class="lazy" width="180" src="img/blank.gif" data-src="img/goods_img/2.jpg" alt="demo" />
                                        </figure>

                                        <div class="__content">
                                            <h4 class="h6 __title"><a href="single_product.html">Brocoli</a></h4>

                                            <div class="__category"><a href="#">Vegetables</a></div>

                                            <div class="product-price">
                                                <span class="product-price__item product-price__item--new">3,35 $</span>
                                            </div>

                                            <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i class="fontello-shopping-bag"></i>Add to cart</a>
                                        </div>

                                        <span class="product-label product-label--new">New</span>
                                    </div>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="__item">
                                        <figure class="__image">
                                            <img class="lazy" width="160" src="img/blank.gif" data-src="img/goods_img/3.jpg" alt="demo" />
                                        </figure>

                                        <div class="__content">
                                            <h4 class="h6 __title"><a href="single_product.html">Red Apple</a></h4>

                                            <div class="__category"><a href="#">Fruits</a></div>

                                            <div class="product-price">
                                                <span class="product-price__item product-price__item--new">0,99 $</span>
                                                <span class="product-price__item product-price__item--old">2200$</span>
                                            </div>

                                            <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i class="fontello-shopping-bag"></i>Add to cart</a>
                                        </div>

                                        <span class="product-label product-label--hot">hot</span>
                                    </div>
                                </div>
                                <!-- end item -->

                                <!-- start item -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="__item">
                                        <figure class="__image">
                                            <img class="lazy" width="190" src="img/blank.gif" data-src="img/goods_img/4.jpg" alt="demo" />
                                        </figure>

                                        <div class="__content">
                                            <h4 class="h6 __title"><a href="single_product.html">Strawberry</a></h4>

                                            <div class="__category"><a href="#">Fruits</a></div>

                                            <div class="product-price">
                                                <span class="product-price__item product-price__item--new">2,10 $</span>
                                            </div>

                                            <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i class="fontello-shopping-bag"></i>Add to cart</a>
                                        </div>

                                        <span class="product-label product-label--sale">Sale</span>
                                    </div>
                                </div>
                                <!-- end item -->
                            </div> --}}
                              <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
      @csrf
    <div class="w3-col s6 l3 m4">
      <div class="w3-container w3-card">
        <div class="w3-display-container">
          <img src="https://images.squarespace-cdn.com/content/588fe72c59cc68806c8671fc/1489800609488-FIM4W6GU5U165EFVZBQL/Ghee+Jar+Sample.png?format=1500w&content-type=image%2Fpng" style="width:100%">
          <span class="w3-tag w3-display-topleft w3-pink">Discount 20%</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Order Now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
       
       <div> <b class="w3-text-black">Ghee (ASIA)</b> </div>
        <span class="fa fa-location-arrow w3-text-blue"> Bahawalpur</span>
        <span class="fa fa-motorcycle  w3-text-green"> Shipping Free</span>
        <hr>
        <span class="fa fa-university w3-text-indigo">Saleem Karyana </span>
        <p><b class="w3-text-red">(pkr): 230 1kg</b></p>
      </div>
    </div>
    <div class="w3-col s6 l3 m4">
        <div class="w3-container w3-card">
          <div class="w3-display-container">
            <img src="https://pngimage.net/wp-content/uploads/2018/06/wheat-flour-png-1.png" style="width:100%">
            {{-- <span class="w3-tag w3-display-topleft">Sale</span> --}}
            <div class="w3-display-middle w3-display-hover">
              <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
            </div>
          </div>
          <div> <b class="w3-text-black">Floor (Special)</b> </div>
          <span class="fa fa-location-arrow w3-text-blue"> Bahawalpur</span>
          <span class="fa fa-motorcycle  w3-text-green"> Shipping Free</span>
          <hr>
          <span class="fa fa-university w3-text-indigo">Ahmad Karyana </span>
          <p><b class="w3-text-red">(pkr): 399 10kg</b></p>
        </div>
      </div>
  
    <div class="w3-col s6 l3 m4">
      <div class="w3-container w3-card">
        <div class="w3-display-container">
          <img src="https://lifestock.pk/pub/media/catalog/product/cache/c5b0e6136a6dd7f7d91d8b889ed40f35/m/a/maize.png" style="width:100%">
          {{-- <span class="w3-tag w3-display-topleft">Sale</span> --}}
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <div> <b class="w3-text-black">Corn Floor (Nasir)</b> </div>
        <span class="fa fa-location-arrow w3-text-blue"> Bahawalpur</span>
        <span class="fa fa-motorcycle  w3-text-green"> Shipping Free</span>
        <hr>
        <span class="fa fa-university w3-text-indigo">Ahmad Karyana </span>
        <p><b class="w3-text-red">(pkr): 160 10kg</b></p>
      </div>
    </div>
    <div class="w3-col s6 l3 m4">
      <div class="w3-container w3-card">
        <div class="w3-display-container">
          <img src="https://pluspng.com/img-png/sack-of-rice-png-a-2000.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <div>
            <b class="w3-text-black">Kachi basmati (kainat)</b>
        </div>
        <span class="fa fa-location-arrow w3-text-blue"> Bahawalpur</span>
        <span class="fa fa-motorcycle  w3-text-green"> Shipping Free</span>
        <hr>
        <span class="fa fa-university w3-text-indigo">Ahmad Karyana </span>
        <p><b class="w3-text-red">(pkr): 150 1kg</b></p>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
<div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-col s6 l3 m4">
      <div class="w3-container w3-card">
        <div class="w3-display-container">
          <img src="https://images.squarespace-cdn.com/content/588fe72c59cc68806c8671fc/1489800609488-FIM4W6GU5U165EFVZBQL/Ghee+Jar+Sample.png?format=1500w&content-type=image%2Fpng" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Vintage Skinny Jeans<br><b class="w3-text-red">$14.99</b></p>
      </div>
    </div>
    <div class="w3-col s6 l3 m4">
     <div class="w3-container w3-card">
        <div class="w3-display-container">
          <img src="https://pngimage.net/wp-content/uploads/2018/06/wheat-flour-png-1.png" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Vintage Skinny Jeans<br><b class="w3-text-red">$14.99</b></p>
      </div>
    </div>
    <div class="w3-col s6 l3 m4">
      <div class="w3-container w3-card">
        <div class="w3-display-container">
          <img src="https://lifestock.pk/pub/media/catalog/product/cache/c5b0e6136a6dd7f7d91d8b889ed40f35/m/a/maize.png" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Vintage Skinny Jeans<br><b class="w3-text-red">$14.99</b></p>
      </div>
    </div>
    <div class="w3-col s6 l3 m4">
      <div class="w3-container w3-card">
        <div class="w3-display-container">
          <img src="https://pluspng.com/img-png/sack-of-rice-png-a-2000.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Vintage Skinny Jeans<br><b class="w3-text-red">$14.99</b></p>
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>

                            
                        </div>
                    </div>
                    <!-- end goods -->

                    <div class="spacer py-5"></div>

                    <!-- start pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fontello-angle-right"></i></a></li>
                        </ul>
                    </nav>
                    <!-- end pagination -->
                </div>
            </div>
        </div>
        <!-- end goods catalog -->

    </div>
 
<script>
 $(document).ready(function(){
    var _token = $('input[name="_token"]').val();
      var city = {!! json_encode($city)!!};

 

    
    fetch_data(city);

    function fetch_data(city,from_date = '', to_date = '')
        {
        $.ajax({
        url:"{{ route('LoadData') }}",
        method:"POST",
        data:{from_date:from_date, to_date:to_date, _token:_token,city:city},
        dataType:"json",
        success:function(data)
        {
            console.log(data);
            // var output = '';
            // $('#total_records').text(data.length);
            // for(var count = 0; count < data.length; count++)
            // {
            // output += '<tr>';
            // output += '<td>' + data[count].post_title + '</td>';
            // output += '<td>' + data[count].post_description + '</td>';
            // output += '<td>' + data[count].date + '</td></tr>';
            // }
            // $('tbody').html(output);
        }
        })
        }
 });
</script>
    
</section>
<!-- end section -->


@endsection