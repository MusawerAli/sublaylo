<!DOCTYPE html>
<html class="no-js" lang="en">

{{-- <meta http-equiv="content-type" content="text/html;charset=utf-8" /> --}}
<head>
@include('header.head')
@stack('user-head')
	</head>

	<body>
        <div id="app">
            @include('header.header')
           
          
<!-- start main -->
        <main role="main">
            
    <!-- Common styles
    ================================================== -->
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}" type="text/css">

    @yield('select-cities')
    @yield('city-detail')


    <!-- Load lazyLoad scripts
    ================================================== -->
    <script>
        (function(w, d){
            var m = d.getElementsByTagName('main')[0],
                s = d.createElement("script"),
                v = !("IntersectionObserver" in w) ? "8.17.0" : "10.19.0",
                o = {
                    elements_selector: ".lazy",
                    data_src: 'src',
                    data_srcset: 'srcset',
                    threshold: 500,
                    callback_enter: function (element) {

                    },
                    callback_load: function (element) {
                        element.removeAttribute('data-src')

                        oTimeout = setTimeout(function ()
                        {
                            clearTimeout(oTimeout);

                            AOS.refresh();
                        }, 1000);
                    },
                    callback_set: function (element) {

                    },
                    callback_error: function(element) {
                        element.src = "../../../placeholdit.imgix.net/_textc349?txtsize=21&amp;txt=Image%20not%20load&amp;w=200&amp;h=200";
                    }
                };
            s.type = 'text/javascript';
            s.async = true; // This includes the script as async. See the "recipes" section for more information about async loading of LazyLoad.
            s.src = "https://cdn.jsdelivr.net/npm/vanilla-lazyload@" + v + "/dist/lazyload.min.js";
            m.appendChild(s);
            // m.insertBefore(s, m.firstChild);
            w.lazyLoadOptions = o;
        }(window, document));
    </script>

    @yield('accounts')


        </main>
        <!-- end main -->
            @include('header.footer')
            @stack('user-footer')
        </div>

    @include('header.script')
    </body>
    
    {{-- <!-- Mirrored from demo.artureanec.com/html/agro/index_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 19:12:33 GMT --> --}}
    </html>