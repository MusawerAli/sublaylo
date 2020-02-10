<!DOCTYPE html>
<html lang="en">
<head>
    @include('header.head')
    @stack('bootstrap')
</head>
<body class="w3-theme-l5">
    <!-- Page Container -->

<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
    <!-- The Grid -->
    <div class="w3-row">
      <!-- Left Column -->
      <div class="w3-col m3">
        <!-- Profile -->
        <div class="w3-card w3-round w3-white">
          <div class="w3-container">
          <h4 class="w3-center">{{$user->name}}</h4>
           <p class="w3-center"><img src="{{asset('assets/img/user_images/'.$user->image)}}" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
           <span class="w3-text-theme">Musawer</span>
           <hr>
           <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> {{$user->contact}}</p>
           <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> {{$user->address}}</p>
           <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> {{$user->created_at}}</p>
          </div>
        </div>
        <br>
        
        
      
        <br>
        

      
      <!-- End Left Column -->
      </div>
      
      <!-- Middle Column -->
      <div class="w3-col m7">
        <div class=" w3-card-4" >
        <div class="w3-padding-32" ng>
					<form class="form-horizontal" name="form_data" id="form_data">
			
					
						<div class="form-group">
							<label class="control-label col-sm-4"  for="name">Name:</label>
							<div class="col-sm-8">
								<input type="text" name="name" id="name" value="{{$user->name}}" class="form-control">
							</div>
						</div>
					
						<div class="form-group">
							<label class="control-label col-sm-4" for="email">Email:</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" name="email" value="{{$user->email}}"  id="email">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="contact">Contact NO:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" value="{{$user->contact}}"  name="contact" id="contact">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="address">Address:</label>
							<div class="col-sm-8">
								<textarea name="address" id="address" name="address" value="{{$user->address}}"  class="form-control">{{$user->address}}</textarea>
							</div>
						</div>
					
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" name="submit" id="submit" class="w3-btn w3-black">Update</button>
							</div>
						</div>
			
					</form>
        </div>
      </div>

      <br>
      <br>

      <div class="w3-card-4">

        <header class="w3-container w3-light-grey">
          <h3>Password</h3>
        </header>
        
        <div class="w3-container">
          <div class="form-group">
            <label for="name">Old Password:</label>
            <input type="password" name="old_password" id="old_password" class="form-control">
          </div>
          <div class="form-group">
            <label for="name">New Password:</label>
            <input type="password" name="new_password" id="new_password" class="form-control">
          </div>
        
          <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10 w3-center">
                <button type="submit" id="submit" class="submit" class="w3-btn w3-black">Update</button>
              </div>
            </div>
        </form>
          </div>
        </div>
        
    
        
        </div>

      </div>
      
      <!-- Right Column -->
      <div class="w3-col m2">
        <div class="w3-card w3-round w3-white w3-center">
          <div class="w3-container">
            <p>Upcoming Events:</p>
            <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
            <p><strong>Holiday</strong></p>
            <p>Friday 15:00</p>
            <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
          </div>
        </div>
        <br>
        
        <div class="w3-card w3-round w3-white w3-center">
          <div class="w3-container">
            <p>Friend Request</p>
            <img src="/w3images/avatar6.png" alt="Avatar" style="width:50%"><br>
            <span>Jane Doe</span>
            <div class="w3-row w3-opacity">
              <div class="w3-half">
                <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
              </div>
              <div class="w3-half">
                <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
              </div>
            </div>
          </div>
        </div>
        <br>
        
        <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
          <p>ADS</p>
        </div>
        <br>
        
        <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
          <p><i class="fa fa-bug w3-xxlarge"></i></p>
        </div>
        
      <!-- End Right Column -->
      </div>
      
    <!-- End Grid -->
    </div>
    
  <!-- End Page Container -->
  </div>
  <br>
</body>
</html>