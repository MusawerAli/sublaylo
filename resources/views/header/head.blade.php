<title>sublylo</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

<meta name="theme-color" content="#FCDB5A" />
<meta name="msapplication-navbutton-color" content="#FCDB5A" />
<meta name="apple-mobile-web-app-status-bar-style" content="#FCDB5A" />

<!-- Favicons
    
================================================== -->
<link rel="shortcut icon" href="img/favicon.ico">


<!-- Critical styles font-awesome.min.css
================================================== -->
<link rel="stylesheet" href="{{asset('assets/css/w3.css')}}" type="text/css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

@push('bootstrap')
<link rel="stylesheet" href="{{asset('assets/bootstrap4/bootstrap.min.css')}}">
<script src="{{asset('assets/bootstrap4/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap4/popper.min.js')}}"></script>
<script src="{{asset('assets/bootstrap4/bootstrap.min.js')}}"></script>
@endpush

@push('user-head')
<link rel="stylesheet" href="{{asset('assets/css/critical.min.css')}}" type="text/css">

<!-- Load google font
================================================== -->
<script type="text/javascript">
    WebFontConfig = {
        google: { families: [ 'Open+Sans:300,400,500,600,700,800', 'Raleway:100,400,400i,500,500i,700,700i,900'] }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>

<!-- Load other scripts
================================================== -->
<script type="text/javascript">
    var _html = document.documentElement,
        isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

    _html.className = _html.className.replace("no-js","js");
    _html.classList.add( isTouch ? "touch" : "no-touch");
</script>
<script type="text/javascript" src="{{asset('assets/js/device.min.js')}}"></script>
@endpush