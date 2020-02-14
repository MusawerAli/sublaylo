
<!DOCTYPE html>
<html lang="en">
<head>
    @include('header.head')
    @stack('bootstrap')
</head>
<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    </style>
<body class="w3-light-grey">
 
  <!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Logo</span>
</div>
    <!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container w3-row">
      <div class="w3-col s4">
        <img src="{{asset('assets/img/user_images')}}/{{Auth::user()->image}}" class="w3-circle w3-margin-right" style="width:46px">
      </div>
      <div class="w3-col s8 w3-bar">
        <span>{{Auth::user()->name}}, <strong>{{Auth::user()->role}}</strong></span><br>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
      </div>
    </div>
    <hr>
    <div class="w3-container">
      <h5>Dashboard</h5>
    </div>
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    @if (Auth::user()->role=="admin")
    <div class="w3-bar-block">
      
      <a href="{{route('admin-dash')}}" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Dashboard</a>
      <a href="{{route('AddShops')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Shopkeeper Detail</a>
      <a href="{{route('profile')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  profile</a><br><br>
      <a href="{{route('logout')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw"></i>  Logout</a><br><br>
     
    </div>
    @elseif(Auth::user()->role=="shopkeeper")
    <a href="{{route('logout')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw"></i>  Logout</a><br><
    @endif
  </nav>
  <!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
@yield('admin-dash')
@yield('AddShops')

</div>
    <script>
        // Get the Sidebar
        var mySidebar = document.getElementById("mySidebar");
        
        // Get the DIV with overlay effect
        var overlayBg = document.getElementById("myOverlay");
        
        // Toggle between showing and hiding the sidebar, and add overlay effect
        function w3_open() {
          if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
            overlayBg.style.display = "none";
          } else {
            mySidebar.style.display = 'block';
            overlayBg.style.display = "block";
          }
        }
        
        // Close the sidebar with the close button
        function w3_close() {
          mySidebar.style.display = "none";
          overlayBg.style.display = "none";
        }
        </script>
</body>

    
</html>