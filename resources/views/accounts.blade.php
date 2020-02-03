@extends('master')

@section('accounts')
<!-- start hero -->
<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 40%" style="background-image: url({{asset('assets/img/intro_img/15.jpg')}});color: #333;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7">
                <h1 class="__title"> Credientials</h1>

                <p>
                    The point of using is that it has a more-or-less normal distribution of letters, as opposed to using Content here content here making it look
                </p>
            </div>
        </div>
    </div>
</div>
<!-- end hero -->
    	<!-- start section -->
        <section class="section">
            <div class="decor-el decor-el--1" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="286" height="280" src="img/blank.gif" data-src="img/decor-el_1.jpg" alt="demo"/>
            </div>

            <div class="decor-el decor-el--3" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="115" height="117" src="img/blank.gif" data-src="img/decor-el_3.jpg" alt="demo"/>
            </div>

            <div class="decor-el decor-el--4" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="84" height="76" src="img/blank.gif" data-src="img/decor-el_4.jpg" alt="demo"/>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                        <h2>Sign <span>in</span></h2>

                        <!-- start form -->
                        <form class="auth-form" action="#">
                            <div class="input-wrp">
                                <input class="textfield" type="text" placeholder="Username or email address *" />
                            </div>

                            <div class="input-wrp">
                                <input class="textfield" type="text" placeholder="Password" />
                            </div>

                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto">
                                    <label class="checkfield align-bottom">
                                        <input type="checkbox" checked="">
                                        <i></i>
                                        Remember me
                                    </label>
                                </div>

                                <div class="col-auto">
                                    <a class="link-forgot" href="#">Lost your password?</a>
                                </div>
                            </div>

                            <div class="d-table mt-8">
                                <div class="d-table-cell align-middle">
                                    <button class="custom-btn custom-btn--medium custom-btn--style-1" type="submit" role="button">Login in</button>
                                </div>

                                
                            </div>
                        </form>
                        <!-- end form -->

                        <div class="spacer py-6 d-md-none"></div>

                    </div>

                    <div class="col-12 col-md-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2">
                        <h2>new Account</h2>

                        <!-- start form -->
                        <form class="auth-form" action="#">
                            <div class="input-wrp">
                                <input class="textfield" type="text" placeholder="Full name *" />
                            </div>

                            <div class="input-wrp">
                                <input class="textfield" type="text" placeholder="Email *" />
                            </div>

                            <div class="input-wrp">
                                <input class="textfield" type="text" placeholder="Password" />
                            </div>

                            <div class="input-wrp">
                                <input class="textfield" type="text" placeholder="Confirm password" />
                            </div>

                            <div class="d-table mt-8">
                                <div class="d-table-cell align-middle">
                                    <button class="custom-btn custom-btn--medium custom-btn--style-1" type="submit" role="button">Sign up</button>
                                </div>

                                
                            </div>
                        </form>
                        <!-- end form -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
@endsection