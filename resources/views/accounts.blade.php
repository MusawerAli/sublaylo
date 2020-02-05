@if(Auth::user())
  <script>window.location = "/";</script>

@endif
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
                        
                        {{-- Errors Display  start--}}
                        
                        @if ($message = Session::get('error'))
                        <div class="w3-panel w3-padding w3-red w3-display-container">
                            <span onclick="this.parentElement.style.display='none'"
                            class="w3-button w3-large w3-display-topright">&times;</span>
                            {{$message}}
                          </div>
                        @endif

                            @if (count($errors) > 0 )
                            <div class="w3-panel w3-display-container w3-padding w3-yellow" >
                            <span onclick="this.parentElement.style.display='none'"
                                class="w3-button w3-display-topright">&times;</span>

                        <ul>
                            
                            @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div> 
                        @endif

                         {{-- Errors Display  end--}}
                      
                    <form class="auth-form" method="POST"  action="{{route('login')}}">
                        @csrf
                            <div class="input-wrp">
                                <input class="textfield" name="email" type="text" placeholder="Contact NO# or Email address *" />
                            </div>

                            <div class="input-wrp">
                                <input class="textfield" name="password" type="password" placeholder="Password" />
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
                        <form class="auth-form" id="sign-up" method="POST" action="SignUp">
                            @csrf
                            <div class="input-wrp">
                                <input class="textfield" type="text" name="name" id="name" placeholder="Full name *" />
                            </div>

                            <div class="input-wrp">
                                <input class="textfield" type="email" name="email" id="email" placeholder="Email *" />
                                <span id="error_email"></span>
                            </div>

                            <div class="input-wrp">
                                <input class="textfield" type="number" name="contact" id="contact" placeholder="Phone no#" />
                            </div>

                            <div class="input-wrp">
                                <input class="textfield" type="password" name="password" id="password" placeholder="Password" />
                            </div>

                            <div class="input-wrp">
                                <input class="textfield" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password" />
                                
                            </div>

                            <div class="d-table mt-8">
                                <div class="d-table-cell align-middle">
                                    <button class="w3-btn w3-yellow w3-round-large " type="submit" name="submit" id="submit" role="button"> <span id="spin"></span> Sign up</button>
                                </div>

                                
                            </div>
                        </form>
                        <!-- end form -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
       $(document).ready(function(){
        
        $('#email').blur(function(){
               var error_email = '';
               var email = $('#email').val();
              // var contact = $('#contact').val();
               var _token = $('input[name="_token"]').val();
               var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                if(!filter.test(email)){
                    $('#error_email').html('<label class="text-danger w3-wide">Email not Valid</label>');
                    $('#email').addClass('w3-red');
                    $('#submit').attr('disabled','disabled');

                }else{
                        $.ajax({
                            url:"{{route('Check.Email')}}",
                            method:"POST",
                            data:{email:email,_token:_token},
                            success:function(result){
                               
                                if(result==0){
                                    $('#error_email').html('<span class="text-success">Success</span>');
                                    $('#email').removeClass('w3-red');
                                    $('#email').addClass('w3-green');
                                    $('#submit').attr('disabled',false);
                                }

                                else{
                                    $('#error_email').html('<span class="w3-text-red w3-yellow">This Email already taken.</span>');
                                    
                                    $('#submit').attr('disabled',true);
                                }
                            }
                        });
                }
            });


            //Sign up using ajaax

            // $('#sign-up').on('submit', function(event){
            //     event.preventDefault();
            //     var form_data = $(this).serialize();
            //     $('#submit').attr('disabled','disabled');
            //     $('#spin').addClass('fa fa-spinner fa-spin');
            //    function send_data(){
            //     $.ajax({
            //         url:"SignUp",
            //         method:"POST",
            //         data:form_data,
            //        // dataType:"json",
            //         success:function(data){
            //             $('#submit').attr('disabled',false);
            //             window.location('accounts');
                        
            //         }
            //     });
            //    }
            //    setInterval(send_data,5000);
            // });


        });
     
     
        </script>
@endsection