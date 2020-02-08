@extends('admin.admin-master')

@section('AddShops')

<section>

  <div class="w3-container">
    <header class="w3-container" style="padding-top:22px">
        <h5 ><b class="w3-border-bottom"><i class="fa fa-dashboard"></i> ShopKeepers Detail </b> </h5>
        <button class="w3-btn w3-green w3-border w3-border-green w3-round-xlarge" id="add_data">+ Add ShopKeeper</button>
      </header>

<br>
      
      <table class="w3-table-all w3-hoverable">
        <thead>
          <tr class="w3-light-grey">
            <th>No</th>
            <th>Name</th>
            <th>Busin Name</th>
            <th>CNIC#</th>
            <th>Contact</th>
            <th>City</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
        </thead>
        <tr>
          <td>Jill</td>
          <td>Smith</td>
          <td>50</td>
        </tr>
        <tr>
          <td>Eve</td>
          <td>Jackson</td>
          <td>94</td>
        </tr>
        <tr>
          <td>Adam</td>
          <td>Johnson</td>
          <td>67</td>
        </tr>
      </table>
  </div>

</section>



<div id="businModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST"  id="BusinessForm">
                <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   
                </div>
                <div class="modal-body">
                    <h2 class="modal-title w3-center w3-wide">Add Shopkeepers</h2>
                    <br>
                   @csrf

                    <span id="form_output"></span>
                    <div class="row">
                        <div class="col col-md-6 col-lg-6 col-sm-6">
                            <span class="w3-wide">Personal Detail</span>
                            <div class="form-group">
                                
                                <input type="text" class="form-control" name="name" placeholder="Full Name" id="name">
                              </div>

                              <div class="form-group">
                                
                                <input type="text" class="form-control" name="email" placeholder="Email#" id="email">
                                <span id="error_email"></span>
                              </div>
                              <div class="form-group">
                                
                                <input type="text" class="form-control" name="address" placeholder="Personal Address" id="email">
                              </div>
                              <div class="form-group">
                                
                                <input type="password" class="form-control" name="password" placeholder="*********" id="password">
                              </div>
                              <div class="form-group">
                                
                                <input type="text" class="form-control" name="contact" placeholder="Contact #" id="contact">
                              </div>
                              
                              <div class="form-group">
                                
                                <input type="text" class="form-control" name="city" placeholder="city#" id="city">
                              </div>
                              <div class="form-group">
                                
                                <input type="text" class="form-control" name="state" placeholder="state" value="punjab" id="state">
                              </div>
                              <div class="form-group">
                                
                                <input type="text" class="form-control" name="country" placeholder="country" readonly readonly value="pakistan" id="country">
                              </div>
                        </div>
                        <div class="col col-md-6 col-lg-6 col-sm-6">
                            <span class="w3-wide">Business Detail</span>
                            <div class="form-group">
                                
                                <input type="text" class="form-control" name="BusinessName" placeholder="Business Name" id="busin_name">
                              </div>
                              <div class="form-group">
                                
                                <input type="text" class="form-control" name="BusinessContact" placeholder="Business Contact#" id="busin_contact">
                              </div>
                              <div class="form-group">
                                
                                <input type="text" class="form-control" name="BusinessAddress" placeholder="Business Address 1" id="address">
                              </div>

                              <div class="form-group">
                                <label >Business Type</label>
                                <select class="form-control" name="BusinessType" id="BusinessType">
                                  <option>Krayana</option>
                                  <option>Grocery</option>
                                
                                </select>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="button_action" id="button_action" value="insert" />
                    <input type="submit" name="submit" id="action" value="Add" class="btn btn-info" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script type="text/javascript">

$(document).ready(function(){
 $('#add_data').click(function(){
        $('#businModal').modal('show');
        $('#busin_form')[0].reset();
        $('#form_output').html('');
        $('#button_action').val('insert');
        $('#action').val('Add');
    });

          //Verify Email
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
                                    $('#action').attr('disabled',false);
                                }

                                else{
                                    $('#error_email').html('<span class="w3-text-red w3-yellow">This Email already taken.</span>');
                                    
                                    $('#action').attr('disabled',true);
                                }
                            }
                        });
                }
            });


    $('#BusinessForm').on('submit', function(event){
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url:"{{route('AddBusiness')}}",
            method:"POST",
            data:form_data,
            dataType:"json",
            success:function(data)
            {
            
               
                if(data.error.length > 0)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                    }
                    $('#form_output').html(error_html);
                }
                else
                {
                    $('#form_output').html(data.success);
                    $('#BusinessForm')[0].reset();
                    $('#action').val('Add');
                    $('.modal-title').text('Add Data');
                    $('#button_action').val('insert');
                    //$('#student_table').DataTable().ajax.reload();
                }
            }
        })
    });
});
</script>

@endsection